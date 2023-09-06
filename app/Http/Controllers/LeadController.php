<?php


namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\View\View;

use App\Models\Lead;
use App\Models\LeadProduct;
use App\Models\Product;
use App\Models\Client;
use App\Models\Salessource;
use App\Models\Salestype;
use App\Models\Activity;

class LeadController extends Controller
{
    public function currentMonth(Request $request):View
    {
        $todayDate = date("Y-m-d");
        $startDate = date("Y-m-01");
        $endDate = date("Y-m-t");
        $type_id = '';
        $source_id = '';
        $value = '';
        $require = [
            ['user_id', Auth::user()->id]
        ];
        $t = [];

        $leads = Lead::query()
            ->whereBetween('executionDate', [$startDate, $endDate ])
            ->orderBy('executionDate', 'desc')
            ->paginate(20);
        
        $sources = Salessource::where('user_id',Auth::user()->id)->orderBy('source')->get();
        $types = Salestype::where('user_id',Auth::user()->id)->orderBy('order')->get();
        
        //dd( $require, $type_id, $source_id);
        return view('leads.index',
            [
                'leads' => $leads,
                'sources' => $sources,
                'types' => $types,
                'type_id' =>$type_id,
                'source_id' => $source_id,
                'startDate' =>$startDate,
                'endDate' =>$endDate,
                'value' => $value,
            ])
            ->with('i', (request()->input('page', 1) - 1) * 20);


    }

    public function search(Request $request):View
    {
        $startDate = '';
        $endDate = '';
        $type_id = '';
        $source_id = '';
        $value = '';
        $require = [
            ['user_id', Auth::user()->id]
        ];
        $t = [];

        $leadsQuery = Lead::query();

        ///////////
        // stan zamówienia 
        $type_id = ($request->type_id !== null ? $request->type_id : null);
        if($type_id !== null){
            $reqType = ['type_id', $request->type_id];
            $require[] = $reqType;
        }
        // źródło pozyskania klienta
        $source_id = ($request->source_id !== null ? $request->source_id : null);
        if($source_id !== null){
            $reqSource = ['source_id', $request->source_id];
            $require[] = $reqSource;
        }
        // zamówienia opłacone / nieopłacone
        $value = ($request->value !== null ? $request->value : null);
        if($value == 2){ //opłacone
            $leadsQuery->whereColumn('leadValue', '=', 'advanceValue');
        } elseif ($value == 1) { //nieopłacone
            $leadsQuery->whereColumn('leadValue', '>', 'advanceValue');
        } else {
            
        }
        // zakres dat
        $startDate= $request->date_start;
        $endDate = $request->date_end;

        if(isset($startDate) AND isset($endDate)) {
            $t[]=['1',$startDate, $endDate];
            $leadsQuery->whereBetween('executionDate', [$startDate, $endDate ]);
        } elseif (!isset($startDate) AND isset($endDate)){
            $t[]=['2',$startDate, $endDate];
            $leadsQuery->whereDate('executionDate','<=', $endDate);
        } elseif (isset($startDate) AND !isset($endDate)){
            $t[]=['3',$startDate, $endDate];
            $leadsQuery->whereDate('executionDate','>=', $startDate);
        } else {
            $t[]=['4',$startDate, $endDate];
        }
       
        //$leadsQuery->whereBetween('executionDate', [$startDate, $endDate ]);
        //dd($t);
        // pytanie
        $leadsQuery->where($require)
                ->orderBy('executionDate', 'desc');
        $leads = $leadsQuery->paginate(20);
        
        $sources = Salessource::where('user_id',Auth::user()->id)->orderBy('source')->get();
        $types = Salestype::where('user_id',Auth::user()->id)->orderBy('order')->get();
        
        //dd( $require, $type_id, $source_id);
        return view('leads.index',
            [
                'leads' => $leads,
                'sources' => $sources,
                'types' => $types,
                'type_id' =>$type_id,
                'source_id' => $source_id,
                'startDate' =>$startDate,
                'endDate' =>$endDate,
                'value' => $value,
            ])
            ->with('i', (request()->input('page', 1) - 1) * 20);
    }
    
    
    public function index():View
    {
        $startDate = '';
        $endDate = '';
        $type_id = '';
        $source_id = '';
        $value = '';

        $sources = Salessource::where('user_id',Auth::user()->id)->orderBy('source')->get();
        $types = Salestype::where('user_id',Auth::user()->id)->orderBy('order')->get();
        $leads = Lead::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->paginate(20);
        return view('leads.index',
        [
            'leads' => $leads,
            'sources' => $sources,
            'types' => $types,
            'type_id' =>$type_id,
            'source_id' => $source_id,
            'startDate' =>$startDate,
            'endDate' =>$endDate,
            'value' => $value,
        ])
        ->with('i', (request()->input('page', 1) - 1) * 20);    }


    public function create()
    {
        $sources = Salessource::where('user_id',Auth::user()->id)->orderBy('source')->get();
        $types = Salestype::where('user_id',Auth::user()->id)->orderBy('order')->get();
        $clients = Client::where('user_id',Auth::user()->id)->select('name', 'phone', 'email')->orderBy('name')->get();
        $products = Product::where('user_id',Auth::user()->id)->select('name', 'sku')->orderBy('name')->get();
       
        return view('leads.create',compact('products', 'clients', 'sources','types'));
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'title' => 'required',
            'source_id' => 'required',
            'type_id' => 'required',
            'executionDate' => 'required',
            'client_name' => 'required',
        ]);
        $inputs = $request->all();

        if(!empty($inputs)){
            
            if(empty($inputs['client_id'])) {
                $client= new Client;
            } else {
                $client = Client::where('user_id',Auth::user()->id)->where('id',$inputs['client_id'])->first();
            } 

            $client->name = isset($inputs['client_name']) ? $inputs['client_name'] : '';
            $client->phone = isset($inputs['client_phone']) ? $inputs['client_phone'] : '';
            $client->email = isset($inputs['client_email']) ? $inputs['client_email'] : '';
            $client->social = isset($inputs['client_social']) ? $inputs['client_social'] : '';
            $client->firm = isset($inputs['client_firm']) ? $inputs['client_firm'] : '';
            $client->note= isset($inputs['client_note']) ? $inputs['client_note'] : '';
            $client->user_id = $request->user()->id;
            $client->save();
            $client_id = $client->id;
            
            // activity 
            if(empty($inputs['client_id'])) {
                $activity = new Activity;
                $activity->user_id = Auth::user()->id;
                $activity->action = 'Add ';
                $activity->ip_address = request()->ip();
                $activity->what =  'new '.$client->name.' ('.$client->id.') to Klienci';
                $activity->save();
            }

            $lead = new Lead;
            $lead->prefix = Str::random(12);  
            $lead->title = isset($inputs['title']) ? $inputs['title'] : '';
            $lead->note = isset($inputs['note']) ? $inputs['note'] : '';
            $lead->noteForClient = isset($inputs['noteForClient']) ? $inputs['noteForClient'] : '';
            $lead->source_id = isset($inputs['source_id']) ? $inputs['source_id'] : '';
            $lead->type_id = isset($inputs['type_id']) ? $inputs['type_id'] : '';

            $lead->executionDate = isset($inputs['executionDate']) ? $inputs['executionDate'] : '';

            $executionTime = isset($inputs['executionTime']) ? $inputs['executionTime'] : '';
            
            $lead->executionTime = date("H:i", strtotime($executionTime));
            $lead->leadValue = isset($inputs['leadValue']) ? $inputs['leadValue'] : '';
            if($lead->type_id == 20) {
                $lead->advanceValue = $lead->leadValue;
            } else {
                $lead->advanceValue = isset($inputs['advanceValue']) ? $inputs['advanceValue'] : 0;
            }

            $lead->user_id = $request->user()->id;
            $lead->client_id = $client_id;
            $lead->save();
            
            // activity 
            $activity = new Activity;
            $activity->user_id = Auth::user()->id;
            $activity->action = 'Add ';
            $activity->ip_address = request()->ip();
            $activity->what =  'new leads '.$lead->title.' ('.$lead->id.') to Zamówienia';
            $activity->save();

            //dd($inputs['product_id']);
            if(!empty($inputs['product_id'])){
                foreach ($inputs['product_id'] as $key=>$value) {
                    $leadproduct = new LeadProduct;
                    $leadproduct->lead_id = $lead->id;
                    $leadproduct->product_id = $inputs['product_id'][$key];
                    $leadproduct->quant =$inputs['product_quant'][$key];
                    $leadproduct->product_price =$inputs['product_price'][$key];
                    $leadproduct->user_id =  $request->user()->id;
    
                    $leadproduct->save();
                }
            
            }
            return redirect()
                    ->route('leads.show', $lead->id)
                    ->with('success','Zamówienie created successfully.');
            
        }
        
    }

    public function show(Request $request, string $id)
    {
        $lead = Lead::where('user_id',Auth::user()->id)->where('id', $id)->first();
        $client = Client::where('user_id',Auth::user()->id)->where('id', $lead->client_id)->first();
        $leadProduct = LeadProduct::where('user_id',Auth::user()->id)->where('lead_id', $lead->id)->orderBy('product_id')->get();
        $sources = Salessource::where('user_id',Auth::user()->id)->orderBy('source')->get();
        $types = Salestype::where('user_id',Auth::user()->id)->orderBy('order')->get();
        $products = Product::where('user_id',Auth::user()->id)->select('id','name', 'sku')->orderBy('sku')->get();
        
        return view('leads.show',compact('lead', 'client', 'leadProduct','sources','types','products'));
    }

    public function addProducts (Request $request)
    {
        $inputs = $request->all();
        //$lead = DB::table('leads')->where('id', $request['lead_id'])->first();
        $lead = Lead::find($request['lead_id']);
        
        //$leadValue = $lead->leadValue;
        if(!empty($inputs['product_id'])){
            foreach ($inputs['product_id'] as $key=>$value) {
                $leadproduct = new LeadProduct;
                $leadproduct->lead_id = $request['lead_id'];
                $leadproduct->product_id = $inputs['product_id'][$key];
                $leadproduct->quant =$inputs['product_quant'][$key];
                $leadproduct->product_price =$inputs['product_price'][$key];
                $leadproduct->user_id =  $request->user()->id;
                
                $lead->leadValue += ($leadproduct->product_price*$leadproduct->quant);
                
                $leadproduct->save();
            }
            // update leadvalue in Lead

            $lead->save();
        }
        return redirect()->route('leads.show', $request['lead_id']);
    }

    

    public function update(Request $req)
    {
        $lead = Lead::where('user_id',Auth::user()->id)->where('id', $req->lead_id)->first();
                
        if(isset($req->executionDate)){
            $lead->executionDate = isset($req->executionDate) ? $req->executionDate : '';
        }
        if(isset($req->executionTime)){
            $executionTime = isset($req->executionTime) ? $req->executionTime : '';
            $lead->executionTime = date("H:i", strtotime($executionTime));
        }
        if(isset($req->type_id)){
            $lead->type_id = isset($req->type_id) ? $req->type_id : '';
        }
        if(isset($req->advanceValue)){
            $lead->advanceValue += isset($req->advanceValue) ? $req->advanceValue : ' ';
        }
        if(isset($req->note)){
            $lead->note = isset($req->note) ? $req->note : ' ';
        }

        $lead->save();

        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->action = 'Update ';
        $activity->ip_address = request()->ip();
        $activity->what =  'leads '.$lead->title.' ('.$lead->id.') in Zamówienia';
        $activity->save();

        // dodawanie nowych produktów 
        $inputs = $req->all();
        if(!empty($inputs['product_id'])){
            foreach ($inputs['product_id'] as $key=>$value) {
                $leadproduct = new LeadProduct;
                $leadproduct->lead_id = $lead->id;
                $leadproduct->product_id = $inputs['product_id'][$key];
                $leadproduct->quant =$inputs['product_quant'][$key];
                $leadproduct->product_price =$inputs['product_price'][$key];
                $leadproduct->user_id =  $request->user()->id;

                $leadproduct->save();
            }
        
        }
        

        return redirect()
                    ->route('leads.show', $req->lead_id)
                    ->with('success','Zamówienie updated successfully.');

        

    }



    public function productDestroy(Request $request)
    {
        $leadProduct = LeadProduct::where('user_id',Auth::user()->id)->where('id', $request->id)->first();
        $lead = Lead::where('user_id',Auth::user()->id)->where('id', $request->lead_id)->first();

        $quant = $leadProduct->quant;
        $price = $leadProduct->product_price;
        $value = $quant * $price;
        
        $lead->leadValue -= $value;
        $lead->save();

        LeadProduct::whereId($leadProduct->id)->delete();
        
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->action = 'Remove ';
        $activity->ip_address = request()->ip();
        $activity->what =  'product ('.$leadProduct->id.') from Zamówienie';
        $activity->save();

        return redirect()
                ->route('leads.show',$request->lead_id)
                ->with('success','Lead deleted successfully.');

    }

    public function destroy(Request $request)
    {
        $lead = Lead::where('user_id',Auth::user()->id)->where('id', $request->id)->first();
        
        LeadProduct::where('lead_id',$lead->id)->delete();
        Lead::whereId($lead->id)->delete();
        
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->action = 'Remove ';
        $activity->ip_address = request()->ip();
        $activity->what =  ''.$lead->title.' ('.$lead->id.') from Zamówienia';
        $activity->save();

        return redirect()
                ->route('leads.index')
                ->with('success','Lead deleted successfully.');
            
        
    }
}

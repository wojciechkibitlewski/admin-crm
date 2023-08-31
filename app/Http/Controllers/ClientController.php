<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Carbon\Carbon;

use App\Models\Client;
use App\Models\Activity;

class ClientController extends Controller
{
    public function index():View
    {        
        //$clients = Client::where('user_id',Auth::user()->id)->orderBy('created_at')->paginate(10);
        //return view('clients.index',compact('clients'))->with('i', (request()->input('page', 1) - 1) * 10);
        return view('clients.index');

    }

    public function search(Request $request):View
    {
        $startDate = '';
        $endDate = '';
        $require = [
            ['user_id', Auth::user()->id]
        ];
        $t = [];

        $clientsQuery = Client::query();

        // zakres dat
        $startDate= $request->date_start;
        $endDate = $request->date_end;

        if(isset($startDate) AND isset($endDate)) {
            $t[]=['1',$startDate, $endDate];
            $clientsQuery->whereBetween('created_at', [$startDate, $endDate ]);
        } elseif (!isset($startDate) AND isset($endDate)){
            $t[]=['2',$startDate, $endDate];
            $clientsQuery->whereDate('created_at','<=', $endDate);
        } elseif (isset($startDate) AND !isset($endDate)){
            $t[]=['3',$startDate, $endDate];
            $clientsQuery->whereDate('created_at','>=', $startDate);
        } else {
            $t[]=['4',$startDate, $endDate];
        }

        $clientsQuery->where($require)
                ->orderBy('created_at', 'desc');
        $clients = $clientsQuery->paginate(10);


        return view('clients.search',
            [
            'clients'=> $clients,
            'startDate' => $startDate,
            'endDate' => $endDate,
            ]
        )->with('i', (request()->input('page', 1) - 1) * 10);


    }


    public function currentMonth():View
    {
        $todayDate = date("Y-m-d");
        $startDate = date("Y-m-01");
        $endDate = date("Y-m-t");

        $clients = Client::where('user_id',Auth::user()->id)
        ->whereMonth('created_at', Carbon::today()->month)
        ->orderBy('created_at')
        ->paginate(10);

        return view('clients.search',
            [
            'clients'=> $clients,
            'startDate' => $startDate,
            'endDate' => $endDate,
            ]
        )->with('i', (request()->input('page', 1) - 1) * 10);
    }


    public function create()
    {
        return view('clients.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $inputs = $request->all();
        //dd($inputs);
        if(!empty($inputs)){
            $client = new Client;
            $client->name = isset($inputs['name']) ? $inputs['name'] : '';
            $client->email = isset($inputs['email']) ? $inputs['email'] : '';
            $client->phone = isset($inputs['phone']) ? $inputs['phone'] : '';
            $client->social = isset($inputs['social']) ? $inputs['social'] : '';
            $client->firm = isset($inputs['firm']) ? $inputs['firm'] : '';
            $client->note= isset($inputs['note']) ? $inputs['note'] : '';
            $client->user_id = $request->user()->id;

            // activity 
            $activity = new Activity;
            $activity->user_id = Auth::user()->id;
            $activity->action = 'Add ';
            $activity->ip_address = request()->ip();
            $activity->what =  'new '.$client->name.' to Klienci';
            $activity->save();
            //dd($client);
            try {
                if ($client->save()) {
                    return redirect()
                        ->route('clients.index')
                        ->with('success', 'Clients created successfully.');
                }
            } catch (\Exception $e) {
                //dd($e);
                return $e->getMessage();
                                
            }
        }
    }

    public function show(Request $request, string $id)
    {
        $client = Client::where('user_id',Auth::user()->id)->where('id',$id)->first();
        return view('clients.show',compact('client'));
    }

    public function edit(Request $request, string $id)
    {
        $client = Client::where('user_id',Auth::user()->id)->where('id',$id)->first();
        
        return view('clients.edit',compact('client'));        
    }

    public function update(Request $request)
    {
        $client = Client::where('user_id',Auth::user()->id)->where('id',$request['id'])->first();

        $request->validate([
            'name' => 'required',
        ]);

        Client::whereId( $request['id'])->where('user_id',Auth::user()->id)->update([
            'name' => $request->name,
            'email' => isset($request->email) ? $request->email : ' ',
            'phone' => isset($request->phone) ? $request->phone : ' ',
            'social' => isset($request->social) ? $request->social : ' ',
            'firm' => isset($request->firm) ? $request->firm : ' ',
            'note' => isset($request->note) ? $request->note : ' ',
        ]);
        
        // activity 
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->action = 'Update  ';
        $activity->ip_address = request()->ip();
        $activity->what =  ''.$client->name.' in Klienci';
        $activity->save();

        return redirect()
                ->route('clients.index')
                ->with('success','Client updated successfully.');


    }

    public function destroy(Request $request)
    {
        $client = Client::where('user_id',Auth::user()->id)->where('id',$request['id'])->first();
        Client::whereId($client->id)->delete();

        // activity 
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->action = 'Remove ';
        $activity->ip_address = request()->ip();
        $activity->what = $client->name.' from Klienci';
        $activity->save();

        return redirect()
            ->route('clients.index')
            ->with('success','Client deleted successfully.');

    }
}

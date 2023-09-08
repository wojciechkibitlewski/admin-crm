<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\View\View;
use Carbon\Carbon;

use App\Models\Client;
use App\Models\Lead;

use App\Models\Activity;

class ClientController extends Controller
{
    public function index():View
    {        
        return view('clients.index');

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
        $leads = Lead::where('client_id', $id)->get();
        $leadsValue = Lead::where('client_id', $id)->sum(DB::raw('leadValue'));
        $advanceValue = Lead::where('client_id', $id)->sum(DB::raw('advanceValue'));

        return view('clients.show',[
            'client' => $client,
            'leadsValue' => $leadsValue,
            'advanceValue' => $advanceValue,
            'leads' => $leads
        ]);
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

        Client::whereId( $request['id'])->where('user_id',Auth::user()->id)->update([
            'name' => '[destroy]',
            'email' => ' ',
            'phone' => ' ',
            'social' => ' ',
            'firm' => ' ',
        ]);

        // activity 
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->action = 'Destroy data';
        $activity->ip_address = request()->ip();
        $activity->what = $client->name.' from Klienci';
        $activity->save();

        return redirect()
            ->route('clients.index')
            ->with('success','Client deleted successfully.');

    }
}

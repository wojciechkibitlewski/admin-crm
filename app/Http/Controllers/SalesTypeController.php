<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use App\Models\Salestype;
use App\Models\Activity;

class SalesTypeController extends Controller
{
    public function index()
    {
        $types = Salestype::where('user_id',Auth::user()->id)->orderBy('order','asc')->paginate(10);
       // dd($types);
        return view('settings.salestype.index',compact('types'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('settings.salestype.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'order' => 'required',

        ]);
        $inputs = $request->all();

        if(!empty($inputs)){
            $type = new Salestype;
            $type->type = isset($inputs['type']) ? $inputs['type'] : '';
            $type->order = isset($inputs['order']) ? $inputs['order'] : '';
            $type->user_id = Auth::user()->id;

            // activity 
            $activity = new Activity;
            $activity->user_id = Auth::user()->id;
            $activity->action = 'Add ';
            $activity->ip_address = request()->ip();
            $activity->what =  $type->type.' to Stany realizacji zamówienia';
            $activity->save();
            try {
                if ($type->save()) {
                    return redirect()
                        ->route('settings.salestype.index')
                        ->with('success', 'Type created successfully.');
                }
            } catch (\Exception $ex) {
                return redirect()
                    ->route('settings.salestype.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
            }
        }
        
    }

    public function show(Request $request, string $id)
    {
        $type = Salestype::where('user_id',Auth::user()->id)->where('id',$id)->first();
        return view('settings.salestype.show',compact('type'));
    }
    
    public function edit(Request $request, string $id)
    {
        $type = Salestype::where('user_id',Auth::user()->id)->where('id',$id)->first();
        return view('settings.salestype.edit',compact('type'));
        
    }

    public function update(Request $request)
    {
        $type = Salestype::where('user_id',Auth::user()->id)->where('id',$request['id'])->first();

        $request->validate([
            'type' => 'required',
            'order' => 'required',

        ]);
        $inputs = $request->all();

        //dd($inputs);
        try {
            Salestype::whereId( $type->id)->where('user_id',Auth::user()->id)->update([
                'type' => $inputs['type'],
                'order' => $inputs['order'],

            ]);
            // activity 
            $activity = new Activity;
            $activity->user_id = Auth::user()->id;
            $activity->action = 'Update ';
            $activity->ip_address = request()->ip();
            $activity->what = $type->type.' to '.$inputs['type'].' in Stany realizacji zamówienia';
            $activity->save();

            return redirect()
                    ->route('settings.salestype.index')
                    ->with('success','Type updated successfully.');
            
        } catch (\Exception $ex) {
            return redirect()
                    ->route('settings.salestype.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
        }

    }

    public function destroy(Request $request)
    {
        $type = Salestype::where('user_id',Auth::user()->id)->where('id',$request['id'])->first();
        $inputs = $request->all();
        Salestype::whereId($type->id)->delete();

        // activity 
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->action = 'Remove ';
        $activity->ip_address = request()->ip();
        $activity->what = $type->type.' from Stany realizacji zamówienia';
        $activity->save();

        return redirect()
            ->route('settings.salestype.index')
            ->with('success','Type deleted successfully.');
    }
}

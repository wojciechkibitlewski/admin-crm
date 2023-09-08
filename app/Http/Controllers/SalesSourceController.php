<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use App\Models\Salessource;
use App\Models\Activity;


class SalesSourceController extends Controller
{
    public function index()
    {
        $sources = Salessource::where('user_id',Auth::user()->id)->orderBy('id','asc')->paginate(10);
        return view('settings.salessource.index',compact('sources'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('settings.salessource.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'source' => 'required',
        ]);
        $inputs = $request->all();

        if(!empty($inputs)){
            $source = new Salessource;
            $source->source = isset($inputs['source']) ? $inputs['source'] : '';
            $source->user_id = Auth::user()->id;

            // activity 
            $activity = new Activity;
            $activity->user_id = Auth::user()->id;
            $activity->action = 'Add ';
            $activity->ip_address = request()->ip();
            $activity->what =  $source->source.' to Źródła pozyskiwania klientów';
            $activity->save();
            try {
                if ($source->save()) {
                    return redirect()
                        ->route('settings.salessource.index')
                        ->with('success', 'Source created successfully.');
                }
            } catch (\Exception $ex) {
                return redirect()
                    ->route('settings.salessource.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
            }
        }
        
    }

    public function show(Request $request, string $id)
    {
        $source = Salessource::where('user_id',Auth::user()->id)->where('id',$id)->first();
        return view('settings.salessource.show',compact('source'));
    }
    
    public function edit(Request $request, string $id)
    {
        $source = Salessource::where('user_id',Auth::user()->id)->where('id',$id)->first();
        return view('settings.salessource.edit',compact('source'));
        
    }

    public function update(Request $request)
    {
        $source = Salessource::where('user_id',Auth::user()->id)->where('id',$request['id'])->first();

        $request->validate([
            'source' => 'required',
        ]);
        $inputs = $request->all();

        //dd($inputs);
        try {
            Salessource::whereId( $source->id)->where('user_id',Auth::user()->id)->update([
                'source' => $inputs['source']
            ]);
            // activity 
            $activity = new Activity;
            $activity->user_id = Auth::user()->id;
            $activity->action = 'Update ';
            $activity->ip_address = request()->ip();
            $activity->what = $source->source.' to '.$inputs['source'].' in Źródła pozyskiwania klientów';
            $activity->save();

            return redirect()
                    ->route('settings.salessource.index')
                    ->with('success','Source updated successfully.');
            
        } catch (\Exception $ex) {
            return redirect()
                    ->route('settings.salessource.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
        }

    }

    public function destroy(Request $request)
    {
        $source = Salessource::where('user_id',Auth::user()->id)->where('id',$request['id'])->first();
        $inputs = $request->all();
        Salessource::whereId($source->id)->delete();

        // activity 
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->action = 'Remove ';
        $activity->ip_address = request()->ip();
        $activity->what = $source->source.' from Źródła pozyskiwania klientów';
        $activity->save();

        return redirect()
            ->route('settings.salessource.index')
            ->with('success','Source deleted successfully.');
    }
}

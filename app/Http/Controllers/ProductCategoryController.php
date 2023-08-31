<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

use Illuminate\View\View;
use Illuminate\Support\Str;

use App\Models\ProductCategory;
use App\Models\Activity;


class ProductCategoryController extends Controller
{
    //php
    public function index()
    {
        $productcategory = ProductCategory::where('user_id',Auth::user()->id)->orderBy('id','asc')->paginate(5);
        return view('settings.productcategory.index',compact('productcategory'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('settings.productcategory.create');
    }

    public function store(Request $request)
    {     
        $request->validate([
            'category' => 'required',
        ]);
        $inputs = $request->all();
        //dd($inputs['category']);
        
        if(!empty($inputs)){
            $productcategory = new ProductCategory;
            $productcategory->category = isset($inputs['category']) ? $inputs['category'] : '';
            $productcategory->user_id = Auth::user()->id;
            
            // activity 
            $activity = new Activity;
            $activity->user_id = Auth::user()->id;
            $activity->action = 'Add ';
            $activity->ip_address = request()->ip();
            $activity->what = $productcategory->category.' to Lista kategorii usług / produktów';
            $activity->save();

            try {
                if ($productcategory->save()) {
                    //dd('save');
                    return redirect()
                        ->route('settings.productcategory.index')
                        ->with('success', 'Product category created successfully.');
                }
            } catch (\Exception $ex) {
                //dd($ex);
                return redirect()
                    ->route('settings.productcategory.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
            }
        }
        
    }

    public function show(Request $request, string $id)
    {
        $productcategory = ProductCategory::where('user_id',Auth::user()->id)->where('id',$id)->first();
        return view('settings.productcategory.show',compact('productcategory'));
    }

    public function edit(Request $request, string $id)
    {
        $productcategory = ProductCategory::where('user_id',Auth::user()->id)->where('id',$id)->first();
        return view('settings.productcategory.edit',compact('productcategory'));
        
    }

    public function update(Request $request)
    {
        $productcategory = ProductCategory::where('user_id',Auth::user()->id)->where('id',$request['id'])->first();
        
        $request->validate([
            'category' => 'required',
        ]);
        $inputs = $request->all();

        //dd($inputs);
        try {
            ProductCategory::whereId( $productcategory->id)->where('user_id',Auth::user()->id)->update([
                'category' => $inputs['category'],

            ]);
            // activity 
            $activity = new Activity;
            $activity->user_id = Auth::user()->id;
            $activity->action = 'Update ';
            $activity->ip_address = request()->ip();
            $activity->what = $productcategory->category.' to '.$inputs['category'].' in Lista kategorii usług / produktów';
            $activity->save();
            //dd($activity);
            
            return redirect()
                    ->route('settings.productscatgory.index')
                    ->with('success','Product category updated successfully.');
            
        } catch (\Exception $ex) {
            return redirect()
                    ->route('settings.productcategory.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
        }

    }

    public function destroy(Request $request)
    {
        $inputs = $request->all();
        //dd($inputs);
        try {
            $productcategory = ProductCategory::where('user_id',Auth::user()->id)->where('id',$request['id'])->first();
            ProductCategory::whereId($productcategory->id)->delete();
            // activity 
            $activity = new Activity;
            $activity->user_id = Auth::user()->id;
            $activity->action = 'Remove ';
            $activity->ip_address = request()->ip();
            $activity->what = $productcategory->category.' from Lista kategorii usług / produktów';
            $activity->save();
            return redirect()
                    ->route('settings.productscatgory.index')
                    ->with('success','Product category deleted successfully.');
            
        } catch (\Exception $ex) {
            return redirect()
                    ->route('settings.productcategory.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
        }

    }
}

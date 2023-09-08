<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\LeadProduct;
use App\Models\Activity;

class ProductController extends Controller
{
    public function index():View
    {
        $products = Product::where('user_id',Auth::user()->id)->orderBy('name')->paginate(10);
        return view('products.index',compact('products'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        $productcategory = ProductCategory::where('user_id',Auth::user()->id)->orderBy('id','asc')->get();
        return view('products.create',compact('productcategory'));
    }

   
    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'sku' => 'required',
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
        ]);
        $inputs = $request->all();

        if(!empty($inputs)){
            $product = new Product;
            $product->sku = isset($inputs['sku']) ? $inputs['sku'] : '';
            $product->name = isset($inputs['name']) ? $inputs['name'] : '';
            $product->desc = isset($inputs['desc']) ? $inputs['desc'] : '';
            $product->price = isset($inputs['price']) ? $inputs['price'] : '';
            $product->quant = isset($inputs['quant']) ? $inputs['quant'] : '';
            $product->category_id = isset($inputs['category_id']) ? $inputs['category_id'] : '';
            $product->user_id = $request->user()->id;

            // activity 
            $activity = new Activity;
            $activity->user_id = Auth::user()->id;
            $activity->action = 'Add ';
            $activity->ip_address = request()->ip();
            $activity->what =  'new '.$product->name.' to Produkty';
            $activity->save();

            try {
                if ($product->save()) {
                    return redirect()
                        ->route('products.index')
                        ->with('success', 'Product created successfully.');
                }
            } catch (\Exception $e) {
                return $e->getMessage();
                                
            }
        }
    }

    public function show(Request $request, string $id)
    {
        $product = Product::where('user_id',Auth::user()->id)->where('id',$id)->first();
        //$leads = Lead::where('client_id', $id)->get();
        //$leadsValue = Lead::where('client_id', $id)->sum(DB::raw('leadValue'));
        //$advanceValue = Lead::where('client_id', $id)->sum(DB::raw('advanceValue'));
        $productLeadsValue = LeadProduct::where('user_id',Auth::user()->id)->where('product_id', $id)
            ->sum('product_price'); // Sumowanie cen produktów dla danego produktu

        $productLeadsCount = LeadProduct::where('user_id',Auth::user()->id)->where('product_id', $id)
            ->count(); // Ilość sprzedanych produktów danego produktu

        return view('products.show',[
            'product' => $product,
            'productLeadsValue' => $productLeadsValue,
            'productLeadsCount' => $productLeadsCount

        ]);
    }

    public function edit(Request $request, string $id)
    {
        $productcategory = ProductCategory::where('user_id',Auth::user()->id)->orderBy('id','asc')->get();
        $product = Product::where('user_id',Auth::user()->id)->where('id',$id)->first();
        
        return view('products.edit',compact('product','productcategory'));        
    }

    public function update(Request $request)
    {
        $product = Product::where('user_id',Auth::user()->id)->where('id',$request['id'])->first();

        $request->validate([
            'sku' => 'required',
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
        ]);

        Product::whereId( $request['id'])->where('user_id',Auth::user()->id)->update([
            'sku' => $request->sku,
            'name' => $request->name,
            'desc' => isset($request->desc) ? $request->desc : ' ',
            'price' => $request->price,
            'quant' => isset($request->quant) ? $request->quant : ' ',
            'category_id' => $request->category_id
        ]);
        
        // activity 
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->action = 'Update  ';
        $activity->ip_address = request()->ip();
        $activity->what =  ''.$product->name.' in Produkty';
        $activity->save();

        return redirect()
                ->route('products.index')
                ->with('success','Produkt updated successfully.');


    }

    public function destroy(Request $request)
    {
        $product = Product::where('user_id',Auth::user()->id)->where('id',$request['id'])->first();
        Product::whereId($product->id)->delete();

        // activity 
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->action = 'Remove ';
        $activity->ip_address = request()->ip();
        $activity->what = $product->name.' from Produkty';
        $activity->save();

        return redirect()
            ->route('products.index')
            ->with('success','Product deleted successfully.');

    }


}

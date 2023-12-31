<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use App\Models\Client;
use App\Models\User;
use App\Models\Salestype;
use App\Models\Salessource;
use App\Models\Product;
use App\Models\ProductCategory;

use App\Models\Lead;
use App\Models\Todo;


class Helper
{

    public static function getSalesbyCategory(string $category_id, string $month, string $year)
    {
        $sales = DB::table('lead_products')
            ->join('leads', 'leads.id', '=', 'lead_products.lead_id')
            ->join('products', 'lead_products.product_id', '=', 'products.id')
            ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->select(
                DB::raw('SUM(lead_products.product_price * lead_products.quant) as totalValue'),
            )
            ->where('lead_products.user_id', Auth::user()->id)
            ->where('product_categories.id', $category_id)
            ->whereYear('leads.executionDate', $year)
            ->whereMonth('leads.executionDate', $month)
            ->groupBy('products.category_id')
            ->first(); 
        
        if(isset($sales)) {
            return $sales->totalValue;
        } else {
            return null;
        }    
        
        //return $sales->totalValue;
    }


    public static function getLeadByDate(string $date)
    {
        $leads = Lead::where('user_id', Auth::user()->id)
            ->where('executionDate', $date)
            ->orderBy('executionTime', 'asc')
            ->get();
        return $leads;
    }

    public static function getTodoByDate(string $date)
    {
        $todos = Todo::where('user_id', Auth::user()->id)
            ->where('date', $date)
            ->orderBy('order','asc')
            ->get();
        return $todos;
    }

    public static function getMonthName(string $string)
    {
        

        return $user->profile_photo_url;
    }
    public static function userPhoto(string $string)
    {
        $user = User::findOrFail($string);
        return $user->profile_photo_url;
    }
    public static function userName(string $string)
    {
        $user = User::findOrFail($string);
        return $user->name;
    }

    public static function shout(string $string)
    {
        return strtoupper($string);
    }

    public static function getClientName(string $id)
    {
        $client = Client::findOrFail($id);
        return $client->name;
    }

    public static function getStateName(string $id)
    {
        $type = Salestype::findOrFail($id);
        return $type->type;
    }
    
    public static function getSourceName(string $id)
    {
        $source = Salessource::findOrFail($id);
        return $source->source;
    }

    public static function getProductName(string $id)
    {
        $product = Product::findOrFail($id);
        return $product->name;
    }

    public static function getCategoryName(string $id)
    {
        $category = ProductCategory::findOrFail($id);
        return $category->category;
    }

    public static function formatDesc(string $string)
    {
        //$string = preg_replace("/[\n\r]/", "<br/>", $string);
        $string = nl2br($string);
        
        //$string = htmlspecialchars($string);
        return $string;
    }

    
}
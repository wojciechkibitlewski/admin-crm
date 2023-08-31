<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

use App\Models\Client;
use App\Models\User;
use App\Models\Salestype;
use App\Models\Salessource;
use App\Models\Product;
use App\Models\ProductCategory;

class Helper
{
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
        //$client = Client::select('name')->where('id','=',$id)->get();
        return $client->name;
    }

    public static function getStateName(string $id)
    {
        $type = Salestype::findOrFail($id);
        //$client = Client::select('name')->where('id','=',$id)->get();
        return $type->type;
    }
    
    public static function getSourceName(string $id)
    {
        $source = Salessource::findOrFail($id);
        //$client = Client::select('name')->where('id','=',$id)->get();
        return $source->source;
    }

    public static function getProductName(string $id)
    {
        $product = Product::findOrFail($id);
        //$client = Client::select('name')->where('id','=',$id)->get();
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
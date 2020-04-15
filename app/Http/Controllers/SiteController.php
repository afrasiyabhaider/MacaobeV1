<?php

namespace App\Http\Controllers;

use App\BusinessLocation;
use App\Product;
use App\ProductVariation;
use App\VariationLocationDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function home()
    {
        $location_id = BusinessLocation::where('name','Web Shop')->orWhere('name','webshop')->orWhere('name','web shop')->orWhere('name','Website')->orWhere('name','website')->pluck('id');

        /**
         * Product is stored as many time as its size is selected 
         * e.g if a product have 4 sizes then it will be stored 
         * 4 times so we have to groupBy a product by its refference
         *  so we did
         * 
        */
        $data = VariationLocationDetails::where('location_id','=',$location_id)->join('products as p','p.id','=','variation_location_details.product_id')->groupBy('p.refference')->orderBy('p.created_at','Desc')->get();

        // dd($data);
        
        
        return view('site.home',compact('data'));
    }

}

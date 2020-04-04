<?php

namespace App\Http\Controllers;

use App\BusinessLocation;
use App\Product;
use App\ProductVariation;
use App\VariationLocationDetails;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $location_id = BusinessLocation::where('name','Website')->pluck('id');
        if (isset($location_id[0])) {
            $all_variation = VariationLocationDetails::where('location_id', $location_id[0])->where('qty_available','>',0)->get();

            $new_variation = VariationLocationDetails::where('location_id', $location_id[0])->where('qty_available','>',0)->orderBy('created_at','desc')->get();

            // dd($variation[0]->products()->first());
            // $product = Product::find(320);
            // dd($product->variation_location_details()->get());
        }

        return view('site.home',compact('all_variation','new_variation'));
    }
}

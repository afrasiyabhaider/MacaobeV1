<?php

namespace App\Http\Controllers;

use App\BusinessLocation;
use App\Color;
use App\Product;
use App\ProductImages;
use App\ProductVariation;
use App\Size;
use App\SpecialCategoryProduct;
use App\VariationLocationDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function home()
    {
        $location_id = BusinessLocation::where('name','Web Shop')->orWhere('name','webshop')->orWhere('name','web shop')->orWhere('name','Website')->orWhere('name','website')->orWhere('name','MACAO WEBSHOP')->pluck('id');

        /**
         * Product is stored as many time as its size is selected 
         * e.g if a product have 4 sizes then it will be stored 
         * 4 times so we have to groupBy a product by its refference
         *  so we did
         * 
        */
        $data = VariationLocationDetails::where('location_id','=',$location_id)->join('products as p','p.id','=','variation_location_details.product_id')->groupBy('p.refference')->orderBy('p.created_at','Desc')->get();

        $featured = SpecialCategoryProduct::where('featured',1)->get();
        $new_arrival = SpecialCategoryProduct::where('new_arrival',1)->get();
        $sale = SpecialCategoryProduct::where('sale',1)->get();
        // dd($featured);
        
        
        return view('site.home',compact('data','featured','new_arrival','sale'));
    }

    /**
     *  Product Detail
     *
     **/
    public function detail($id)
    {   
        $id = decrypt($id);
        
        $product = Product::find($id);

        $special_category = SpecialCategoryProduct::where('refference',$product->refference)->first();
        
        $images = ProductImages::where('refference',$product->refference)->get();
        
        // dd($special_category);

        $color_ids = Product::where('refference',$product->refference)->distinct()->orderBy('color_id','asc')->pluck('color_id');
        
        $colors = Color::whereIn('id',$color_ids)->get();
        
        $size_ids = Product::where('refference',$product->refference)->distinct()->orderBy('color_id','asc')->pluck('sub_size_id');
        
        $sizes = Size::whereIn('id',$size_ids)->get();
        
        $product_ids = Product::where('refference',$product->refference)->pluck('id');

        // dd($product_ids);

        $web_product = VariationLocationDetails::whereIn('product_id',$product_ids)->get();

        // $social = Share::page('http://jorenvanhocht.be', 'Share title')
        //                 ->facebook()
        //                 ->twitter()
        //                 ->linkedin('Extra linkedin summary can be passed here')
        //                 ->whatsapp();
        // dd($social);   

        // dd($sizes);

        return view('site.detail',compact('product','special_category','images','colors','sizes','web_product'));
    }
}

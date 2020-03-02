@extends('layouts.onlyApp')
@section('title', __('sale.products'))
<style type="text/css">
	.heh{
		height: 128px;
    width: 31% !important;
    margin : 5px 8px 0 8px;
	}
	.showV{
		visibility: visible;
	}
	.hideV{
		visibility: hidden;
	}
</style>
@section('content')
<section class="content-header">
    <h1>PRINT PRODUCT LIST
        <a href="{{url('products')}}" class="btn btn-md btn-success">GO Back To Products </a>  - <button class="btn btn-md btn-warning" type="button" onclick="window.print();return false;"><i class="fa fa-pencil">Print</i></button> 
    </h1>
    <div class="col-md-12">
    	<div class="col-md-2"><input type="checkbox" data-id="name" value="" class=" checkPrint" checked="false"> Name</div>
    	<div class="col-md-2"><input type="checkbox" data-id="price" value="" class=" checkPrint" checked="false"> Price</div>
    	<!-- <div class="col-md-2"><input type="checkbox" data-id="sku" value="" class=" checkPrint" checked="false"> Barcode</div> -->
    	<div class="col-md-2"><input type="checkbox" data-id="refference" value="" class=" checkPrint" checked="false"> Refference</div>
    	<div class="col-md-2"><input type="checkbox" data-id="size" value="" class=" checkPrint" checked="false"> Size</div>
    	<div class="col-md-2"><input type="checkbox" data-id="color" value="" class=" checkPrint" checked="false"> Color</div>
    	<div class="col-md-2"><input type="checkbox" data-id="cat" value="" class=" checkPrint" checked="false">  Category</div>
    	<div class="col-md-2"><input type="checkbox" data-id="subcat" value="" class=" checkPrint" checked="false"> SubCategory</div>
    </div>
    <br/><hr/>
    <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol> -->
</section>

<!-- Main content -->
<section class="content">
<div class="row">
	 @php $i=0; @endphp
	  @foreach($product as $objProduct)
	  @php $i++; @endphp
		  @for($j=0;$j<$objProduct->current_stock;$j++)
	  <div class="col-md-4 col-xs-4 heh" >
	  	<div class="col-md-12 col-xs-12 pull-left">

	  	 <div  class="col-md-4 col-xs-4 pull-left printList text-left" data-id="name" > <b>{{$objProduct->product  or ' '}} </b></div>

	  	 <div  class="col-md-4 col-xs-4 pull-left printList text-left" data-id="color"> {{$objProduct->ColorName  or ' '}} </div>


	  	 <div  class="col-md-4 col-xs-4 pull-right printList text-right" data-id="size"> {{$objProduct->SubSizeName  or ' '}} </div>

		</div>
		<div class="col-md-12 col-xs-12 col-sm-12">
			<img style="width: 100%"  src="data:image/png;base64,{{DNS1D::getBarcodePNG($objProduct->sku, 'C128', 2,30,array(39, 48, 54), false)}}">
			@php
			 $barcodeArr = str_split($objProduct->sku, 1);
		    @endphp
			<center class='barcodetc' style='word-spacing: 15px;font-size: 20px;font-weight: bold;'>
			    @foreach($barcodeArr As $b)
			    <span >{{$b}}</span>
			    @endforeach
		    </center>
		</div>
		<div class="col-md-6 col-xs-5 pull-left printList" data-id="refference">{{$objProduct->refference  or ' '}}</div>
		<div class="col-md-6 col-xs-5 pull-left printList text-right" data-id="price">€ 
			 @if($objProduct->max_price != $objProduct->min_price && $objProduct->type == "variable") -  <span class="display_currency" data-currency_symbol="true">{{$objProduct->max_price}}</span> @else <span class="display_currency" data-currency_symbol="true">{{$objProduct->max_price}}</span> @endif
		</div>
		
		<div  class="col-md-6 col-xs-5 pull-left printList text-left" data-id="cat">
		     {{$objProduct->category  or ' '}}
		</div>
		<div  class="col-md-6 col-xs-5 pull-left printList text-right" data-id="subcat">
		     {{$objProduct->sub_category  or ' '}}
		</div>

		 
		
	<!--	<div class="col-md-6  col-xs-5 pull-left printList hide"  data-id="qty">Qty : {{$objProduct->current_stock  or ' '}}  </div>-->
	</div>
		  @endfor 
	  @endforeach 
</div> 
<script src="{{url('/')}}/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js?v=36"></script>
<script src="{{url('/')}}/plugins/jquery-ui/jquery-ui.min.js?v=36"></script>
 <script type="text/javascript">
  
 	$(document).ready(function(){
	  $(".checkPrint").click(function(){
	  	var DontShowId = $(this).attr("data-id");
	  	var DontShowChecked = $(this).prop("checked");
	    $(".printList").each(function(){
	    	var  ShowId = $(this).attr("data-id");
	    	if(ShowId == DontShowId)
	    	{
	    		if(DontShowChecked)
	    		{
	    			$(this).addClass("showV").removeClass("hideV");
	    		}else
	    		{
	    			$(this).addClass("hideV").removeClass("showV");
	    		}
	    	}
	    });
	  });
	});
 </script> 

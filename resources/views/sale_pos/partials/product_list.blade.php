@forelse($products as $product)
	{{-- @dd($product->color()->first()) --}}
	<div class="col-md-3 col-xs-4 product_list no-print">
		<div class="product_box bg-gray" data-toggle="tooltip" data-placement="bottom" data-variation_id="{{$product->variation_id}}" title="{{$product->name}} @if($product->type == 'variable')- {{$product->variation}} @endif {{ '(' . $product->sub_sku . ')'}}">
			<div class="image-container">
				<img src="{{$product->image_url}}" alt="" class="img-fluid img-thumbnail" style="width:80%;height: 60px">
			</div>
			<div class="text text-uppercase">
				<small>
					{{$product->sub_size()->first()->name}} - 
					<strong class="text-info">{{$product->name}} </strong>
					@if($product->type == 'variable')
					- {{$product->variation}}
					@endif - 
					{{$product->selling_price}} <i class="fa fa-euro"></i>
				</small>
			</div>
			<small class="text-success">
				({{$product->sku}})
			</small>
		</div>
	</div>
@empty
	<input type="hidden" id="no_products_found">
	<div class="col-md-12">
		<h4 class="text-center">
			@lang('lang_v1.no_products_to_display')
		</h4>
	</div>
@endforelse
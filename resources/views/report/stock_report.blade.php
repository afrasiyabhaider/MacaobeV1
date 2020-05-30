@extends('layouts.app')
@section('title', __('report.stock_report'))

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>{{ __('report.stock_report')}}</h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            @component('components.filters', ['title' => __('report.filters')])
              {!! Form::open(['url' => action('ReportController@getStockReport'), 'method' => 'get', 'id' => 'stock_report_filter_form' ]) !!}
                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('location_id',  __('purchase.business_location') . ':') !!}
                        {!! Form::select('location_id', $business_locations, null, ['class' => 'form-control select2', 'style' => 'width:100%']); !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('category_id', __('category.category') . ':') !!}
                        {!! Form::select('category', $categories, null, ['placeholder' => __('messages.all'), 'class' => 'form-control select2', 'style' => 'width:100%', 'id' => 'category_id']); !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('sub_category_id', __('product.sub_category') . ':') !!}
                        {!! Form::select('sub_category', array(), null, ['placeholder' => __('messages.all'), 'class' => 'form-control select2', 'style' => 'width:100%', 'id' => 'sub_category_id']); !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('suppliers', 'Suppliers :') !!}
                        {!! Form::select('suppliers', $suppliers, null, ['placeholder' => __('messages.all'), 'class' => 'form-control select2', 'style' => 'width:100%']); !!}
                    </div>
                </div>
                {{-- <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('unit',__('product.unit') . ':') !!}
                        {!! Form::select('unit', $units, null, ['placeholder' => __('messages.all'), 'class' => 'form-control select2', 'style' => 'width:100%']); !!}
                    </div>
                </div> --}}
                <div class="row" id="location_filter">
                    <div class="form-group col-md-3">
                        {!! Form::label('from_date',   ' From Date:') !!}
                        <input type="date" name="product_list_from_date" value="{{date('Y-m-d')}}" id="product_list_from_date" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        {!! Form::label('to_date',   ' To Date:') !!}
                        <input type="date" name="product_list_to_date" id="product_list_to_date" value="" class="form-control">
                    </div> 
                </div>
                {!! Form::close() !!}
            @endcomponent
        </div>
    </div>
    
    @component('components.widget', ['class' => 'box-primary'])
    <div class="row">
        <div class="col-12">
            {!! Form::open(['url' => action('ProductController@selectedBulkPrint'), 'method' => 'post', 'id' => 'bulkPrint_form' ]) !!}
                    {{-- {!! Form::submit('Print Selected', array('class' => 'btn btn-md btn-warning', 'id' => 'bulkPrint-selected')) !!} --}}
                    {!! Form::hidden('selected_products_bulkPrint', null, ['id' => 'selected_products_bulkPrint']); !!}

                    <button type="submit" class="btn btn-success pull-left" id="bulkPrint-selected" style="margin-left: 20px">
                        <i class="fa fa-print"></i> 
                        Print Selected
                    </button>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-12">
                @include('report.partials.stock_report_table')
            </div>
        </div>
        @endcomponent
</section>
<!-- /.content -->

@endsection

@section('javascript')
    <script src="{{ asset('js/report.js?v=' . $asset_v) }}"></script>
    <script>
        // $(document).on('click', '#bulkPrint-selected', function(e){
        //         e.preventDefault();
        //         var selected_rows = [];
        //         var i = 0;
        //         $('.row-select:checked').each(function () {
        //             selected_rows[i++] = $(this).val();
        //         }); 
                
        //         if(selected_rows.length > 0){
        //             $('input#selected_products_bulkPrint').val(selected_rows);
        //             // swal({
        //             //     title: LANG.sure,
        //             //     icon: "warning",
        //             //     buttons: true,
        //             //     dangerMode: true,
        //             // }).then((willDelete) => {
        //             //     if (willDelete) {
        //                     $('form#bulkPrint_form').submit();
        //         //         }
        //         //     });
        //         // } else{
        //         //     $('input#selected_products_bulkPrint').val('');
        //         //     swal('@lang("lang_v1.no_row_selected")');
        //         }    
        //     });

            /**
            * Desired Qty of Barcodes
            *
            **/
            $(document).on('click', '#bulkPrint-selected', function(e){
                e.preventDefault();
                var selected_rows = [];
                var selected_rows_qty = [];
                var i = 0;
                $('.row-select:checked').each(function () {
                    var selectedQty = $("#qty_"+$(this).val()).val();
                    // var selectedMaxQty = $("#qty_"+$(this).val()).attr('max');
                    // if(parseInt(selectedQty) <= parseInt(selectedMaxQty))
                    // {
                        selected_rows[i++] = $(this).val()+"@"+selectedQty;
                    // }
                }); 
                console.log(selected_rows);
                
                if(selected_rows.length > 0){
                    $('input#selected_products_bulkPrint').val(selected_rows);
                    // swal({
                    //     title: LANG.sure,
                    //     icon: "warning",
                    //     buttons: true,
                    //     dangerMode: true,
                    // }).then((willDelete) => {
                    //     if (willDelete) {
                            $('#unknownDiscountModal').modal('show'); 
                            $('form#bulkPrint_form').submit();
                    //     }
                    // });
                } else{
                    $('input#selected_products_bulkPrint').val('');
                    swal('@lang("lang_v1.no_row_selected")');
                }    
            })
    </script>
@endsection
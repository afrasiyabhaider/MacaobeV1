
<div class="table-responsive">
     <div class="pull-right">
        @can('product.create')
            <a class="btn btn-primary " href="{{action('ProductController@create')}}">
                        <i class="fa fa-plus"></i> @lang('messages.add')</a>
            <br><br>
        @endcan
    {!! Form::open(['url' => action('ProductController@massBulkPrint'), 'method' => 'post', 'id' => 'bulkPrint_form' ]) !!}
                    {!! Form::hidden('selected_products_bulkPrint', null, ['id' => 'selected_products_bulkPrint']); !!}
                    {!! Form::submit('Print Selected', array('class' => 'btn btn-md btn-warning', 'id' => 'bulkPrint-selected')) !!}
                    {!! Form::close() !!}
    </div>
    <div class="pull-left">
    {!! Form::open(['url' => action('ProductController@massTransfer'), 'method' => 'post', 'id' => 'bulkTransfer_form' ]) !!}
                    {!! Form::hidden('selected_products_bulkTransfer', null, ['id' => 'selected_products_bulkTransfer']); !!}
                    {!! Form::hidden('selected_products_qty_bulkTransfer', null, ['id' => 'selected_products_qty_bulkTransfer']); !!}
                    {!! Form::hidden('bussiness_bulkTransfer', null, ['id' => 'bussiness_bulkTransfer']); !!}
                    {!! Form::submit('Transfer Selected', array('class' => 'btn btn-md btn-warning', 'id' => 'bulkTransfer-selected')) !!}
                    {!! Form::close() !!}
    </div>
    <table class="table table-bordered table-striped ajax_view table-text-center" id="product_table">
        <thead>
            <tr>
                <th><input type="checkbox" id="select-all-row"></th>
                <th>&nbsp;</th>
                <th>@lang('sale.product')</th>
                <th>@lang('lang_v1.selling_price')</th>
                <th>@lang('product.color')</th>
                <th>@lang('product.size')</th>
                <th>@lang('report.current_stock')</th>
                <th>@lang('product.product_type')</th>
                <th>@lang('product.category')</th>
                <th>@lang('product.sub_category')</th>
                <th>Date</th>
                <th>BulkCode</th>
                <th>@lang('product.sku')</th>
                <th>@lang('messages.action')</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="11">
                <div style="display: flex; width: 100%;">
                    @can('product.delete')
                        {!! Form::open(['url' => action('ProductController@massDestroy'), 'method' => 'post', 'id' => 'mass_delete_form' ]) !!}
                        {!! Form::hidden('selected_rows', null, ['id' => 'selected_rows']); !!}
                        {!! Form::submit(__('lang_v1.delete_selected'), array('class' => 'btn btn-xs btn-danger', 'id' => 'delete-selected')) !!}
                        {!! Form::close() !!}
                    @endcan
                    &nbsp;
                    {!! Form::open(['url' => action('ProductController@massDeactivate'), 'method' => 'post', 'id' => 'mass_deactivate_form' ]) !!}
                    {!! Form::hidden('selected_products', null, ['id' => 'selected_products']); !!}
                    {!! Form::submit(__('lang_v1.deactivate_selected'), array('class' => 'btn btn-xs btn-warning', 'id' => 'deactivate-selected')) !!}
                    {!! Form::close() !!} @show_tooltip(__('lang_v1.deactive_product_tooltip'))
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
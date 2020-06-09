{{-- @dd($transactions) --}}
@if(!empty($transactions))
{{-- class="cursor-pointer" 
data-toggle="tooltip"
data-html="true"
title="Customer: {{optional($transaction->contact)->name}} 
     @if(!empty($transaction->contact->mobile) && $transaction->contact->is_default == 0)
          <br/>Mobile: {{$transaction->contact->mobile}}
     @endif
"  --}}
	<table class="table no-print">
          <thead>
               <tr>
                    <th>
                         Sr#
                    </th>
                    <th>
                         Transaction
                    </th>
                    <th>
                         Amount
                    </th>
               </tr>
          </thead>
		@foreach ($transactions as $transaction)
			<tr>
				<td>
					{{ $loop->iteration}}.
				</td>
				<td>
					{{ $transaction->invoice_no }} ({{optional($transaction->contact)->name}})
				</td>
				<td class="display_currency">
                         {{ $transaction->final_total }}
                         <i class="fa fa-euro-sign"></i>
				</td>
			</tr>
		@endforeach
	</table>
@else
	<p>@lang('sale.no_recent_transactions')</p>
@endif
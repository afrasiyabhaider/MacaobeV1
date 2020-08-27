<?php

namespace App\Http\Controllers;

use App\LocationTransferDetail;
use App\VariationLocationDetails;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DataMigrationController extends Controller
{
    public function location_transfer_detail_data()
    {
        try {
            DB::beginTransaction();
            $date = Carbon::create('2020-08-01');
            $now = Carbon::now();
            $vld = VariationLocationDetails::whereBetween('product_updated_at', [$date, $now])->where('location_id', '!=', 1)->get()->toArray();

            $chunk = array_chunk($vld, 500);
            // dd($chunk);

            for ($j = 0; $j < count($chunk); $j++) {
                for ($i = 0; $i < count($chunk[$j]); $i++) {
                    $location_transfer_detail = new LocationTransferDetail();
                    $location_transfer_detail->variation_id = $chunk[$j][$i]['variation_id'];
                    $location_transfer_detail->product_id = $chunk[$j][$i]['product_id'];
                    $location_transfer_detail->location_id = $chunk[$j][$i]['location_id'];
                    $location_transfer_detail->transfered_from = 1;

                    $location_transfer_detail->product_variation_id = $chunk[$j][$i]['product_variation_id'];

                    $location_transfer_detail->quantity = $chunk[$j][$i]['qty_available'];
                    $location_transfer_detail->transfered_on = $chunk[$j][$i]['product_updated_at'];

                    $location_transfer_detail->save();
                }
            }
            DB::commit();
            dd('Record Saved');
        } catch (\Exception $ex) {
            DB::rollback();
            dd('Error Occured : '.$ex->getMessage().' in File: '.$ex->getFile().' on Line: '.$ex->getLine());
        }
    }
}

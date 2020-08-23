<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationTransferDetail extends Model
{
    public function transfered_from()
    {
        return $this->hasOne(\App\BusinessLocation::class, 'transfered_from');
    }
}

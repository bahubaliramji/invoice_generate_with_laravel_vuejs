<?php

namespace App\Facades;
use Illuminate\Support\Facades\Facade;
use Carbon\Carbon;
class DateClass extends Facade{
    public function detaFormateYMD($date){
        return Carbon::createFromFormat('m/d/Y',$date)->format('Y-m-d');
    }
}


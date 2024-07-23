<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class DateClassFacade extends Facade {
    protected static function getFacadeAccessor()
    {
        return 'dateClass';
    }
}

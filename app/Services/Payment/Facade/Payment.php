<?php

namespace App\Services\Payment\Facade;

use Illuminate\Support\Facades\Facade;

class Payment extends Facade
{
    protected static function getFacadeAccessor() { return \App\Services\Payment\Payment::class; }

    /*public function res($service)
    {
        return app()->make($service);
    }

    public static function __callStatic($method, $param)
    {
        return self::res(\App\Services\Payment\Payment::class)
            ->$method(...$param);
    }*/
}

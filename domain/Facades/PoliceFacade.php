<?php

namespace domain\Facades;
use domain\Police\PoliceService;
use Illuminate\Support\Facades\Facade;

/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class PoliceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return PoliceService::class;
    }
}

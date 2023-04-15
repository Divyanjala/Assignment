<?php

namespace domain\Facades;

use domain\Growth\GrowthService;
use Illuminate\Support\Facades\Facade;

/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class GrowthFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return GrowthService::class;
    }
}

<?php

namespace domain\Facades;

use domain\Payment\PaymentService;
use Illuminate\Support\Facades\Facade;

/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class PaymentFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return PaymentService::class;
    }
}

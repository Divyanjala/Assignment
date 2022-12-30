<?php

namespace domain\Facades;

use domain\Customer\CustomerService;
use Illuminate\Support\Facades\Facade;

/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class CustomerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return CustomerService::class;
    }
}

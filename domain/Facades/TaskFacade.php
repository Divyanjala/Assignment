<?php

namespace domain\Facades;

use domain\Task\TaskService;
use Illuminate\Support\Facades\Facade;

/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class TaskFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return TaskService::class;
    }
}

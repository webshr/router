<?php

namespace Webshr\Router\Test\Controllers;

use Webshr\Router\Controller;
use Webshr\Router\ControllerMiddlewareOptions;
use Webshr\Router\ProvidesControllerMiddleware;
use Webshr\Router\Test\Middleware\AddHeaderMiddleware;

class MiddlewareProvidingController extends Controller
{
    public function returnOne()
    {
        return 'One';
    }

    public function returnTwo()
    {
        return 'Two';
    }

    public function returnThree()
    {
        return 'Three';
    }
}

<?php

namespace Webshr\Router;

use Webshr\Router\ControllerMiddlewareOptions;

interface ProvidesControllerMiddleware
{
    public function middleware($middleware) : ControllerMiddlewareOptions;

    public function getControllerMiddleware() : array;
}

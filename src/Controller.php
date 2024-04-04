<?php

namespace Webshr\Router;

use Webshr\Router\ProvidesControllerMiddlewareTrait;

abstract class Controller implements ProvidesControllerMiddleware
{
    use ProvidesControllerMiddlewareTrait;
}

<?php

namespace Webshr\Router\Test\Controllers;

use Webshr\Router\Test\Services\TestService;

class TestConstructorParamController
{
    private $testService;

    public function __construct(TestService $testService)
    {
        $this->testService = $testService;
    }

    public function returnTestServiceValue()
    {
        return $this->testService->value;
    }
}

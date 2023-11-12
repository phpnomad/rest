<?php

namespace PHPNomad\Rest\Interfaces;

use PHPNomad\Rest\Enums\Method;

interface RestStrategy
{
    /**
     * @param callable(): Controller $controllerGetter
     * @return mixed
     */
    public function registerRoute(callable $controllerGetter);
}
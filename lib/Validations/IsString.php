<?php

namespace PHPNomad\Rest\Validations;

use PHPNomad\Rest\Interfaces\Request;
use PHPNomad\Rest\Interfaces\Validation;

class IsString implements Validation
{
    /** @inheritDoc */
    public function isValid(string $key, Request $request): bool
    {
        return is_string($request->getParam($key));
    }
}
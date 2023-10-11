<?php

namespace Phoenix\Rest\Validations;

use Phoenix\Rest\Interfaces\Request;
use Phoenix\Rest\Interfaces\Validation;

class IsString implements Validation
{
    /** @inheritDoc */
    public function isValid(string $key, Request $request): bool
    {
        return is_string($request->getParam($key));
    }
}
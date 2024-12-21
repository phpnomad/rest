<?php

namespace PHPNomad\Rest\Validations;

use PHPNomad\Rest\Interfaces\Validation;
use PHPNomad\Http\Interfaces\Request;

class IsNumeric implements Validation
{
    public function isValid(string $key, Request $request): bool
    {
        return is_numeric($request->getParam($key));
    }

    public function getErrorMessage(string $key, Request $request): string
    {
        return "The key $key must be numeric.";
    }

    public function getContext(): array
    {
        return [];
    }

    public function getType(): string
    {
        return 'REQUIRES_NUMERIC';
    }
}
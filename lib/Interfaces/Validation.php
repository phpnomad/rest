<?php

namespace PHPNomad\Rest\Interfaces;

use PHPNomad\Rest\Exceptions\ValidationException;

interface Validation
{
    /**
     * Validates a given request's aspect (like headers, body, route params).
     *
     * @param string $key The key for the value to validate
     * @param Request $request
     *
     * @return bool Whether the request is valid according to this validator.
     * @throws ValidationException If the validation fails.
     */
    public function isValid(string $key, Request $request): bool;
}
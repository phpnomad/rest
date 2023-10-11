<?php

namespace Phoenix\Rest\Interfaces;

use Phoenix\Rest\Exceptions\ValidationException;

interface Validation
{
    /**
     * Validates a given request's aspect (like headers, body, route params).
     *
     * @param Request $request
     *
     * @return bool Whether the request is valid according to this validator.
     * @throws ValidationException If the validation fails.
     */
    public function isValid(Request $request): bool;
}
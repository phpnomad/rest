<?php

namespace PHPNomad\Rest\Interfaces;

use PHPNomad\Rest\Exceptions\RestException;
use PHPNomad\Http\Interfaces\Request;

interface Middleware
{
    /**
     * Process the request.
     *
     * @param Request $request
     * @return void
     * @throws RestException
     */
    public function process(Request $request): void;
}
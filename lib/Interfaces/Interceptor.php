<?php

namespace PHPNomad\Rest\Interfaces;

use PHPNomad\Rest\Exceptions\RestException;
use PHPNomad\Http\Interfaces\Request;
use PHPNomad\Http\Interfaces\Response;

interface Interceptor
{
    /**
     * Process the response.
     *
     * @param Request $request
     * @param Response $response
     * @return void
     * @throws RestException
     */
    public function process(Request $request, Response $response): void;
}
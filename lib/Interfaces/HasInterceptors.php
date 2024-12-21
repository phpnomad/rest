<?php

namespace PHPNomad\Rest\Interfaces;

use PHPNomad\Rest\Exceptions\RestException;
use PHPNomad\Http\Interfaces\Request;
use PHPNomad\Http\Interfaces\Response;

interface HasInterceptors
{
    /**
     * @param Request $request
     * @param Response $response
     * @return Interceptor[]
     * @throws RestException
     */
    public function getInterceptors(Request $request, Response $response): array;
}
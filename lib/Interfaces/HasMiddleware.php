<?php

namespace PHPNomad\Rest\Interfaces;

use PHPNomad\Rest\Exceptions\RestException;
use PHPNomad\Http\Interfaces\Request;

interface HasMiddleware
{
    /**
     * @param Request $request
     * @return Middleware[]
     * @throws RestException
     */
    public function getMiddleware(Request $request): array;
}
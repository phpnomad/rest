<?php

namespace PHPNomad\Rest\Interfaces;

use PHPNomad\Http\Interfaces\Request;
use PHPNomad\Http\Interfaces\Response;

interface Handler
{
    /**
     * Get the response using the provided request.
     *
     * @param Request $request
     * @return Response
     */
    public function getResponse(Request $request): Response;
}
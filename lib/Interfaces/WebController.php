<?php

namespace PHPNomad\Rest\Interfaces;

interface WebController
{
    /**
     * Modifies the provided response, adding the body.
     *
     * @param Response $response
     * @return Response
     */
    public function response(Response $response): Response;
}

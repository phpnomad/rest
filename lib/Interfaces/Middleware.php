<?php

namespace PHPNomad\Rest\Interfaces;

interface Middleware
{
    /**
     * Process the request.
     *
     * @param Request $request
     * @return void
     */
    public function process(Request $request): void;
}
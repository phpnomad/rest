<?php

namespace PHPNomad\Rest\Interfaces;

interface HasMiddleware
{
    /**
     * @return Middleware[]
     */
    public function getMiddleware(): array;
}
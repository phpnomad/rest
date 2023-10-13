<?php

namespace Phoenix\Rest\Interfaces;

interface HasRestNamespace
{
    /**
     * @return string
     */
    public function getRestNamespace(): string;
}
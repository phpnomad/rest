<?php

namespace PHPNomad\Rest\Interfaces;

interface HasValidations
{
    /**
     * @return array<string, Validation[]> List of validations keyed by the field they validate against.
     */
    public function getValidations(): array;
}
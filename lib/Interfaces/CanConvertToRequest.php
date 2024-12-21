<?php

namespace PHPNomad\Rest\Interfaces;

use PHPNomad\Http\Interfaces\Request;

interface CanConvertToRequest
{
    public function toRequest($input): Request;
}
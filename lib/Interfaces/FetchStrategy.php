<?php

namespace PHPNomad\Rest\Interfaces;


use PHPNomad\Rest\Models\FetchPayload;
use PHPNomad\Http\Interfaces\Response;

interface FetchStrategy{

    /**
     * @param FetchPayload $payload
     * @return Response
     */
    public function fetch(FetchPayload $payload): Response;
}
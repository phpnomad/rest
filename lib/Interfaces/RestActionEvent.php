<?php

namespace PHPNomad\Rest\Interfaces;

use PHPNomad\Auth\Enums\ActionTypes;
use PHPNomad\Events\Interfaces\Event;
use PHPNomad\Http\Interfaces\Request;
use PHPNomad\Http\Interfaces\Response;

interface RestActionEvent extends Event
{
    /**
     * @return Request
     */
    public function getRequest(): Request;

    /**
     * @return Response
     */
    public function getResponse(): Response;

    /**
     * @return ActionTypes::*
     */
    public function getAction(): string;
}
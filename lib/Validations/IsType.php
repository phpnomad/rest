<?php

namespace PHPNomad\Rest\Validations;

use PHPNomad\Rest\Enums\BasicTypes;
use PHPNomad\Rest\Interfaces\Request;
use PHPNomad\Rest\Interfaces\Validation;
use PHPNomad\Rest\Traits\WithProvidedErrorMessage;

class IsType implements Validation
{
    use WithProvidedErrorMessage;
    protected $errorMessage;
    protected string $type;

    /**
     * @param BasicTypes::* $type
     * @param null|callable|string $errorMessage
     */
    public function __construct(string $type, $errorMessage = null)
    {
        $this->type = $type;
        $this->errorMessage = $errorMessage;
    }

    /** @inheritDoc */
    public function isValid(string $key, Request $request): bool
    {
        return gettype($request->getParam($key)) === $this->type;
    }

    protected function getDefaultErrorMessage(string $key, Request $request): string
    {
        $param = $request->getParam($key);

        //TODO: Translate this.
        if(null === $param){
            return "$key must be a string, but no value was given";
        }

        return "$key must be a string, was given " . gettype($param);
    }

    public function getContext(): array
    {
        return [
            'requiredType' => $this->type
        ];
    }

    public function getType(): string
    {
        return 'INVALID_TYPE';
    }
}
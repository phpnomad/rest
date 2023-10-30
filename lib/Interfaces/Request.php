<?php

namespace PHPNomad\Rest\Interfaces;

interface Request
{
    /**
     * Get a specific header value.
     *
     * @param string $name Header name.
     * @return mixed|null Header value or null if the header doesn't exist.
     */
    public function getHeader(string $name);

    /**
     * Set a specific header value.
     *
     * @param string $name Header name.
     * @param mixed $value Header value.
     */
    public function setHeader(string $name, $value): void;

    /**
     * Get all headers.
     *
     * @return array<string, string> An associative array of header names to values.
     */
    public function getHeaders(): array;

    /**
     * Get a specific request parameter.
     *
     * @param string $name Parameter name.
     * @return mixed|null Parameter value or null if the parameter doesn't exist.
     */
    public function getParam(string $name);

    /**
     * Set a specific request parameter.
     *
     * @param string $name Parameter name.
     * @param mixed $value Parameter value.
     */
    public function setParam(string $name, $value): void;

    /**
     * Get all request parameters.
     *
     * @return array<string, mixed> An associative array of parameter names to values.
     */
    public function getParams(): array;

    /**
     * Get the request object.
     *
     * @return object
     */
    public function getRequest(): object;
}
<?php

namespace PHPNomad\Rest\Interfaces;

interface RestStrategy
{
    /**
     * Register a GET route with the router.
     *
     * @param string $endpoint The URL pattern of the route.
     * @param Validation[] $validations
     * @param Handler $handler The callback to invoke when this route is matched.
     * @return void
     */
    public function get(string $endpoint, array $validations, Handler $handler): void;

    /**
     * Register a POST route with the router.
     *
     * @param string $endpoint The URL pattern of the route.
     * @param Validation[] $validations
     * @param Handler $handler The callback to invoke when this route is matched.
     * @return void
     */
    public function post(string $endpoint, array $validations, Handler $handler): void;

    /**
     * Register a PUT route with the router.
     *
     * @param string $endpoint The URL pattern of the route.
     * @param Validation[] $validations
     * @param Handler $handler The callback to invoke when this route is matched.
     * @return void
     */
    public function put(string $endpoint, array $validations, Handler $handler): void;

    /**
     * Register a DELETE route with the router.
     *
     * @param string $endpoint The URL pattern of the route.
     * @param Validation[] $validations
     * @param Handler $handler The callback to invoke when this route is matched.
     * @return void
     */
    public function delete(string $endpoint, array $validations, Handler $handler): void;

    /**
     * Register a PATCH route with the router.
     *
     * @param string $endpoint The URL pattern of the route.
     * @param Validation[] $validations
     * @param Handler $handler The callback to invoke when this route is matched.
     * @return void
     */
    public function patch(string $endpoint, array $validations, Handler $handler): void;

    /**
     * Register an OPTIONS route with the router.
     *
     * @param string $endpoint The URL pattern of the route.
     * @param Validation[] $validations
     * @param Handler $handler The callback to invoke when this route is matched.
     * @return void
     */
    public function options(string $endpoint, array $validations, Handler $handler): void;
}
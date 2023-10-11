<?php

namespace Phoenix\Rest\Interfaces;

interface RestStrategy
{
    /**
     * Register a GET route with the router.
     *
     * @param string $endpoint The URL pattern of the route.
     * @param callable $callback The callback to invoke when this route is matched.
     * @return void
     */
    public function get(string $endpoint, callable $callback): void;

    /**
     * Register a POST route with the router.
     *
     * @param string $endpoint The URL pattern of the route.
     * @param callable $callback The callback to invoke when this route is matched.
     * @return void
     */
    public function post(string $endpoint, callable $callback): void;

    /**
     * Register a PUT route with the router.
     *
     * @param string $endpoint The URL pattern of the route.
     * @param callable $callback The callback to invoke when this route is matched.
     * @return void
     */
    public function put(string $endpoint, callable $callback): void;

    /**
     * Register a DELETE route with the router.
     *
     * @param string $endpoint The URL pattern of the route.
     * @param callable $callback The callback to invoke when this route is matched.
     * @return void
     */
    public function delete(string $endpoint, callable $callback): void;

    /**
     * Register a PATCH route with the router.
     *
     * @param string $endpoint The URL pattern of the route.
     * @param callable $callback The callback to invoke when this route is matched.
     * @return void
     */
    public function patch(string $endpoint, callable $callback): void;

    /**
     * Register an OPTIONS route with the router.
     *
     * @param string $endpoint The URL pattern of the route.
     * @param callable $callback The callback to invoke when this route is matched.
     * @return void
     */
    public function options(string $endpoint, callable $callback): void;
}
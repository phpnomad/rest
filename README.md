# phpnomad/rest

[![Latest Version](https://img.shields.io/packagist/v/phpnomad/rest.svg)](https://packagist.org/packages/phpnomad/rest)
[![Total Downloads](https://img.shields.io/packagist/dt/phpnomad/rest.svg)](https://packagist.org/packages/phpnomad/rest)
[![PHP Version](https://img.shields.io/packagist/php-v/phpnomad/rest.svg)](https://packagist.org/packages/phpnomad/rest)
[![License](https://img.shields.io/packagist/l/phpnomad/rest.svg)](https://packagist.org/packages/phpnomad/rest)

`phpnomad/rest` is an MVC-driven framework for defining REST APIs in a way that stays agnostic to the runtime you plug into. Controllers hold the business logic, `RestStrategy` implementations wire them into a host router (FastRoute, WordPress, or something custom), middleware shapes the request before your logic runs, validations enforce input contracts, and interceptors handle post-response side effects like events and logging. By separating API definition (what an endpoint is, what it requires, what it returns) from integration (how it runs inside a host), you get REST endpoints that move between stacks without rewrites.

The package runs in production behind the REST layer of [Siren](https://sirenaffiliates.com) and several MCP servers and client systems.

## Installation

```bash
composer require phpnomad/rest
```

## Quick Start

A controller is a class that implements `PHPNomad\Rest\Interfaces\Controller`. Three methods describe the endpoint, and the container injects whatever services the constructor declares.

```php
<?php

use PHPNomad\Http\Enums\Method;
use PHPNomad\Http\Interfaces\Request;
use PHPNomad\Http\Interfaces\Response;
use PHPNomad\Rest\Interfaces\Controller;

final class GetWidgetController implements Controller
{
    public function __construct(
        private Response $response,
        private WidgetRepository $widgets
    ) {}

    public function getEndpoint(): string
    {
        return '/widgets/{id}';
    }

    public function getMethod(): string
    {
        return Method::Get;
    }

    public function getResponse(Request $request): Response
    {
        $widget = $this->widgets->find((int) $request->getParam('id'));

        return $this->response
            ->setStatus(200)
            ->setJson($widget);
    }
}
```

That controller is portable. It has no knowledge of how routes are matched or how the HTTP response is serialized, so it runs unchanged whether the host is FastRoute, WordPress, or a custom runtime. To put it behind a real router, register a `RestStrategy` for your environment. For a working FastRoute reference that wires controllers into [nikic/fast-route](https://github.com/nikic/FastRoute), see [phpnomad/fastroute-integration](https://github.com/phpnomad/fastroute-integration).

Controllers can pick up extra capabilities by implementing `HasMiddleware`, `HasValidations`, or `HasInterceptors` alongside `Controller`. Each added interface declares a small amount of additional lifecycle behavior without changing how the endpoint is defined.

## Key Concepts

- `Controller` describes an endpoint's path, method, and response logic.
- `RestStrategy` is the host adapter that registers controllers with your platform's router and drives the request lifecycle.
- Middleware runs before the controller to normalize input, enforce limits, run validations, or short-circuit with a `RestException`.
- `Validation` and `ValidationSet` express declarative input contracts that produce a consistent error payload on failure.
- Interceptors run after the response is built and handle side effects like broadcasting events, writing logs, or reshaping output.

## Documentation

Full documentation, including the request lifecycle, the integration guide, and reference material for every middleware and validation class, lives at [phpnomad.com](https://phpnomad.com).

## License

MIT. See [LICENSE.txt](LICENSE.txt).

<?php
declare(strict_types=1);

namespace Core;
class Router
{
    private array $routes = [];

    public function add(string $method, string $pattern, callable $action): void
    {
        // Convert pattern to regex, e.g. /users/{id} -> #^/users/(\d+)$#
        $regex = preg_replace('#\{(\w+)\}#', '(\d+)', $pattern);
        $regex = "#^" . $regex . "$#";

        $this->routes[] = [
            'method' => $method,
            'pattern' => $pattern,
            'regex' => $regex,
            'action' => $action,
        ];
    }

    public function dispatch(string $method, string $uri): void
    {
        foreach ($this->routes as $route) {
            if ($route['method'] !== $method) {
                continue;
            }

            if (preg_match($route['regex'], $uri, $matches)) {
                array_shift($matches);
                call_user_func($route['action'], (int)$matches[0]);
                return;
            }
        }

        http_response_code(404);
        echo "404 Not Found";
    }
}

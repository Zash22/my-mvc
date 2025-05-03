<?php
declare(strict_types=1);

class Router
{
    private array $routes = [];

    public function add(string $method, string $route, callable $action): void
    {
        $this->routes[] = ['method' => $method, 'route' => $route, 'action' => $action];
    }

    public function dispatch(string $method, string $uri): void
    {
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['route'] === $uri) {
                call_user_func($route['action']);
                return;
            }
        }

        echo "404 Not Found";
    }
}

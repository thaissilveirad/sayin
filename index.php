<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\App");

$route->group(null);

$route->get("/", "Web:home");
$route->get("/sobre", "Web:about");
$route->get("/produtos","Web:products");
$route->get("/menu","Web:menu");
$route->get("/entrar", "Web:login");
$route->get("/cadastro", "Web:register");
$route->get("/inicio", "Web:home");
$route->get("/faq", "Web:faq");
$route->get("/pratos", "Web:dishes");


$route->group("/app");
$route->get("/", "App:home");

$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();
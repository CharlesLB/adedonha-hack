<?php

ob_flush();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$route = new Router(ROOT);

//
// ─── WEB ────────────────────────────────────────────────────────────────────────
//

$route->namespace("Source\Controllers");
$route->group(null);
$route->get("/","CategoryController:home", "category.home");
$route->post("/create-category", "CategoryController:create", "category.create");
$route->post("/delete-category", "CategoryController:delete", "category.delete");

//
// ─── ERROR ──────────────────────────────────────────────────────────────────────
//

$route->group("error");
$route->get("/{errcode}", "Web:error", "web.error");

//
// ─── PROCESS ────────────────────────────────────────────────────────────────────
//

$route->dispatch();

if ($route->error()){
    $route->redirect("/error/{$route->error()}");
}



ob_end_flush();


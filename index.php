<?php

ob_flush();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$route = new Router(ROOT);

$route->namespace("Source\Controllers");

//
// ─── WEB ────────────────────────────────────────────────────────────────────────
//


$route->group(null);
$route->get("/", "Web:home", "web.home");
$route->get("/app/{categories}", "Web:app", "web.app");
$route->post("/show-word", "WordController:show", "word.show");


//
// ─── ADMIN ──────────────────────────────────────────────────────────────────────
//

    
$route->group("/admin");
$route->get("/", "Web:admin", "web.admin");

$route->get("/categoria","Web:category", "web.category");
$route->post("/create-category", "CategoryController:create", "category.create");
$route->post("/delete-category", "CategoryController:delete", "category.delete");

$route->get("/palavra", "Web:word", "web.word");
$route->post("/create-word", "WordController:create", "word.create");
$route->post("/delete-word", "WordController:delete", "word.delete");
$route->post("/show-word", "WordController:show", "word.show");



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


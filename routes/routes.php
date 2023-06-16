<?php
use Steampixel\Route;
/**
 * validate main links
 */
Route::add('/', function () {
    $slug = "Bugiri";
    include 'views/index.php';
});

/**
 * validate main links
 */
Route::add('/([a-z-0-9-]*)', function ($slug) {
    include 'views/index.php';
});


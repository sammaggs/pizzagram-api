<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


$router->group(["prefix" => "options"], function ($router) {
    $router->get("", "Ingredients@index");
    $router->post("", "Ingredients@store");
    $router->get("{ingredient}", "Ingredients@show");
    $router->delete("{ingredient}", "Ingredients@destroy");

});
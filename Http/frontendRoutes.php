<?php

use Illuminate\Routing\Router;

/* @var Router $router */
$router->group(['prefix' => '/formbuilder'], function (Router $router) {
    $router->post('send', ['as' => 'front.formbuilder.formbuilder.send', 'uses' => 'FormController@send']);
    $router->get('captcha', ['as' => 'front.formbuilder.formbuilder.captcha', 'uses' => 'FormController@getCaptcha']);
});

<?php

use Illuminate\Routing\Router;

/* @var Router $router */

$router->group(['prefix' => '/formbuilder'], function (Router $router) {
    $router->get('formbuilder', ['as' => 'admin.formbuilder.formbuilder.index', 'uses' => 'FormbuilderController@index']);
    $router->get('formbuilder/create', ['as' => 'admin.formbuilder.formbuilder.create', 'uses' => 'FormbuilderController@create']);
    $router->post('formbuilder', ['as' => 'admin.formbuilder.formbuilder.store', 'uses' => 'FormbuilderController@store']);
    $router->get('formbuilder/{form}/edit', ['as' => 'admin.formbuilder.formbuilder.edit', 'uses' => 'FormbuilderController@edit']);
    $router->put('formbuilder/{form}/edit', ['as' => 'admin.formbuilder.formbuilder.update', 'uses' => 'FormbuilderController@update']);
    $router->delete('formbuilder/{form}', ['as' => 'admin.formbuilder.formbuilder.destroy', 'uses' => 'FormbuilderController@destroy']);

    $router->get('submission/', ['as' => 'admin.formbuilder.submissions.index', 'uses' => 'SubmissionController@index']);
    $router->get('submission/{form}', ['as' => 'admin.formbuilder.submissions.form', 'uses' => 'SubmissionController@form']);
    $router->delete('submission/{form}', ['as' => 'admin.formbuilder.submissions.destroy', 'uses' => 'SubmissionController@destroy']);
});

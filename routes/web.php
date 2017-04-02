<?php

// Route::get('/tasks', 'TasksController@index');
// Route::get('/', 'TasksController@index');
// Route::get('/tasks/{task}', 'TasksController@show');


Route::get('/', 'PostsController@index');
Route::get('/posts', 'PostsController@index');

// the create must be before {post} since the laravel processing order
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');

Route::post('/posts/{post}/comments', 'CommentsController@store');





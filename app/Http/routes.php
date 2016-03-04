<?php

// Rota para a página inicial do sistema.
Route::get('/', function () {
    return view('welcome');
});

// Rotas para o controller PagesController.
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

// Rotas para o controller ArticlesController.
Route::resource('articles', 'ArticlesController');

// Rotas para o controller de autenticação.
Route::controllers([
    'auth'  => 'Auth\AuthController',
    'password'  => 'Auth\PasswordController'
]);

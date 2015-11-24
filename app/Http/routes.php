<?php

// Rota para a página inicial do sistema.
Route::get('/', function () {
    return view('welcome');
});

// Rotas para o controller PagesController.
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

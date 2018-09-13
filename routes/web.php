<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

* get()
* post()
* delete()
* path()
* put()
* options()
* match()
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/world', function() {
    return 'Hello World';
});

Route::get('blog', function() {
    return 'Nosso novo blog';
});

// atributo name sera apresentado com a variavel $name, passado pela url
// ao adicionar um ponto de interrogacao no atributo, é possível atribuir um valor default para variavel name. no caso 'world'
Route::get('/hello/{name?}', function($name='world') {
    return 'Hello ' . $name;
});
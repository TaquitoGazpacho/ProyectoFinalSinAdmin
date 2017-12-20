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
*/

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/admin/registroEmpresaReparto', 'EmpresaRepartoController@index')->name('registroEmpresa');

//Auth::routes();
Route::get('/login', 'Auth\User\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\User\LoginController@login');
Route::post('/logout', 'Auth\User\LoginController@logout')->name('logout');
Route::post('/password/email', 'Auth\User\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset', 'Auth\User\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/reset', 'Auth\User\ForgotPasswordController@reset');
Route::get('/password/reset/{token}', 'Auth\User\ForgotPasswordController@showResetForm')->name('password.reset');
Route::post('/register', 'Auth\User\RegisterController@register');
Route::get('/register', 'Auth\User\RegisterController@showRegistrationForm')->name('register');
Route::post('/editarUsuario', 'Auth\User\EditUserController@ejecutar')->name('editarUsuario');
Route::post('/editarUsuario/oficina', 'Auth\User\EditUserController@cambiarOficina')->name('editarUsuario.oficina');
Route::get('/perfil', 'HomeController@index')->name('home');



Route::prefix('empresa')->group(function() {
    Route::get('/', 'EmpresaRepartoController@index')->name('empresa.home');
    Route::get('/login','Auth\Empresa\LoginController@showLoginForm')->name('empresa.login');
    Route::post('/login', 'Auth\Empresa\LoginController@login')->name('empresa.login.submit');
});

//Admin Routes

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('admin.logout');
    Route::get('/editarUsuario', 'AdminController@editUser')->name('admin.editUser');
    Route::post('/editarUsuario', 'AdminController@cambiarDatosUser')->name('admin.editarUsuario');

    Route::prefix('editarOficina')->group(function (){

        Route::get('/{id}', 'OficinaController@index')->name('editarOficina');
        Route::post('/actualizar', 'OficinaController@actualizar')->name('editarOficina.actualizarOficina');
        Route::post('/registro', 'OficinaController@store')->name('registrarOficina');
        Route::post('/eliminar', 'OficinaController@dropOficinas')->name('eliminarOficinas');

    });

    Route::prefix('editarEmpresa')->group(function (){

        Route::post('/', 'EmpresaRepartoController@index')->name('editarEmpresa');
        Route::post('/registrar', 'EmpresaRepartoController@store')->name('registrarEmpresaReparto');
        Route::post('/actualizar', 'EmpresaRepartoController@actualizar')->name('editarEmpresa.actualizarEmpresaReparto');
        Route::get('/mostrarDatos', 'AdminController@mostrarDatosEmpresa')->name('mostrarDatos');

    });

    Route::prefix('taquilla')->group(function (){

        Route::get('/listar/{id}', 'OficinaController@showTaquillas')->name('listarTaquillas');
        Route::get('/listar/{id}/editarEstado', 'TaquillasController@editar')->name('editarEstado');
        Route::post('/añadir', 'TaquillasController@añadirTaquillas')->name('crearTaquillas');

    });

    //Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    //Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    //Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    //Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
});

Route::get('/verifyemail/{token}', 'Auth\User\RegisterController@verify');

Route::post('/changeSuscription', 'SuscripcionController@cambiarSuscripcion')->name('cambiarSuscripcion');
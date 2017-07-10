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


/*
기본 베이직
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('mail', function(){
    $article = 'HIHIHIHIHIHIHHI';
    return Mail::send(
        'emails.articles.created',compact('article'),function ($message) use ($article){
            $message->to('kwonmory@gmail.com');
            $message->subject('HIHIHIHIHIHIHIHIH22');
    }
    );
});

Route::get('/home', function (){
    return view('layouts.app');
});


Route::get('/intro', 'HomeController@index');

/*
 * 사용자 가입
 */
Route::get('auth/register',[
    'as' => 'users.create',
    'uses' => 'UsersController@create'
]);

Route::post('auth/register',[
    'as' => 'users.store',
    'uses' => 'UsersController@store'
]);

Route::get('auth/confirm/{code}',[
    'as' => 'users.confirm',
    'uses' => 'UsersController@confirm'
]);

/*
 * 사용자 인증
 */

Route::get('auth/login',[
    'as' => 'sessions.create',
    'uses' => 'SessionsController@create'
]);

Route::post('auth/logout',[
    'as' => 'sessions.store',
    'uses' => 'SessionsController@store'
]);

Route::get('auth/logout',[
    'as' => 'sessions.destroy',
    'uses' => 'SessionController@destroy'
]);

/*
 * 비밀번호 초기화
 */

Route::get('auth/remind',[
    'as' => 'reset.create',
    'uses' => 'PasswordsController@getReset',
]);

Route::post('auth/reset',[
    'as' => 'reset.store',
    'uses' => 'PasswordsController@postRest',
]);





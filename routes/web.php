<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\CurrencyController;

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
		return view( 'posts', ['posts' => Post::all()
	]);
});

Route::get('posts/{post}', function ( $id ) {
		return view('post', [
			'post' => Post::findOrFail($id)
		]);

	}
);

Route::get('/test', function () {
		return view( 'test', ['decode_response' => CurrencyController::milos()
	]);
});

Route::get('client/{id}', function ( $id ) {
		return view('client', [
			'client' => CurrencyController::valet_get_single_client($id)
		]);

	}
);
//Route::get('/test', 'App\Http\Controllers\CurrencyController@milos');
//Route::get('test', 'CurrencyController@milos');
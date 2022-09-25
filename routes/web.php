<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('listings', [
        'heading' => "New listings",
        'listings' => Listing::all()
    ]);
});
Route::get('/hello', function () {
    return response("Hi Algo!", 200)->header('4', "3");
});
Route::get('/posts/{id}', function ($id) {
    return response("Post " . $id);
})->where('id', '[0-9]+');

Route::get('/search', function (Request $request) {
    dd($request);
    return ('Name: ' . $request->name);
});

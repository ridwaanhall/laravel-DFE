<?php

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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing 1',
                'description' => 'This is the first listing.'
            ],
            [
                'id' => 2,
                'title' => 'Listing 2',
                'description' => 'This is the second listing.'
            ]
        ]
    ]);
});

Route::get('/hello', function () {
    return 'Hello World!';
});

Route::get('/posts/{id}', function ($id) {
    ddd($id);
    return response('Post ID: ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
    return $request->name . ' ' . $request->city;
});
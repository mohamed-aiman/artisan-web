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

Route::get('pics/{filename}', function ($filename, Illuminate\Http\Request $request)
{
	$path = $path = storage_path() . '/app/images/';

	$path = ($size = $request->query->get('size')) ? $path . $size . '/' . $filename :  $path . $filename;

    if(!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');

<?php

use App\Http\Controllers\BazmaController;
use App\Http\Controllers\cobaController;
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
    return view('welcome');
});

Route::get('exam', function () {
    return "Example route";
});

Route::get('coba', function() {
    return view("coba", ['nama' => 'arif']);
});

Route::get("/example/{exampleid}", function($exampleid) {
    return "example number : $exampleid";
});
Route::get("/posts/{postid}/comments/{commentsid}", function($postid,$commentsid){
    return "ini post ke : $postid dan comments ke : $commentsid";
    //localhost:8000/posts/10/comments/10
});

//opsional (boleh kosong)
Route::get("post/{postid", function($postid = null) {
    return "post opsional : $postid";
});

Route::get("/coba/example", [cobaController::class,"example"]);


Route::get("/coba/requst", [cobaController::class, "requst"]);






// Route::get("/response/index", [BazmaController::class, 'responseFunction']);
Route::get("/response/index", [App\Http\Controllers\BazmaController::class, 'responseFunction']);

Route::get("/response/header", [App\Http\Controllers\BazmaController::class, 'responseHeader']);

Route::get("/enkripsi/code", [App\Http\Controllers\BazmaController::class, ' encryptionData']);

Route::get("/redirect/to", [App\Http\Controllers\BazmaController::class, 'redirectTo']);
Route::get("/redirect/from", [App\Http\Controllers\BazmaController::class, 'redirectFrom']);

Route::get("/redirect/to/nemed", [App\Http\Controllers\BazmaController::class, 'redirectToNamedRoute'])->name("redirect.to");
Route::get("/redirect/from/named", [App\Http\Controllers\BazmaController::class, 'redirectFromNamedRoute']);

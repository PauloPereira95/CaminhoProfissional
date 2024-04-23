<?php

use Statamic\Facades\Taxonomy;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Get All Tags

Route::statamic('{slug}/search', 'search');
Route::get('/tags' , function (){
    $taxonomy = Taxonomy::find('tags')->terms()->get();
    return response()->json($taxonomy);
});

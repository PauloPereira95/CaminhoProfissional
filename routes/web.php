<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
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
Route::statamic('cliente/perfil', 'profile/show');
Route::statamic('{slug}/cliente/perfil', 'profile/show');
Route::get('/', [SiteController::class , 'index'])->name('site.index');
Route::post('/logout' , [SiteController::class , 'logout'])->name('site.logout');
Route::put('/cliente/update' , [UserController::class , 'update']);
Route::get('/tags', function () {
    $taxonomy = Taxonomy::find('tags')->terms()->get();
    return response()->json($taxonomy);
});


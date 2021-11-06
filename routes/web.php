<?php
use App\Http\Controllers\course;
use App\Http\Controllers\TopicController;
use App\Models\Topic;
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
    return view('home');
});

Route::get('/hi', [course::class,'showhi']);
// Route::get('/dashboard', view('dashboard.home'));
Route::get('/ndt', [TopicController::class,'index']);
Route::get('/ndtcourses/{topic}', [TopicController::class,'courses'])->name('ndtcourses');
Route::get('/ndtcourse/{course}', [TopicController::class,'course'])->name('ndtcourse');
// Route::get('/ndt', [::class,'index']);


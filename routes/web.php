<?php
use App\Http\Controllers\course;
use App\Http\Controllers\Mailcontroller;
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
Route::get('/CC', [TopicController::class,'index2']);
Route::get('/back', function(){
    return (redirect()->back());
});
Route::get('/ndtcourses/{topic}', [TopicController::class,'courses'])->name('ndtcourses');
Route::get('/CCcourses/{topic}', [TopicController::class,'courses'])->name('CCcourses');
Route::get('/ndtcourse/{course}', [TopicController::class,'course'])->name('ndtcourse');
Route::get('/CCcourse/{course}', [TopicController::class,'course'])->name('ndtcourse');
// Route::get('/ndt', [::class,'index']);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard',  [TopicController::class,'indexdash'])->middleware(['auth'])->name('dashboard');
Route::get('/delete/{course}',  [TopicController::class,'delete'])->middleware(['auth'])->name('delete');
Route::post('/submit',  [TopicController::class,'add'])->middleware(['auth']);
Route::post('/send',  [MailController::class,'send']);
Route::post('CCcourse/send',  [MailController::class,'send']);
Route::get('addpage', function(){
   return( view('dashadd'));
})->middleware(['auth'])->name('addpage');

require __DIR__.'/auth.php';

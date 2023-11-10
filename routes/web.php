<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', [AuthController::class, 'index']);

Route::post('loginSubmit', [AuthController::class, 'validateCredentials'])->name('login.submit');

Route::group(['middleware' => ['LoginCheck']], function () {

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::post('/feedback/store', [DashboardController::class, 'StoreFeedBack'])->name('feedback.store');
Route::get('/feedback/index', [DashboardController::class, 'IndexFeedBack'])->name('feedback.index');

Route::post('/vote/store', [DashboardController::class, 'StoreVote'])->name('vote.store');
Route::post('/comment/store', [DashboardController::class, 'StoreComment'])->name('comment.store');
Route::get('/comment/index', [DashboardController::class, 'IndexComment'])->name('comment.index');
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');





// Route::get('/', function () {
  
//     return view('welcome');
// });

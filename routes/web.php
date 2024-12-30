<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Post;
use App\User;

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
    return view('welcome')->name('home');
});

Route::get('/dashboard', [PostController::class, 'getDashboard'])->name('dashboard')->middleware('auth');

Route::get('/account', [UserController::class, 'getAccount'])->name('account');

Route::post('/updateaccount',[UserController::class],'postSaveAccount')->name('account.save');

Route::get('/userimage/{filename}',[UserController::class],'getUserImage')->name('account.image');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/signup', [UserController::class, 'postSignUp'])->name('signup');

Route::post('/signin', [UserController::class, 'postSignIn'])->name('signin');

Route::post('/createpost', [PostController::class,'postCreatePost'])->name('createpost')->middleware('auth');

Route::get('/deletepost/{post_id}', [PostController::class, 'getDeletePost'])->name('deletepost')->middleware('auth');

Route::post('/edit',[PostController::class],'postEditPost')->name('edit');

Route::post('/like',[PostController::class],'postLikePost')->name('like');






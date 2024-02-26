<?php
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return 'hello world';
// });

// Route::get('/world', function () {
//     return 'World';
// });

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '2241720198' . '<br>' . 'Rofiq';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama Saya ' .$name;});

    Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
    return 'Poske-'.$postId." Komentar ke-: ".$commentId; });

    Route::get('/articles/{id}', function
    ($postId) {
        return 'id-'.$postId; });

        Route::get('/user/{name?}', function
        ($name=null) {
            return 'Nama saya'.$name; });

            Route::get('/hello', [WelcomeController::class,'hello']);

            Route::get('/', [PageController::class,'index']);

            Route::get('/about', [PageController::class,'about']);

            Route::get('/articles/{id}', [PageController::class,'articles']);

            Route::resource('photos', PhotoController::class);

            Route::resource('photos', PhotoController::class)->only([
                'index', 'show'
            ]);

            Route::resource('photos', PhotoController::class)->except([
                'create', 'store', 'update', 'destroy' ]);

                Route::get('/greeting', [WelcomeController::class,
                'greeting']);


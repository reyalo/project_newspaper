<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostcController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FrontendController;

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


// Route::get('/', function () {
//     return view('posts/index');
// });

//CHEck

Route::resource('posts', PostcController::class);
Route::post('comments', [CommentController::class, 'store'])->name('comments.store');


//end


Route::get('/', [FrontendController::class,'index'])->name('home');
Route::get('/post/view/{id}', [FrontendController::class,'post_view'])->name('postView');
Route::get('/category/view/{id}', [FrontendController::class, 'category_view'])->name('categoryView');






//!    ADMIN_PANEL

Route::middleware(['auth', 'verified','admin'])->group(function () {
    Route::get('/admin', function () {
        return view('backend.home.index');
    })->name('dashboard');

    Route::get('/category/manage', [CategoryController::class,'index'])->name('manageCategory');
    Route::get('/category/add', [CategoryController::class,'create'])->name('addCategory');
    Route::post('/category/store', [CategoryController::class,'store'])->name('storeCategory');
    Route::get('/category/active/{id}', [CategoryController::class,'active'])->name('activeCategory');
    Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->name('editCategory');
    Route::post('/category/update', [CategoryController::class,'update'])->name('updateCategory');
    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('deleteCategory');


Route::get('/post/manage', [PostController::class, 'index'])->name('managePost');
Route::get('/post/add', [PostController::class, 'create'])->name('addPost');
Route::post('/post/store', [PostController::class, 'store'])->name('storePost');
Route::get('/post/active/{id}', [PostController::class, 'active'])->name('activePost');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('editPost');
Route::post('/post/update', [PostController::class, 'update'])->name('updatePost');
Route::get('/post/delete/{id}', [PostController::class, 'destroy'])->name('deletePost');
});

require __DIR__.'/auth.php';

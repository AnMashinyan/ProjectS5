<?php


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





use App\Http\Controllers\PagesController;



Route::get('/', 'App\Http\Controllers\PagesController@indexPage')->name('indexPage');
Route::get('/admin', 'App\Http\Controllers\PagesController@admin')->name('admin');
Route::get('/about', 'App\Http\Controllers\PagesController@about')->name('about');
Route::get('/signs', 'App\Http\Controllers\PagesController@signs')->name('signs');
Route::get('/whatIsDementia', 'App\Http\Controllers\PagesController@whatIsDementia')->name('whatIsDementia');
Route::get('/types', 'App\Http\Controllers\PagesController@types')->name('types');


Route::get('/caregiverIndex', 'App\Http\Controllers\CaregiverController@caregiverIndex')->name('caregiverIndex');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin.index');
    Route::get('decisions', [\App\Http\Controllers\Admin\AddDecisionsController::class, 'index'])->name('admin.decisions');
    Route::post('decisions/insert', [\App\Http\Controllers\Admin\AddDecisionsController::class, 'insert'])->name('decisions.insert');
    Route::get('decisions/delete/{id}', [\App\Http\Controllers\Admin\AddDecisionsController::Class, "delete"]);
    Route::get('confirm/{user}', [\App\Http\Controllers\Admin\MainController::class, 'confirm']);
    Route::get('/search', [\App\Http\Controllers\Admin\AddDecisionsController::class, 'search'])->name('admin.search');
    Route::get('decisions/pdfexport/{id}', [\App\Http\Controllers\Admin\AddDecisionsController::class, 'pdfexport']);
});
Route::get('decisions/pdfexport/{id}', [\App\Http\Controllers\Admin\AddDecisionsController::class, 'pdfexport']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('register', [\App\Http\Controllers\UserController::class, 'create'])->name('register.create');
    Route::post('store', [\App\Http\Controllers\UserController::class, 'store'])->name('register.store');
    Route::get('create', [\App\Http\Controllers\UserController::class, 'loginForm'])->name('login.create');
    Route::post('login', [\App\Http\Controllers\UserController::class, 'login'])->name('login');
    Route::post('login2', [\App\Http\Controllers\UserController::class, 'login2'])->name('login2');

});

Route::get('logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout')->middleware('auth');


Route::resource('imgs', '\App\Http\Controllers\CaregiverPage\ImageController');
Route::get('img', [App\Http\Controllers\ImageController::class, 'index'])->name('img.single');


Route::resource('posts', '\App\Http\Controllers\CaregiverPage\PostController');
Route::get('article/{slug}', [App\Http\Controllers\PostControler::class, 'show'])->name('post.single');
Route::get('/home', [App\Http\Controllers\PostControler::class, 'index'])->name('home');

Route::resource('tags', '\App\Http\Controllers\CaregiverPage\TagController');
Route::get('tag/{slug}', [App\Http\Controllers\TagControler::class, 'show'])->name('tags.single');


Route::get('category', [App\Http\Controllers\CategoryControler::class, 'show'])->name('categories.single');
Route::resource('categories', '\App\Http\Controllers\CaregiverPage\CategoryController');


Route::get('task', [App\Http\Controllers\TaskController::class, 'index'])->name('task.single');
Route::resource('tasks', '\App\Http\Controllers\CaregiverPage\TaskController');

Route::get('search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');


Route::get('decision1', [\App\Http\Controllers\AddDecisionsController::class, 'index'])->name('decisions1');
Route::post('decisions1/insert', [\App\Http\Controllers\AddDecisionsController::class, 'insert'])->name('decisions1.insert');
Route::get('decisions1/delete/{id}', [\App\Http\Controllers\AddDecisionsController::Class, "delete1"]);
Route::get('/search1', [\App\Http\Controllers\AddDecisionsController::class, 'search'])->name('search1');
Route::get('decisions1/pdfexport/{id}', [\App\Http\Controllers\AddDecisionsController::class, 'pdfexport1']);



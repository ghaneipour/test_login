<?php
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\UserControllers;
//use App\Http\Controllers\PostControllers;
use App\Http\Controllers\PedramController;
 
Route::get('/contactus', [PedramController::class, 'contactus']);//->name( 'contactus' );
 

Route::get('/', function () {
    return view('welcome');
});
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
Route::get('regped',function(){
    return view("registerPedram");
});

Route::any('user', function () {
    return view('user');
});
Route::any('gps', function () {
    return view('gps');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('welcome');
});
 
Route::any('/greeting', function () {
    return view('greeting');
});


// Route::post('/greeting1', function () {
//     // Validate the request...

//     return back()->withInput();
// });

Route::any('/MyUser',[\App\Http\Controllers\PedramController::class,'MyUserVoid']);

Route::any('/logi',[PedramController::class,'loginFormChecker']);
Route::get('/aboutus',  [PedramController::class, 'aboutus']);



 // localhost:8000/post1
//Route::any('post1',[PostControllers::class, 'MyPostVoid']);

//Auth::routes();


Route::any('registery',function(){return view('auth\registery');})->name( 'registery' );
Route::any('login',function(){return view('auth\login');})->name('login');
Route::any('logout',function(){return view('auth\registery');});

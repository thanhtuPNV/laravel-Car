<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use Illuminate\Http\Request;
use App\Http\Controllers\GiaiController;


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

Route::get('/', function() {
    return view('welcome');
});

Route::resource('cars', CarController::class);

// Route::get('cars',[CarController::class, 'index'])->name('cars, index');
// Route::get('cars/create',[CarController::class, 'create']);
// Route::post('cars',[CarController::class, 'store']);
// Route::get('cars/{car}',[CarController::class, 'show']);
// Route::get('cars/{car}/edit',[CarController::class, 'edit']);
// Route::put('cars/{car}',[CarController::class, 'update']);
// Route::delete('cars/{car}',[CarController::class, 'destroy']);
// Route::get('/', [CarController::class, "index"]);
// Route::get('Detail/{id}', [CarController::class, "detail"]);
Route::get('{id}/Edit', [CarController::class, "edit"]);
Route::post('/Update/{id}', [CarController::class, "update"]);
Route::get('/Delete/{id}', [CarController::class, "delete"]);
Route::get("/Create", [CarController::class, "create"]);
Route::post("/Store", [CarController::class, "store"]);

Route::get('ptb11', function(){
    return view('ptb11');
});

Route::get('caculator', function(){
    return view('caculator');
});
// Route::post('ptb1', function(Request $request){
//     $a = $request->input('a');
//     $b = $request->input('b');
//     if ($a == 0 ){
//         if ($b == 0){
//             $result = 'Phương trình vô số nghiệm!';
//         }
//         else{
//             $result = 'Phương trình vô nghiệm!';
//         }
//     }
//     else{
//         $nghiem = round(-$b/$a,2);
//         $result = 'Phương trình có nghiệm x là: ' .$nghiem;
//     }
//     return view('ptb1', compact('a','b','result'));
// })->name('ptb1.post');
// Route::post('ptb1', [GiaiController::class,'giaiptb1'])->name('ptb1.post');
// Route::get('ptb11', [GiaiController::class,'giaiptb1'])->name('ptb11.get');
// Route::get('caculator', [GiaiController::class,'caculator'])->name('caculator.get');

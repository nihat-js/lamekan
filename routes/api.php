<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use \App\Models\User as User;

Route::post('/login',function(Request $request){

})->name("api.login");

Route::post("/register",function (Request $request) {
    $validatedData=$request->validate([
        "username" => "required|unique:users|max:255",
        "email" => "required",
        "password" => "required|min:6",
    ]);
    User::register($validatedData);
    redirect("/",)->with("Successfully created");
})->name("api.register");


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

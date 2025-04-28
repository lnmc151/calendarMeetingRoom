<?php

use App\Http\Controllers\login\loginController;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeetingRoomController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('conn', function () {
    try {
        if (DB::connection('mysql')->table('meetingroom')) {
            return response()->json(['message' => 'Connect Successfully']);
        }
    } catch (\Exception $e) {
        return response()->json(['message' => 'Connect Unsuccessfully', 'error' => $e->getMessage()]);
    }
    return response()->json(['message' => 'Connect Unsuccessfully']);
});


// Route::get('meetings', [MeetingRoomController::class, 'getMeetingList']);
Route::get('/', [MeetingRoomController::class, 'index']);

// Route::match(['get', 'post'], [LoginController::class])->name('login');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');
Route::get('home', [LoginController::class, 'login'])->name('home');


Route::get('room',[MeetingRoomController::class,'bookroom'])->name('room');



Route::get('/logout', function () {
    session()->flush();
    return redirect('/');
})->name('logout');

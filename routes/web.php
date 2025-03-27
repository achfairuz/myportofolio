<?php

use App\Http\Controllers\linkController;
use App\Http\Controllers\ProfileController;
use App\Models\link;
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

Route::get('/', function () {
    return view('welcome', ['data' => link::all()]);
});





Route::get('/dashboard', function () {
    return view('dashboard', ['data' => link::all()]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::get('/insertporto', function () {
        return view('form.portofolio');
    })->name('forminsert');

    Route::get('/updateporto/{id}', function ($id) {
        $data = link::findOrFail($id);
        return view('form.updateporto', ['data' => $data]);
    })->name('formedit');

    Route::post('/project', [linkController::class, 'store'])->name('project.add');
    Route::put('/project/{id}', [linkController::class, 'update'])->name('project.update');
    Route::delete('/project/{id}', [linkController::class, 'destroy'])->name('project.destroy');
});


require __DIR__ . '/auth.php';

<?php
use App\Http\Middleware\AdminMiddleware; //Importante
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login',function(){
    return view('login');
})->middleware(['auth','user'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


//Para que solo pueda registrarse si es usuario es admin
// 1. Ruta para mostrar el formulario de registro de clientes (GET)
//  Route::get('/registroCliente', [ClienteController::class, 'create'])->name('clientes.create');
 Route::middleware([AdminMiddleware::class])->group(function(){
 Route::get('/registroCliente', [ClienteController::class, 'create'])->name('clientes.create');


});
Route::middleware([AdminMiddleware::class])->group(function(){
Route::get('/login',[ClienteController::class, 'login'])->name('login');
});


Route::post('/registroCliente', [ClienteController::class, 'store'])->name('clientes.store');
//ruta para ver los clientes sin estar logeado
Route::get('/mostrarClientes', [ClienteController::class, 'index'])->name('clientes.crud');
//ruta para ver si servicios de por cliente
Route::get('/mostrarServicios', [ServicioController::class, 'showServicios'])->name('clientes.servicio');


//ruta para conectar el la funcion con el link de la routa de blade
Route::delete('/clientes/{id}', [ClienteController::class, 'borrar'])->name('clientes.destroy');

//Ruta para ver mostrar los clientes de ese servicio
Route::get('/mostrarClientes/{id}', [ServicioController::class, 'mostrarClientes'])->name('mostrarClientes');



require __DIR__.'/auth.php';

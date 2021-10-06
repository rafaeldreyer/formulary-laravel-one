<?php



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

use Illuminate\Http\Request;
use App\Models\Formulario;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/customers', function (Request $request) {
    Formulario::create([
        'nome' => $request->nome,
        'telefone' => $request->telefone,
        'email' => $request->email,
        'genero' => $request->genero,
        'data_nascimento' => $request->data_nascimento,
        'cidade' => $request->cidade,
        'estado' => $request->estado,
        'endereco' => $request->endereco
    ]);

    echo "Dados enviados!";
});

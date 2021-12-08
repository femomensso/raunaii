<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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
//fazer api cep 

Route::get('/frete/{cep?}', function() {
    
    ddd($_GET);

    $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=08082650&sDsSenha=564321&sCepOrigem=70002900&sCepDestino=04547000&nVlPeso=1&nCdFormato=1&nVlComprimento=20&nVlAltura=20&nVlLargura=20&sCdMaoPropria=n&nVlValorDeclarado=0&sCdAvisoRecebimento=n&nCdServico=04510&nVlDiametro=0&StrRetorno=xml&nIndicaCalculo=3";

    function curl_get_file_contents($url) {
        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, $url);
        $contents = curl_exec($c);
        curl_close($c);
    
        if ($contents) return $contents;
        else return FALSE;    
    }
    
    $xmlString = curl_get_file_contents($url);
    $xml = simplexml_load_string($xmlString);
    $frete = (array)$xml->cServico->Valor;
    return back()->with('frete', $frete[0]);
});

Route::post('/newsletter', 'NewsletterController');

Route::get('/registrar', 'RegisterController@create');
Route::post('/registrar', 'RegisterController@store');

Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store');
Route::post('/logout', 'SessionController@delete')->middleware('auth');

Route::get('/', 'ProductController@index');
Route::get('/produtos/{product:slug}', 'ProductController@show');



Route::prefix('/admin')->middleware('admin')->group(function(){

    Route::get('/usuarios', 'AdminController@users');
    Route::get('/usuarios/apagar/{user}', 'RegisterController@destroy');
    
    Route::get('/categorias', 'AdminController@categories');
    Route::get('/categorias/cadastrar', 'CategoryController@create');
    Route::post('/categorias/cadastrar', 'CategoryController@store');
    Route::get('/categorias/editar/{category}', 'CategoryController@edit');
    Route::post('/categorias/editar/{category}', 'CategoryController@update');
    Route::get('/categorias/apagar/{category}', 'CategoryController@destroy');
    
    Route::get('/produtos', 'AdminController@products');
    Route::get('/produtos/cadastrar', 'ProductController@create');
    Route::post('/produtos/cadastrar', 'ProductController@store');
    Route::get('/produtos/editar/{product}', 'ProductController@edit');
    Route::post('/produtos/editar/{product}', 'ProductController@update');
    Route::get('/produtos/apagar/{product}', 'ProductController@destroy');
});
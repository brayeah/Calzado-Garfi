<?php



Route::get('/', function () {
    return view('inicial');
});



Auth::routes();

Route::group(['middleware'=>'auth'],function(){
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inicial');
Route::resource('pedidos','PedidosController');
Route::resource('galeria','GaleriaController');
Route::resource('galeria2','Galeria2Controller');
Route::get('/add-to-cart/{id}', [
	'uses' => 'ProductosController@getAddToCart',
	'as' =>'productos.addToCart'

]);
Route::get('/quitardocena/{id}', [
	'uses' => 'ProductosController@getQuitarDocena',
	'as' =>'productos.quitardocena'

]);
Route::get('/shopping-cart', [
	'uses' => 'ProductosController@getCart',
	'as' =>'productos.shoppingCart'

]);
Route::get('/agregardocena/{id}', [
	'uses' => 'ProductosController@getAgregarDocena',
	'as' =>'productos.agregardocena'

]);
Route::get('/quitartodo/{id}', [
	'uses' => 'ProductosController@getQuitarTodo',
	'as' =>'productos.quitartodo'

]);

Route::get('/mandar', [
	'uses'=>'ProductosController@getMandar',
	'as'=>'mandar'
]);

Route::post('/mandar', [
	'uses'=>'ProductosController@postMandar',
	'as'=>'mandar'
]);

});

Route::group(['middleware' => 'admin'], function () {
Route::resource('productos','ProductosController');
Route::resource('usuarios','UsuariosController');

});
 /*
$producto -> nombre = $request -> nombre;
 $producto -> estilo = $request -> estilo;
  $producto -> numeracion = $request -> numeracion; 
  $producto -> precio = $request -> precio;
   $producto -> genero = $request -> genero;
*/
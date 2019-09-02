<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Producto;
use App\Pedido;
use App\Cart;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use Session;

class ProductosController extends Controller {
   /**
    * Display a listing of the resource.
    *f
    * @return Response
    */


   public function index(Request $request)
   {
    $productos = Producto::all();

          $productos=Producto::Search($request->estilo) ->orderBy('id', 'DESC')->paginate(5);
        
        return view('productos.index',compact('productos'));

   }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {


        return view('productos.create');

   
   }
  




   public function store(Request $request)
   {

   $productos=$request->all(); // important!!

   $request->validate([
      'color'=>'required|string|max:255',
         'estilo'=>'required|numeric',
         'precio'=>'required|numeric',
         'foto'=>'required|image',
         'genero'=>'required',
  
        ]);
     $file = Input::file('foto');

$file_route= $file->getClientOriginalName();
Storage::disk('fotos')->put($file_route, file_get_contents($file->getRealPath()));

 $productos = new Producto();
   $productos->color = Input::get('color');
    $productos->estilo = Input::get('estilo');
     $productos->precio = Input::get('precio');
     $productos->genero = Input::get('genero');
      $productos->foto = $file->getClientOriginalName();
   $productos->save();

return redirect('productos');

   }
   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
      
   $productos=Producto::find($id);
   return view('productos.show',compact('productos'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id)
   {
      $productos=Producto::find($id);
   return view('productos.edit',compact('productos'));
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id, Request $request)
   {
    $productosUpdate=$request->all();
   $productos=Producto::find($id);
   $productos->update($productosUpdate);
   return redirect('productos');
   }
   
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
        Producto::find($id)->delete();
   return redirect('productos');
   }


public function getAddToCart(Request $request, $id){
  $productos=Producto::find($id);
  $oldcart = Session::has('cart') ? Session::get('cart') : null;
  $cart = new Cart($oldcart);
  $cart->add($productos, $productos->id);

  $request->session()->put('cart', $cart);
  return redirect()->route('galeria.index');
}

public function getQuitarDocena($id){
   $oldcart = Session::has('cart') ? Session::get('cart') : null;
  $cart = new Cart($oldcart);
 $cart->quitardocena($id);
  if (count($cart->items)>0){
  Session::put('cart', $cart);
} else{
  Session::forget('cart');
}
 return redirect()->route('productos.shoppingCart');

}

public function getAgregarDocena(Request $request, $id){
  $productos=Producto::find($id);
  $oldcart = Session::has('cart') ? Session::get('cart') : null;
  $cart = new Cart($oldcart);
  $cart->add($productos, $productos->id);

  $request->session()->put('cart', $cart);
  return redirect()->route('productos.shoppingCart');
}

public function getQuitarTodo($id){
   $oldcart = Session::has('cart') ? Session::get('cart') : null;
  $cart = new Cart($oldcart);
  $cart->quitartodo($id);
  if (count($cart->items)>0){
  Session::put('cart', $cart);
} else{
  Session::forget('cart');
}
  return redirect()->route('productos.shoppingCart');
}





public function getCart(){
  if (!Session::has('cart')){
    return view('shop.shopping-cart', ['productos'=>null]);
  }
  $oldcart= Session::get('cart');
  $cart=new Cart($oldcart);
  return view('shop.shopping-cart', ['productos' => $cart->items, 'totalprecio'=> $cart->totalprecio]);
}

public function getMandar(){
 if (!Session::has('cart')){
    return view('shop.shopping-cart');
}
$oldcart= Session::get('cart');
 $cart=new Cart($oldcart);
 $total=$cart->totalprecio;
 return view('shop.mandar',['total'=> $total]);
}



public function postMandar(Request $request){
if (!Session::has('cart')){
    return view('shop.shopping-cart');
}
$oldcart= Session::get('cart');
$cart=new Cart($oldcart);
$pedido = new Pedido();
$pedido->cart = serialize($cart);
$pedido->direccion = $request->input('direccion');
$pedido->name = $request->input('name');
Auth::user()->pedidos()->save($pedido);
Session::forget('cart');
return redirect()->route('galeria.index')->with('success','Fue Mandado su Pedido Con Éxito!');
}

 
}
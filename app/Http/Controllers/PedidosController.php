<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Pedido;
use App\Producto;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use DB;

class PedidosController extends Controller {
   /**
    * Display a listing of the resource.
    *f
    * @return Response
    */


   public function index(Request $request)
   {
    
 $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));

   }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {

    $productos = Producto::select('id', DB::raw('CONCAT(estilo," ",color) as prod'))
        
        ->pluck('prod','id')->prepend('Selecciona');
        
        return view('pedidos.create',['productos'=>$productos]);

   
   }
  




   public function store(Request $request)
   {

   $pedidos=$request->all(); // important!!

   $request->validate([
      'estilo'=>'required|string|max:255',
         'numeracion'=>'required|numeric',
         'cantidad'=>'required|numeric',
         'total_pedido'=>'required|',
         'estado_pedido'=>'required',
  
        ]);
 

$file_route= $file->getClientOriginalName();
Storage::disk('fotos')->put($file_route, file_get_contents($file->getRealPath()));

 $pedidos = new Pedido();
   $pedidos->estilo= Input::get('estilo');
    $pedidos->numeracion = Input::get('numeracion');
     $pedidos->cantidad = Input::get('cantidad');
     $pedidos->total_pedido = Input::get('total_pedido');
      $pedidos->estado_pedido = Input::get('estado_pedido');
   $pedidos->save();

return redirect('pedidos');

   }
   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
      
   $pedidos=Pedido::find($id);
   return view('pedidos.show',compact('pedidos'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id)
   {
      $pedidos=Pedido::find($id);
   return view('pedidos.edit',compact('pedidos'));
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id, Request $request)
   {
    $pedidosUpdate=$request->all();
   $pedidos=Pedido::find($id);
   $pedidos->update($pedidosUpdate);
   return redirect('pedidos');
   }
   
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
        Pedido::find($id)->delete();
   return redirect('pedidos');
   }

 
}
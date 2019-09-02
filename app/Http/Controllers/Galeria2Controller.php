<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Producto;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;

class Galeria2Controller extends Controller {
   /**
    * Display a listing of the resource.
    *f
    * @return Response
    */


   public function index(Request $request)
   {
    $productos = Producto::all();
          $productos=Producto::Search($request->estilo) ->orderBy('id', 'DESC')->paginate(20);
        

        return view('galeria2.index',compact('productos'));

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
         'foto'=>'required',
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
   return view('galeria2.show',compact('productos'));
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

 
}
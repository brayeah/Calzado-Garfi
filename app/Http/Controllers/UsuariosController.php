<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Storage;
use App\User;
use App\Http\Requests;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    //
 public function index(Request $request)
   {
          $usuarios=User::Search($request->name) ->orderBy('id', 'DESC')->paginate(5);
        

      
        return view('usuarios.index',compact('usuarios'));

   }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {


        return view('usuarios.create');

   
   }
  




   public function store(Request $request)
   {

   $usuarios=$request->all(); // important!!

   $request->validate([
      'name'=>'required',
         'apellido'=>'required',
         'direccion'=>'required',
         'telefono'=>'required',
         'rol'=>'required',
         'email'=>'required',
         'password'=>'required',
          'foto2'=>'required',
         
   ]);
      $file = Input::file('foto2');

$file_route= $file->getClientOriginalName();
Storage::disk('fotos')->put($file_route, file_get_contents($file->getRealPath()));
   

  
   
   $usuarios = new User();
   $usuarios->name = Input::get('name');
    $usuarios->apellido = Input::get('apellido');
     $usuarios->direccion = Input::get('direccion');
     $usuarios->telefono = Input::get('telefono');
      $usuarios->email = Input::get('email');
       $usuarios->password = Input::get('password');
     $usuarios->rol = Input::get('rol');
      $usuarios->foto2 = $file->getClientOriginalName();
   $usuarios->save();

return redirect('usuarios');
   }
   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
      
   $usuarios=User::find($id);
   return view('usuarios.show',compact('usuarios'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id)
   {
      $usuarios=User::find($id);
   return view('usuarios.edit',compact('usuarios'));
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id, Request $request)
   {
    $usuariosUpdate=$request->all();
   $usuarios=User::find($id);
   $usuarios->update($usuariosUpdate);
   return redirect('usuarios');
   }
   
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
        User::find($id)->delete();
   return redirect('usuarios');
   }

 
}

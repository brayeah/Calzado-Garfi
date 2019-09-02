
@extends('layouts.app')


@section('content')
 <h1>Lista De Usuarios</h1>
  <td><a href="{{url('/usuarios/create')}}" class="btn btn-success">Crear Usuario</a></td>

 <a href="{{url('/productos')}}" class="btn btn-primary">Panel De productos</a>
 
 <style type="text/css">

 nav.navbar {
  

}
 nav.navbar li:hover > ul {
    
    display:block;
}
nav.navbar li a:hover{
    
    }


    </style>
<div class="panel-body">
 {!! Form::open(['route'=>'usuarios.index','method'=>'GET', 'class' => 'navbar-form pull-right']) !!}
 <div class="form-group">
    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese Usuario']) !!}

</div>
<button type="submit" class="btn btn-default">Búscar</button>
    {!! Form::close() !!}
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         
         <th>Nombre(s)</th>
        <th>Apellidos</th>
         <th>Dirección</th>
         <th>Teléfono</th>
         <th>Email</th>
         <th>Foto</th>
          <th>Rol</th>
         <th colspan="3">Administrador</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($usuarios as $usuario)

         <tr>
             <td>{{ $usuario->id }}</td>
             <td>{{ $usuario->name }}</td>
             <td>{{ $usuario->apellido }}</td>
       
             <td>{{ $usuario->direccion }}</td>
             <td>{{ $usuario->telefono }}</td>
              <td>{{ $usuario->email }}</td>
              <td><img src="fotos/{{ $usuario->foto2 }}"  class="img-responsive" ></td>
              <td>{{ $usuario->rol }}</td>
           
             <td><a href="{{route('usuarios.edit',$usuario->id)}}" class="btn btn-warning">Editar</a></td>
             <td>

             {!! Form::open(['method' => 'DELETE', 'route'=>['usuarios.destroy', $usuario->id]]) !!}
             {!! Form::open(['route'=>'usuarios.store','method'=>'POST','files'=>'true'])!!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     
     @endforeach

     </tbody>

 </table>
 <div class="text-center">
    {!! $usuarios ->render() !!}
@endsection
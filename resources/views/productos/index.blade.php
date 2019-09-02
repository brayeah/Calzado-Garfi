
@extends('layouts.app')


@section('content')
 <h1>Catalogo Calzado Garfi</h1>
  <td><a href="{{url('/productos/create')}}" class="btn btn-success">Crear Producto</a></td>

 <a href="{{url('/usuarios')}}" class="btn btn-primary">Panel De Usuarios</a>
  

 <style type="text/css">

 nav.navbar {
  

}
 nav.navbar li:hover > ul {
    
    display:block;
}
nav.navbar li a:hover{
    
    }
    img{

    width:100px;
    min-width :200px;
}


    </style>

<div class="panel-body">
 {!! Form::open(['route'=>'productos.index','method'=>'GET', 'class' => 'navbar-form pull-right']) !!}
 <div class="form-group">
    {!! Form::text('estilo', null, ['class'=>'form-control','placeholder'=>'Ingrese Estilo']) !!}

</div>
<button type="submit" class="btn btn-default">Búscar</button>
    {!! Form::close() !!}
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         
         <th>Estilo</th>
         <th>Numeración</th>
        <th>Color</th>
         <th>Precio</th>
         <th>Foto</th>
         <th>Género</th>
         <th colspan="3">¿Que Desea Hacer?</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($productos as $producto)

         <tr>
             <td>{{ $producto->id }}</td>
             
             <td>{{ $producto->estilo }}</td>
             <td>{{ $producto->numeracion }}</td>
            <td>{{ $producto->color }}</td>
             <td>{{ $producto->precio }}</td>

           
           <td><img src="fotos/{{ $producto->foto }}"  class="img-responsive" ></td>
     
              <td>{{ $producto->genero }}</td>
              
           
             <td><a href="{{route('productos.edit',$producto->id)}}" class="btn btn-warning">Editar</a></td>

             <td>

             {!! Form::open(['method' => 'DELETE', 'route'=>['productos.destroy', $producto->id]]) !!}
             {!! Form::open(['route'=>'productos.store','method'=>'POST','files'=>'true'])!!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     
     @endforeach

     </tbody>

 </table>
 <div class="text-center">
    {!! $productos ->render() !!}
@endsection
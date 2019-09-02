
@extends('layouts.app')


@section('content')
 <h1>Catalogo Calzado Garfi</h1>
  <td><a href="{{url('/pedidos/create')}}" class="btn btn-success">Crear Pedido</a></td>

 <a href="{{url('/usuarios')}}" class="btn btn-primary">Panel De Usuarios</a>
  <a href="{{url('/productos')}}" class="btn btn-primary">Panel De Productos</a>

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


 {!! Form::open(['route'=>'galeria.index','method'=>'GET', 'class' => 'navbar-form pull-right']) !!}

     <div class="input-group">
    {!! Form::text('estilo', null, ['class'=>'form-control','placeholder'=>'Búscar Estilo', 'aria-describedby'=>'search']) !!}
    <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search"
        aria-hidden="true"></span></span>
    </div>
  {!! Form::close() !!}
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         
         <th>Estilo</th>
        <th>Numeración</th>
         <th>Cantidad</th>
         <th>Color</th>
         <th>Total</th>
         <th>Estado</th>
         <th colspan="3">¿Que Desea Hacer?</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($pedidos as $pedido)

         <tr>
             <td>{{ $pedido->id }}</td>
             
             <td>{{ $pedido->producto }}</td>
            <td>{{ $pedido->numeracion }}</td>
             <td>{{ $pedido->cantidad }}</td>

            <td>{{ $pedido->impuesto }}</td>
           
     
              <td>{{ $pedido->total_pedido }}</td>
               <td>{{ $pedido->estado_pedido }}</td>
           
             <td><a href="{{route('pedidos.edit',$pedido->id)}}" class="btn btn-warning">Editar</a></td>

             <td>

             {!! Form::open(['method' => 'DELETE', 'route'=>['pedidos.destroy', $Pedido->id]]) !!}
             {!! Form::open(['route'=>'pedidos.store','method'=>'POST','files'=>'true'])!!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     
     @endforeach

     </tbody>

 </table>

@endsection
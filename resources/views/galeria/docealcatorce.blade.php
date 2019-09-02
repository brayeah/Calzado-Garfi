
@extends('layouts.app')


@section('content')
 <h1><a href="{{ url('/galeria') }}">Catalogo Calzado Garfi</a></h1>
  
 <style type="text/css">

body {background-color:   #66ccff;}
 nav.navbar {
  

}
 nav.navbar li:hover > ul {
    
    display:block;
}
nav.navbar li a:hover{
    
    }


.thumbnail{

     position:relative;
       float: left;
 width: 100%;
max-width:300px;
 border: 2px solid black;
    padding: 10px;
    margin: 10px;
background-color:  #ffcccc;

text-align:center

}
img{

   max-width:500px; 
   max-height:100px;
 -webkit-transition:all 0.5s ease;
 -moz-transition:all 0.5s ease;
 -ms-transition:all 0.5s ease;
 o-transition:all 0.5s ease;
 transition:all 0.5s ease;

}



    </style>

 {!! Form::open(['route'=>'galeria.index','method'=>'GET', 'class' => 'navbar-form pull-right']) !!}
 <div class="input-group">
    {!! Form::text('estilo', null, ['class'=>'form-control','placeholder'=>'Búscar Estilo', 'aria-describedby'=>'search']) !!}
    <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search"
        aria-hidden="true"></span></span>
    </div>
    {!! Form::close() !!}

     
<br>
<br>


     @foreach ($productos as $producto)
<div class="dentro">
 <div class="thumbnail">
    <a href="{{route('galeria.show',$producto->id)}}"><img src="fotos/{{ $producto->foto }}"  class="img-responsive" >
        Estilo:{{ $producto->estilo }}
       <br>{{ $producto->color }}<br>
        Precio: ${{ $producto->precio }}
        Numeración: {{ $producto->numeracion }}
          </a>
           <a href="{{route('productos.addToCart',[ 'id' => $producto->id])}}" class="btn btn-primary btn-block">Agregar Al Carrito</button></a>
      </div>
    </div>
              
           
             
     @endforeach



 <div class="text-center">
    {!! $productos ->render() !!}
@endsection
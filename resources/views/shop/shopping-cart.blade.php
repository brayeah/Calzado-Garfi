@extends('layouts.app')


<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
@section('content')
 
 <style type="text/css">


 nav.navbar {
  

}
 nav.navbar li:hover > ul {
    
    display:block;
}
nav.navbar li a:hover{
    
    }

img{width:100%;

}
  
    </style>
<div class="row">
		<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">     <h4><a  text-decoration="underline" class="navbar-nav pull-right" href="#" data-toggle="modal" data-target="#envios" >Haz Tús Cotizaciones Para El Envío</a></h4></div></div>

<div class="modal fade" id="envios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button
                             <h4 class="modal-title" id="myModalLabel">Te Sugerimos contactar alguna de las siguientes Paqueterias para su Envío</h4>            </div>
            <div class="modal-body">
              
             <h3> <p style=”text-align: justify;”>
             	<img src="{{ asset('contenido/julian.png') }}" ><a target="_blank" href="http://www.juliandeobregon.com.mx/">Transportes Julián De Obregón (San Fco Del Rincón, Gto.)</a> </h3></p>
              <h3> <p style=”text-align: justify;”><a target="_blank" href="http://www.castores.com.mx/">
              	<img src="{{ asset('contenido/castores.png') }}" ><a target="_blank" href="http://www.castores.com.mx/">Transportes Castores (San Fco Del Rincón, Gto.)</a> </h3></p>
              <h3> <p style=”text-align: justify;”><a target="_blank" href="http://www.dhl.com.mx/es.html"><img src="{{ asset('contenido/dhl.png') }}" ><a target="_blank" href="http://www.dhl.com.mx/es.html">DHL (San Francisco Del Rincón, Gto.)</a> </h3>
               <h3> <p style=”text-align: justify;”><a target="_blank" href="https://www.expressmg.com.mx/"><img src="{{ asset('contenido/mg.png') }}" ><a target="_blank" href="https://www.expressmg.com.mx/">Express MG (León, Gto.)</a> </h3></p>
                </p>
                
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="cuentas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Nuestras Cuentas Bancarias son las Siguientes:</h4>
            </div><class="modal-body">
            
            <div   
              <p style=”text-align: justify;”>
             	<img src="{{ asset('contenido/bancomer.jpg') }}" >
              	<img src="{{ asset('contenido/santander.jpg') }}" >
                
            </div>
        </div>
    </div>
</div>





	@if(Session::has('cart'))
	<div class="row">
		<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<ul class="list-group">
			@foreach($productos as $producto)
			<li class="list-group-item">
		<span class="badge">{{ $producto['cantidad']}}</span>
		<strong>{{$producto['item']['estilo']}}</strong>
		<strong>{{$producto['item']['color']}}</strong>
		<strong>{{$producto['item']['numeracion']}}</strong>
<span class="label label-success">${{$producto['precio']}}</span>
	<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Acción
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="{{ route('productos.agregardocena', ['id'=>$producto['item']['id']]) }}">Agregar Docena</a></li>
    <li><a href="{{ route('productos.quitardocena', ['id'=>$producto['item']['id']]) }}">Quitar Docena</a></li>
    <li><a href="{{ route('productos.quitartodo', ['id'=>$producto['item']['id']]) }}">Quitar Todo</a></li>
  </ul>
</div></li>


			@endforeach
		</ul>
	</div>
</div>
	
	<div class="row">
		<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">

			<h1><strong>Total:$ {{$totalprecio}}</strong></h1>
		</div>
		
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">	<h4><a  text-decoration="underline"  href="#" data-toggle="modal" data-target="#cuentas" >¿Donde Puedo Hacer Mi Deposito?</a></h4></div></div>
	<hr>


	<div class="row">
	
		<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
			<a href="{{ route('mandar')}}"   type="button" class="btn btn-success">Mandar</a>
		</div>
	</div>
	@else
<div class="row">
		<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
			<h2>No hay articulos en el carrito</h2>
		</div>
	</div>
	@endif
@endsection
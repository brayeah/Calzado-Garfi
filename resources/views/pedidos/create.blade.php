
@extends('layouts.template')
@section('content')
 
    <h1>Hacer Pedido</h1>
    {!! Form::open(['url' => 'pedidos' ,'method'=>'POST', 'enctype'=>'multipart/form-data', 'files'=>true]) !!}
   

    <div class="form-group">
         {!! Form::label('producto', 'Producto:') !!}
 
    {!! Form::select('productos', $productos, null, ['id'=>'productos'])!!}
   
</div>
 <div class="form-group">
       {!! Form::label('numeracion', 'Numeración:') !!}
       {!! Form::select('numeracion',array(''=>'Selecciona Una Opción','12/14' => '12/14', '15/17' => '15/17', '18/21' => '18/21'),'required') !!}
    </div>
      <div class="form-group">
        {!! Form::label('cantidad', 'Cantidad de Pares:') !!}
        {!! Form::text('cantidad',null,['class'=>'form-control','placeholder'=>'Cantidad de pares, recuerde que el minimo son dos docenas','required']) !!}
    </div>



    
    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
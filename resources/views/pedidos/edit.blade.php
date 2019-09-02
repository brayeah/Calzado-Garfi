@extends('layouts.template')
@section('content')
    <h1>Modificar Producto</h1>
    {!! Form::model($productos,['method' => 'PATCH','route'=>['productos.update',$productos->id]]) !!}
     
    <div class="form-group">
        {!! Form::label('estilo', 'Estilo:') !!}
        {!! Form::text('estilo',null,['class'=>'form-control','placeholder'=>'Estilo Del Producto']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('color', 'Color:') !!}
        {!! Form::text('color',null,['class'=>'form-control','placeholder'=>'Color(es); Ejemplo: Rojo-Negro-Blanco','required']) !!}
    </div>
      <div class="form-group">
        {!! Form::label('precio', 'Precio:') !!}
        {!! Form::text('precio',null,['class'=>'form-control','placeholder'=>'Precio Del Producto']) !!}
    </div>
  
    <div class="form-group">
       {!! Form::label('genero', 'Género:') !!}
       {!! Form::select('genero',array('Niño' => 'Niño', 'Niña' => 'Niña')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('foto', 'Foto:') !!}
       {!! Form::file('foto',null,['class' => 'form-control','required']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
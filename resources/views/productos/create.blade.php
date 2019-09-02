
@extends('layouts.template')
@section('content')
    <h1>Subir Nuevo Modelo</h1>
    {!! Form::open(['url' => 'productos' ,'method'=>'POST', 'enctype'=>'multipart/form-data', 'files'=>true]) !!}
   
    <div class="form-group">
        {!! Form::label('estilo', 'Estilo:') !!}
        {!! Form::text('estilo',null,['class'=>'form-control','placeholder'=>'Estilo Del Producto','required',]) !!}
    </div>
     <div class="form-group">
        {!! Form::label('color', 'Color:') !!}
        {!! Form::text('color',null,['class'=>'form-control','placeholder'=>'Color(es); Ejemplo: Rojo-Negro-Blanco','required']) !!}
    </div>
      <div class="form-group">
        {!! Form::label('precio', 'Precio:') !!}
        {!! Form::text('precio',null,['class'=>'form-control','placeholder'=>'Precio Del Producto','required']) !!}
    </div>
    
    
    <div class="form-group">
       {!! Form::label('genero', 'Género:') !!}
       {!! Form::select('genero',array(''=>'Selecciona Una Opción','Niño' => 'Niño', 'Niña' => 'Niña'),'required') !!}
    </div>
      <div class="form-group">
       {!! Form::label('numeracion', 'Numeración:') !!}
       {!! Form::select('numeracion',array(''=>'Selecciona su Numeración','12/14' => '12/14', '15/17' => '15/17', '18/21' => '18/21'),'required') !!}
    </div>
  
     <div class="form-group">
        {!! Form::label('foto', 'Foto:') !!}
        {!! Form::file('foto',null,['class' => 'form-control','required']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
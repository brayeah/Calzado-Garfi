
@extends('layouts.template')
@section('content')
    <h1>Crear Usuario</h1>
    {!! Form::open(['url' => 'usuarios' ,'method'=>'POST', 'files'=>true]) !!}
     
    <div class="form-group">
        {!! Form::label('name', 'Nombre(s):') !!}
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre Del Usuario','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apellido', 'Apellidos:') !!}
        {!! Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingresa Los Apellidos','required']) !!}
    </div>
      <div class="form-group">
        {!! Form::label('direccion', 'Dirección:') !!}
        {!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingresa Direccion','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('telefono', 'Teléfono:') !!}
        {!! Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ingresa telefono','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa email','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Contraseña:') !!}
        {!! Form::password('password',null,['class'=>'form-control','placeholder'=>'Contraseña','required']) !!}
    </div>
  
    <div class="form-group">
       {!! Form::label('rol', 'Rol:') !!}
       {!! Form::select('rol',array('admin' => 'Administrador', 'user' => 'Usuario')) !!}
    </div>

        <div class="form-group">
        {!! Form::label('foto2', 'Foto:') !!}
        {!! Form::file('foto2',null,['class' => 'form-control','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
     </div>
    {!! Form::close() !!}
@stop
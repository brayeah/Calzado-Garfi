@extends('layouts.template')
@section('content')
    <h1>Modificar Usuario</h1>
    {!! Form::model($usuarios,['method' => 'PATCH','route'=>['usuarios.update',$usuarios->id]]) !!}
     
    <div class="form-group">
        {!! Form::label('name', 'Nombre(s):') !!}
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre Del Usuario']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apellido', 'Apellidos:') !!}
        {!! Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Cambia Los Apellidos','required']) !!}
    </div>
      <div class="form-group">
        {!! Form::label('direccion', 'Dirección:') !!}
        {!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Cambia Direccion']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('telefono', 'Teléfono:') !!}
        {!! Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Cambia telefono']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Cambia email']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Contraseña:') !!}
        {!! Form::password('password',null,['class'=>'form-control','placeholder'=>'Contraseña']) !!}
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
    {!! Form::close() !!}
@stop
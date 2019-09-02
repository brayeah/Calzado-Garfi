@extends('layouts/template')
@section('content')
    <h1>Muestrario de Tenis</h1>
 
    <form class="form-horizontal">
       
        <div class="form-group">
            <label for="estilo" class="col-sm-2 control-label">Estilo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="estilo" placeholder={{$producto->estilo}} readonly>
            </div>
        
       </div>
         <div class="form-group">
            <label for="color" class="col-sm-2 control-label">Color</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="color" placeholder={{$producto->color}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="genero" class="col-sm-2 control-label">Genero</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="genero" placeholder={{$producto->genero}} readonly>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('productos')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </form>

     
@stop
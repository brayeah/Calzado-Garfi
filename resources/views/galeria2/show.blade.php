@extends('layouts/template')
@section('content')
   <Center> <h1>Muestrario de Tenis</h1></Center>
    <style type="text/css">
   
img{
width: 100%;
max-width: 450px;
}


 </style>
 
    <form class="form-horizontal">
     

       <div class="form-group">
            <label for="estilo" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
    <img src="{{asset('fotos/'.$productos->foto ) }}"  
width="450"  class="img-rounded" >

     </div>
 </div>
        <div class="form-group">
            <label for="estilo" class="col-sm-2 control-label">Estilo:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="estilo" placeholder={{$productos->estilo}} readonly>
            </div>
        
       </div>
         <div class="form-group">
            <label for="color" class="col-sm-2 control-label">Color(es):</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="color" placeholder={{$productos->color}} readonly>
            </div>
        </div>
     
  
         <div class="form-group">
            <label for="color" class="col-sm-2 control-label">Precio:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="color" placeholder=${{$productos->precio}} readonly>
            </div>
        </div>

        <div class="form-group">
            <label for="genero" class="col-sm-2 control-label">Genero:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="genero" placeholder={{$productos->genero}} readonly>
            </div>
        </div>

         <div class="form-group">
            <label for="genero" class="col-sm-2 control-label">Numeraciones:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="genero"  placeholder={{$productos->numeracion}} readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="genero" class="col-sm-2 control-label">Cantidad:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="genero"  placeholder={{$productos->cantidad}} readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('galeria2')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
  
    </form>

     
@stop
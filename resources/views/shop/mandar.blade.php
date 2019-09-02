@extends('layouts.app')


@section('content')
<style type="text/css">
                *{
                padding:0px;
                margin:0px;
            }


.contenedor{
width:40%;
min-width:200px;
}

.app-facebook{
    width:48px;
    height:48px;
    position: fixed;  
    right: 0;  
    top: 200px;  
    z-index: 2000; 
                    

}
.fleshita{
    width:50px;
    height:40px;
}
video{
    width:100%;
    min-width :300px;
}
img{width:100%;

}
nav-movil{
    width: 100%
}

            
            #header{
                margin:auto;
                width:500px;
                font-family:Verdana;
            }
            
            ul, ol{
                list-style:none;  
            }
            nav#nav-menu li a{ background-color:#BDC3C7;
                        color:#000;
                        text-decoration:none;
                        padding:18px 10px;
                        display:block;
                        }
                        nav#nav-menu > li {
                            float:left;
                        }
                        nav#nav-menu li a:hover{
                            background-color:orange;    
                        }
                        nav#nav-menu li ul{
                            display:none;
                            position:absolute;
                            min-wdth:140px;
                        }
                        nav#nav-menu li:hover > ul {
                            display:block;
                        }
                        nav#nav-menu li ul li{
                            
                        }
                           nav#nav-movil li a{ background-color:#BDC3C7;
                        color:#000;
                        text-decoration:none;
                        padding:28px 20px;
                        display:block;
                        
                        }

                         nav#nav-movil > li {
                            
                               display: block;

                        }
                        
                        
                        
                        nav#nav-movil li a:hover{
                            background-color:orange;    
                        }
                      
                       

                    @media all and (max-width: 700px) {
 
  nav#nav-menu {
    display: none; }



}
@media all and (min-width: 700px) {
 
  nav#nav-movil {
    display: none; }


}
            </style>


<div class="row">
<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
<h1>Checkout</h1>
<h4>Su total: ${{ $total }}</h4>
<form action="{{ route('mandar')}}" method="post" id="mandar-form">
	
<div class="row">
 <div class="col-xs-12">
 	<div class="form-group">
 		<label for="name">Nombre</label>
 		<input type="text" placeholder="Ingresa Tu Nombre Completo" id="name" class="form-control" required name="name">
 		</div>
 		</div>
<div class="col-xs-12">
 	<div class="form-group">
 		<label for="direccion">Telefono</label>
 		<input type="text"  placeholder="Dejanos Tu Celular o Telefono" id="direccion" class="form-control" required name="direccion">
 		</div>
 		<div class="form-group">
                           
           
 	
</div>
 		{{ csrf_field() }}
 		<button type="submit" class="btn btn-success">Hacer Pedido</button></div></div>
 

</form>
</div>
</div>

@endsection
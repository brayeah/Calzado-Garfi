
<html lang="{{ app()->getLocale() }}">
     <head>

        <title>Inquietos Como Tú...</title>
        <link rel="shortcut icon" href="{{ asset('contenido/favicon.ico') }}" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->

    </head>
    <body background="{{ asset('contenido/fondo10.png') }}" LINK="E67E22">

 <Center> <figure class="contenedor">  <a href=""><img src="{{ asset('contenido/nombregarfi.png') }}" style="position:relative;  border="0"></a>
    <!-- Nav -->
    
 

    <div style="position: relative; z-index: 5;">
          
    <div id="header">
         

        <ul class="nav">

        <nav id="nav-menu">
		
        <li><a href="{{ url('/galeria2') }}">Catálogo</a>
         </li>
        <li><a href="{{ url('/galeria') }}">Tienda En Línea</a></li>    
          
			 <li><a href="{{ url('/register') }}">Registro</a>
             <ul>
			 
            <li><a href="{{ url('/login') }}">Login</a></li>
			 
            <li><a href="{{ route('password.request') }}">¿Olvidaste Tu Contraseña?</a></li>


        </ul></li> 
        <li><a href="#" data-toggle="modal" data-target="#contactanos">Contáctanos</a>
        <ul>
            <li><a href="#" data-toggle="modal" data-target="#somos">¿Quiénes Somos?</a></li>
           <li><a href="#" data-toggle="modal" data-target="#correo">Correo Electrónico</a></li>
            <li><a href="#" data-toggle="modal" data-target="#telefono">Teléfono</a></li>
            <li><a href="https://www.google.com.mx/maps/place/Melchor+Ocampo+606,+INFONAVIT+San+Francisco,+36330+San+Francisco+del+Rinc%C3%B3n,+Gto./@21.0232521,-101.8532322,17z/data=!4m13!1m7!3m6!1s0x842be84e2409c8ad:0x62e92018a64dc5be!2sMelchor+Ocampo+606,+INFONAVIT+San+Francisco,+36330+San+Francisco+del+Rinc%C3%B3n,+Gto.!3b1!8m2!3d21.0232521!4d-101.8510435!3m4!1s0x842be84e2409c8ad:0x62e92018a64dc5be!8m2!3d21.0232521!4d-101.8510435">Ubicación</a></li>
            <li><a href="#" data-toggle="modal" data-target="#politicas">Políticas</a></li>

        </ul></li>
		</nav>
    </div>
        <nav id="nav-movil">
        <li><a href="{{ url('/galeria2') }}">Catálogo</a>
        <li><a href="{{ url('/pedidos')}}">Tienda En Línea</a></li>      
        <li><a href="{{ url('/register') }}">Registro</a></li>
        <li><a href="{{ url('/login') }}">Login</a></li>
        </li>
        <li><a href="#" data-toggle="modal" data-target="#contactanos">Contáctanos</a></li>





         </nav>
    </div>
    </figure>
</center>
 <figure class="app-facebook"><div style="text-align:right;">
<a href=https://www.facebook.com/garfi.kids.3 target="_blank"><img alt="siguenos en facebook" height="48" src="http://2.bp.blogspot.com/-GlLV_MydcBk/UiX09MYOSfI/AAAAAAAAB18/5vkDADo6qEw/s1600/Facebook+alt+1.png" title="siguenos en facebook" width="48" /></a>
<a href=https://twitter.com/CalzadoGarfi target="_blank"><img alt="siguenos en Twitter" height="48" src="http://3.bp.blogspot.com/-sbO3cK5dmzo/UiX1BG6KASI/AAAAAAAAB2s/wYYv24Dpggw/s1600/Twitter+alt+4.png" title="siguenos en Twitter" width="48" /></a>
<a href=https://www.youtube.com/channel/UCGtojLGkLSNRdLuJ1S8Q-pQ?view_as=subscribertarget= target="_blank"><img alt="Canal de youtube" height="48" src="http://1.bp.blogspot.com/-nFaU3lAbBgg/UiX1C-m6KjI/AAAAAAAAB3M/Lbf9N4I9QOg/s1600/Youtube+alt+2.png" title="Canal de youtube" width="48" /></a>
<a href=http://Instagram.com/ target="_blank"><img alt="sígueme en Instagram" height="48" src="http://1.bp.blogspot.com/-P6il8-oOBvw/UiYMOJYxK9I/AAAAAAAAB9o/HLUAnsDoor4/s1600/instagram.png" title="sígueme en Instagram" width="48" /></a>
<a href="mailto:calzadogarfi@hotmail.com" target="_blank"><img alt="Envianos un Correo" height="48" src="http://3.bp.blogspot.com/-JrNncKvJUnY/Uid1UFUg_0I/AAAAAAAACBs/ygQ9cfdi8Vw/s1600/correo.png" title="Envianos un Correo" width="48" /></a>
</div></figure>

    <div style="text-align:center;"> <video  src="{{ asset('contenido/kids.mp4') }}" width="1400" height="650" autoplay muted controls loop></video> </div>
    <br><br><br>
   
 <footer >
     <div style="text-align:center;" class='define' >
     <div  class='define'>
            <ul> <li>  <font face="arial" size="3" color="white">Mapa Del Sitio</font></li>
                
             
        <li><a href="{{ url('/galeria2') }}">Catálogo</a>
       
        <li><a href="{{ url('/galeria') }}">Tienda En Línea</a></li>      
        <li><a href="{{ url('/register') }}">Registro</a></li>
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="#" data-toggle="modal" data-target="#contactanos">Contáctanos</a></li>
        <li><a href="#" data-toggle="modal" data-target="#somos">¿Quiénes Somos?</a></li>
        <li><a href="#" data-toggle="modal" data-target="#correo">Correo</a></li>
        <li><a href="#" data-toggle="modal" data-target="#telefono">Teléfono</a></li>
        <li><a href="https://www.google.com.mx/maps/place/Melchor+Ocampo+606,+INFONAVIT+San+Francisco,+36330+San+Francisco+del+Rinc%C3%B3n,+Gto./@21.0232521,-101.8532322,17z/data=!4m13!1m7!3m6!1s0x842be84e2409c8ad:0x62e92018a64dc5be!2sMelchor+Ocampo+606,+INFONAVIT+San+Francisco,+36330+San+Francisco+del+Rinc%C3%B3n,+Gto.!3b1!8m2!3d21.0232521!4d-101.8510435!3m4!1s0x842be84e2409c8ad:0x62e92018a64dc5be!8m2!3d21.0232521!4d-101.8510435">Ubicación</a></li>
        <li><a href="#" data-toggle="modal" data-target="#politicas">Políticas</a></li>

        </ul>

        <div class="modal fade" id="contactanos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">¿Alguna Duda o Sugerencia? ¡Contáctanos!</h4>
            </div>
            <div class="modal-body">
             <h3> <p style=”text-align: justify;”>calzado_garfi@hotmail.com
                <br>(476) 74-3-61-16
                <br><br>Horario de Oficina:
                <br>Lunes-Viernes
                <br>9:00-14:30 & 16:00-20:00
                <br>Sabados
                <br>9:00-14:00</h3></p>
            </div>
        </div>
    </div>
</div>

                
                <div class="modal fade" id="somos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Calzado Garfi Inquietos Como Tú...</h4>
            </div>
            <div class="modal-body">
                <img src="{{ asset('contenido/garfilogo.jpg') }}" height="180">
             <h3> <p style=”text-align: justify;”> Somos Una Empresa de Calzado De San Francisco Del Rincón, Guanajuato, ofrecemos la mejor calidad en calzado para los más pequeños de la familia, los niños amarán nuestro producto y jamás querrán quitárselos.
            Ofrecemos exclusivamente venta de mayoreo, surtimos a varios estados alrededor de la República Mexicana como: Monterrey, Jalisco o incluso Yucatán solo por mencionar algunos, si lo que buscas es un calzado de moda, resistente, duradero y económico, Somos Tu Mejor Opción, Calzado Garfi.
</h3></p>
            </div>
        </div>
    </div>
</div>

 <div class="modal fade" id="correo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Mándanos Un Correo Electrónico, Te Contestaremos Lo Más Pronto Posible</h4>
            </div>
            <div class="modal-body">
              
             <h3> <p style=”text-align: justify;”>calzado_garfi@hotmail.com</h3></p>
            </div>
        </div>
    </div>
</div>
                
                 <div class="modal fade" id="telefono" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Teléfono(s):</h4>
            </div>
            <div class="modal-body">
             
             <h3> <p style=”text-align: justify;”>(476) 74-3-61-16
    </h3></p>
            </div>
        </div>
    </div>
</div>

 <div class="modal fade" id="politicas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Nuestras Politicas</h4>
            </div>
            <div class="modal-body">
 <h4><center>1.- Si es su primera vez comprando con Calzado Garfi todo pedido tendrá que ser pagado por adelantado.
                <br>2.- Si usted ya es nuestro cliente deberá saber que la fecha máxima para liquidar su adeudo es de 15 días entregado el producto.
                <br>3.- No Manejamos Stock, todo es sobre pedido.
                <br>4.- El Precio individual o de docena ya cuenta con el Iva incluido
                <br>5.- El minimo de pares por modelo y numeracion son Doce (12)
                pares.
                <br>6.- Si desea un pedido con numeracion especial favor de comunicarse con el personal en turno.
                <br>7.- El Envío correrá por su cuenta, por si usted prefiere recoger su mercancía personalmente no tendremos inconveniente alguno.
                <br>8.- Podemos darle sugerencias de paquetería y sus precios aproximados, pero al final quien decidira el envio será el cliente.
                <br>9.- Los Pedidos tienen un aproximado de 15 días hábiles en producirse una vez confirmado.
                <br>10.- Los Pagos Son Exclusivamente Depósitos Bancarios o En Efectivo.
                <br>11.- Aclaraciones o Malentendidos Favor de Comunicarse al Num: (476)-74-3-61-16

</center></h4>
            </div>
        </div>
    </div>
</div>
                
                
                <br><br>
             
        </div>
               <div   class='define'>
                   <font face="arial" size="3" color="white">Calzado Garfi</font><br>
                <font face="arial" size="2.5" color="gray">Calle Melchor Ocampo #606
                <br> Colonia Infonavit Bomberos
                 <br>Código Postal 36330
             <br>San Francisco Del Rincón, Guanajuato</font>
        </div>
     
     </div>
     <br><br><br>
	  <Center><figure class="fleshita">  <a href="#"><img src="{{ asset('contenido/fleshita.png') }}" title="Ir arriba" width="50" height="40" align="center" ></a> </figure> </Center>
     
     
   <div style="text-align:right;" class='define'>  <font face="arial" size="3" color="white">  © Calzado Garfi 2017 
       <br>Desarrollado por Brayan Rodríguez</font></div>
     <br><br><br><br>
    </footer>

</body>
</html>


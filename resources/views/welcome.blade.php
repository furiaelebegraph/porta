<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Residencial Porta Romani</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/helpers.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/general.css') }}">

    </head>
    <body>
        <div class="row justify-content-center align-items-center fondo_marmol">
            <div class="col-12">
                <div class="portada">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item">
      <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="Porta Romani Residencial" src="{{ asset('img/portada_1.jpg') }}" data-holder-rendered="true">
    </div>
    <div class="carousel-item active">
      <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [800x400]" src="{{ asset('img/portada_1.jpg') }}" data-holder-rendered="true">
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide" alt="Third slide [800x400]" src="{{ asset('img/portada_1.jpg') }}" data-holder-rendered="true">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                </div>

            </div>
            <div class="navegador_mobiles mobil">
                <div class="btn_menu">
                    <img src="{{ asset('img/hamburguesa.svg') }}" alt="">
                </div>
                <div class="menu">
                    <div class="alineado_centro m-t-20">
                        <img class="logo_menu" src="{{ asset('img/logo_porta_d.svg') }}" alt="">
                    </div>
                    <div class="links_menu">
                        <a href="#inicio"> INICIO </a>
                    </div>
                    <div class="links_menu"> 
                        <a href="#quienes"> ¿QUIÉNES SOMOS? </a>
                    </div>
                    <div class="links_menu">
                        <a href="#modelos">
                            MODELOS
                        </a>
                    </div>
                    <div class="links_menu">
                        <img class="prisma2" src="img/prisma.svg" alt="">
                        <a href="#portagenova">
                            GENOVA
                        </a>
                    </div>
                    <div class="links_menu">
                        <img class="prisma2" src="img/prisma.svg" alt="">
                        <a href="#portamonza">
                            MONZA
                        </a>
                    </div>

                    <div class="links_menu">
                        <a href="#portaverona">
                            VERONA
                        </a>
                    </div>
                    <div class="links_menu">
                        <a href="#amenidades">
                            AMENIDADES
                        </a>
                    </div>
                    <div class="links_menu">
                        <a href="#map">
                            UBICACION
                        </a>
                    </div>
                    <div class="links_menu">
                        <a href="#contacto">
                            CONTACTO
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 navegador_porta p-t-20 escritorio">
                <div class="centro_1300">
                    <div class="row justify-content-center align-items-center alineado_centro">
                        <div class="col-4 col-sm-2 p-t-10 p-b-10">
                            <a href="#quienes">QUIENES SOMOS?</a>
                        </div>
                        <div class="col-4 col-sm-2 p-t-10 p-b-10">
                            <a href="#modelos">MODELOS</a>
                        </div>
                        <div class="col-4 col-sm-2 p-t-10 p-b-10">
                            <a href="#amenidades">AMENIDADES</a>
                        </div>
                        <div class="col-4 col-sm-2 p-t-10 p-b-10">
                            <a href="#map">UBICACION</a>
                        </div>
                        <div class="col-4 col-sm-2 p-t-10 p-b-10">
                            <a href="#contacto">CONTACTO</a>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="col-12 navegador_porta p-t-20 no-display" id='inicio'>
                <div class="centro_1300">
                    <div class="row justify-content-center align-items-center alineado_centro">
                        <div class="col-4 col-sm-2 m-b-10">
                            <img class="logo_menu" src="{{ asset('img/logo_porta_d.svg') }}" alt="">
                        </div>
                        <div class="col-4 col-sm-2 p-t-10 p-b-10">
                            <a href="#quienes">QUIENES SOMOS?</a>
                        </div>
                        <div class="col-4 col-sm-2 p-t-10 p-b-10">
                            <a href="#modelos">MODELOS</a>
                        </div>
                        <div class="col-4 col-sm-2 p-t-10 p-b-10">
                            <a href="#amenidades">AMENIDADES</a>
                        </div>
                        <div class="col-4 col-sm-2 p-t-10 p-b-10">
                            <a href="#map">UBICACION</a>
                        </div>
                        <div class="col-4 col-sm-2 p-t-10 p-b-10">
                            <a href="#contacto">CONTACTO</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-12" id='quienes'>
                <div class="pestana alineado_centro">
                    <p>QUIENES SOMOS?</p>
                </div>
                <div class="centro_880 m-t-80">
                    <div class="row">
                        <div class="col-3">
                            <img class='w-100' src="{{ asset('img/galeria_1.jpg') }}" alt="">
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12">
                                    <img class='w-100' src="{{ asset('img/galeria_2.jpg') }}" alt="">
                                </div>
                                <div class="col-12">
                                    <img class='w-100' src="{{ asset('img/galeria_3.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <img class='w-100' src="{{ asset('img/galeria_4.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 m-t-80">
                <div class="centro_880">
                    <div class="row justify-content-center align-items-center">
                        
                        <div class="col-12">
                            <div class="linea_dorada">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row wrap_porta">
                        <div class="col-12 alineado_centro m-t-30">
                            <h2>-Porta Romani Residencial-</h2>
                        </div>
                        <div class="col-12">
                            <p>
                                Es un desarrollo inmobiliario donde la calidad es la prioridad sobre todas las cosas y que fue diseñado cuidando cada detalle.
                            </p>
                            <p>
                                Con una ubicación privilegiada al sur de la ciudad de León, Guanajuato, se desarrolla sobre una superficie de más de tres hectáreas y media un complejo habitacional de 137 viviendas con tres modelos diferentes y una zona comercial de 22 locales.
                            </p>
                            <p>

                                Con un acceso moderno, áreas verdes inmejorables y espacios funcionales hacen de Porta Romani Residencial un proyecto habitacional de alta plusvalía. 
                            </p>

                            
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center m-t-30 m-b-30">
                        <div class="col-12">
                            <div class="linea_dorada">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12"id='modelos'>
                <div class="centro_1300">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-12 m-t-10" id='portagenova'>

                            <a href="{{ asset('img/genova3.png') }}" data-fancybox="genova" > 
                                <img class='w-100' src=" {{ asset('img/genova.jpg') }}  " alt="">
                            </a>
                            <a href=" {{ asset('img/genova1.png') }} " data-fancybox="genova"> 
                                <img class='no-display' src=" {{ asset('img/genova.jpg') }}  " alt="">
                            </a>

                            <a href="{{ asset('img/genova2.png') }}" data-fancybox="genova" > 
                                <img class='no-display' src=" {{ asset('img/genova.jpg') }}  " alt="">
                            </a>
                            <a href="{{ asset('img/genova4.jpg') }}" data-fancybox="genova" > 
                                <img class='no-display' src=" {{ asset('img/genova.jpg') }}  " alt="">
                            </a>
                        </div>
                        <div class="col-12 m-t-10" id='portamonza'>
                            <a href=" {{ asset('img/monza.png') }} " data-fancybox="monza">
                                <img class='w-100' src=" {{ asset('img/monza.jpg') }} " alt="">
                            </a>
                            <a href=" {{ asset('img/monza1.png') }} " data-fancybox="monza">
                                <img class='no-display'src=" {{ asset('img/monza.jpg') }} " alt="">
                            </a>
                            <a href=" {{ asset('img/monza2.png') }} " data-fancybox="monza">
                                <img class='no-display' src=" {{ asset('img/monza.jpg') }} " alt="">
                            </a>
                            <a href=" {{ asset('img/monza4.jpg') }} " data-fancybox="monza">
                                <img class='no-display' src=" {{ asset('img/monza.jpg') }} " alt="">
                            </a>
                        </div>
                        <div class="col-12 m-t-10" id='portaverona'>
                            <a href=" {{ asset('img/verona3.png') }}" data-fancybox="verona">
                                <img class='w-100'src=" {{ asset('img/verona.jpg') }}" alt="">
                            </a>
                            <a href=" {{ asset('img/verona1.png') }}" data-fancybox="verona">
                                <img class='no-display'  src=" {{ asset('img/verona.jpg') }}" alt="">
                            </a>
                            <a href=" {{ asset('img/verona2.png') }}" data-fancybox="verona">
                                <img class='no-display' src=" {{ asset('img/verona.jpg') }}" alt="">
                            </a>
                            <a href=" {{ asset('img/verona4.jpg') }}" data-fancybox="verona">
                                <img class='no-display' src=" {{ asset('img/verona.jpg') }}" alt="">
                            </a>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-12" id='amenidades'>
                <div class="linea_dorada">

                </div>
                
                <div class="pestana alineado_centro">
                    <p>AMENIDADES</p>
                </div>
            </div>
            <div class="col-11 col-sm-12 m-t-80" id='ubicacion'>
                <div class="row justify-content-center align-items-start">
                    <div class="kokoro m-t-30 alienado_centro ">
                        <img class='w-100' src="{{ asset('img/amenidades1.png') }}" alt="">
                        <div class='wrap_amenidades alineado_centro'>
                            <img class='icono_ameni' src="{{ asset('img/camara.svg') }}" alt="">
                            <h2 class='alineado_centro p-b-10'>SEGURIDAD</h2>
                            <p class='alineado_izq'>
                                Contamos con accesos resguardados por un excelente equipo de seguridad, brindando de esta manera, el mejor cuidado para tu hogar y tus seres queridos.
                                
                            </p>
                        </div>
                    </div>
                    <div class="kokoro m-t-30 alienado_centro">
                        <img class='w-100' src="{{ asset('img/amenidades2.png') }}" alt="">
                        <div class='wrap_amenidades alineado_centro'>
                            <img class='icono_ameni alineado_centro' src="{{ asset('img/senal.svg') }}" alt="">
                            <h2 class='alineado_centro p-b-10'>VIALIDADES</h2>
                            <p class='alineado_izq'>
                                Contamos con un sistema de vialidades pensadas para la comodidad de los tuyos, en donde tu y tu familia puedan transitar libremente sin nigun peligro.
                                
                            </p>
                        </div>
                    </div>
                    <div class="kokoro m-t-30 alienado_centro">
                        <img class='w-100' src="{{ asset('img/amenidades3.png') }}" alt="">
                        <div class='wrap_amenidades alineado_centro'>
                            <img class='icono_ameni' src="{{ asset('img/arbol.svg') }}" alt="">
                            <h2 class='alineado_centro p-b-10'>ÁREAS VERDES</h2>
                            <p class='alineado_izq'>
                            Somos un residencial sumamente responsable con el cuidado del medio ambiente, por lo que contamos con grandes secciones de áreas verdes para recreación de todos nuestros habitantes.
                            ¡Vive momentos únicos!

                            </p>
                        </div>
                    </div>
                    <div class="kokoro m-t-30 alienado_centro">
                        <img class='w-100' src="{{ asset('img/amenidades4.png') }}" alt="">
                        <div class='wrap_amenidades alineado_centro'>
                            <img class='icono_ameni' src="{{ asset('img/jueguito.svg') }}" alt="">
                            <h2 class='alineado_centro p-b-10'>ÁREAS RECREATIVAS</h2>
                            <p class='alineado_izq'>
                                Pensado para los pequeños de la familia, contamos con espacios para la recreación y diversión familiar. 
                                ¡Atesora momentos inolvidables!
                            </p>
                        </div>
                    </div>
                    <div class="kokoro m-t-30 alienado_centro">
                        <img class='w-100' src="{{ asset('img/amenidades5.png') }}" alt="">
                        <div class='wrap_amenidades alineado_centro'>
                            <img class='icono_ameni' src="{{ asset('img/candado.svg') }}" alt="">
                            <h2 class='alineado_centro p-b-10'>PRIVACIDAD TOTAL</h2>
                            <p class='alineado_izq'>
                                Disfruta de una mayor tranquilidad y momentos de reflexión y calma dentro de nuestro residencial, relajate y déjate llevar con la mayor privacidad.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-11 col-md-10 m-t-80" id='contacto'>
                <div class="linea_dorada">

                </div>
                <div class="pestana alineado_centro">
                    <p>CONTACTO</p>
                </div>
                <div class="centro_880 m-t-80 m-b-80">
                    <div class="row">
                        <div class="col-12 col-md-5">
                            CONTACTA A UN ASESOR INMOBILIARIO <br>
                            Fraccionamiento Porta Romani <br>
                            Av. Porta Romani 100 Col... <br>
                            Telefóno <a href="tel:+1 477 000 0000"> +1 (477) 000 0000</a>
                        </div>

                        <div class="col-12 col-md-7">
                            <form action="enviarCorreo" method="POST">
                                <input type="text" placeholder="Nombre Completo" class="form-control">
                                <input type="text" placeholder="E-mail" class="form-control">
                                <textarea rows="10" type="text" placeholder="Mensaje" class="form-control"></textarea>
                                <input type="submit" class='btn_submit_porta' value='ENVIAR'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
            <div class="row">
                <div class="col-12">

                    
                    <div id="map">
                    
                    </div>
                    
                </div> 
            </div>
            <div class="row">
            <div class="col-12 alineado_centro">
                <img class="logoPortaFoo" src="{{ asset('img/logoporta.png') }}" alt="">
            </div>


        </div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

        <script src="{{ asset('js/general.js') }}" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', potato);
        
            function potato() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(21.107915, -101.591152), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"all","elementType":"geometry.fill","stylers":[{"weight":"2.00"}]},{"featureType":"all","elementType":"geometry.stroke","stylers":[{"color":"#9c9c9c"}]},{"featureType":"all","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#eeeeee"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#7b7b7b"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#c8d7d4"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#070707"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(21.107915, -101.591152),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>
    </body>
</html>

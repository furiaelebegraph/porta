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
        <link rel="stylesheet" href="{{ asset('css/general.css') }}">

    </head>
    <body>
        <div class="row justify-content-center align-items-center fondo_marmol">
            <div class="col-12">
                <div class="portada">
                    <img src="{{ asset('img/portada_1.jpg') }}" alt="">
                </div>

            </div>
            <div class="col-12 navegador_porta p-t-20">
                <div class="centro_880">
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
                            <a href="#ubicacion">UBICACION</a>
                        </div>
                        <div class="col-4 col-sm-2 p-t-10 p-b-10">
                            <a href="#contacto">CONTACTO</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-12">
                <div class="pestana alineado_centro">
                    .
                    <img src="" alt="">
                    <p>QUIENES SOMOS?</p>
                </div>
                <div class="centro_880">
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
            <div class="col-12">
                <div class="centro_880">
                    <div class="row wrap_porta">
                        <div class="col-12">
                            <div class="linea_dorada">
                                
                            </div>
                        </div>
                        <div class="col-12 alineado_centro">
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
                        <div class="col-12">
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="centro_1300">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-12">
                            <a href=""> 
                                <img class='w-100' src=" {{ asset('img/genova.jpg') }}  " alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="">
                                <img class='w-100' src=" {{ asset('img/monza.jpg') }} " alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="">
                                <img class='w-100' src=" {{ asset('img/verona.jpg') }}" alt="">
                            </a>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-12">
                
                <div class="pestana alineado_centro">
                    <p>AMENIDADES</p>
                </div>
            </div>
            <div class="col-12 col-sm-11">
                <div class="centro_1300">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-10 col-sm-4 col-md-2">
                            <img src="{{ asset('img/amenidades1.png') }}" alt="">
                            <h2 class='alineado_centro'>SEGURIDAD</h2>
                            <div class='wrap_amenidades'>
                                Contamos con accesos resguardados por un excelente equipo de seguridad, brindando de esta manera, el mejor cuidado para tu hogar y tus seres queridos.
                            </div>
                        </div>
                        <div class="col-10 col-sm-4 col-md-2">
                            <img src="{{ asset('img/amenidades2.png') }}" alt="">
                            <h2 class='alineado_centro'>VIALIDADES</h2>
                            <div class='wrap_amenidades'>

                                Contamos con un sistema de vialidades pensadas para la comodidad de los tuyos, en donde tu y tu familia puedan transitar libremente sin nigun peligro.
                            </div>
                        </div>
                        <div class="col-10 col-sm-4 col-md-2">
                            <img src="{{ asset('img/amenidades3.png') }}" alt="">
                            <h2 class='alineado_centro'>ÁREAS VERDES</h2>
                            <div class='wrap_amenidades'>
                                <p>
                                    
                                </p>
                                Somos un residencial sumamente responsable con el cuidado del medio ambiente, por lo que contamos con grandes secciones de áreas verdes para recreación de todos nuestros habitantes.
                                ¡Vive momentos únicos!
                            </div>
                        </div>
                        <div class="col-10 col-sm-4 col-md-2">
                            <img src="{{ asset('img/amenidades4.png') }}" alt="">
                            <h2 class='alineado_centro'>ÁREAS RECREATIVAS</h2>
                            <div class='wrap_amenidades'>
                                <p>
                                    Pensado para los pequeños de la familia, contamos con espacios para la recreación y diversión familiar. 
                                    ¡Atesora momentos inolvidables!
                                </p>
                            </div>
                        </div>
                        <div class="col-10 col-sm-4 col-md-2">
                            <img src="{{ asset('img/amenidades5.png') }}" alt="">
                            <h2>ÁPRIVACIDAD TOTAL</h2>
                            <div class='wrap_amenidades'>
                                <p>
                                    Disfruta de una mayor tranquilidad y momentos de reflexión y calma dentro de nuestro residencial, relajate y déjate llevar con la mayor privacidad.
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-11 col-md-10">
                <div class="pestana alineado_centro">
                    <p>CONTACTO</p>
                </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            CONTACTA A UN ASESOR INMOBILIARIO
                            Fraccionamiento Porta Romani
                            Av. Porta Romani 100 Col...
                            Telefóno <a href="tel:+1 477 000 0000"> +1 (477) 000 0000</a>
                        </div>

                        <div class="col-12 col-md-6">
                            <form action="enviarCorreo">
                                <input type="text" placeholder="Nombre Completo" class="form-control">
                                <input type="text" placeholder="E-mail" class="form-control">
                                <input type="text" placeholder="Mensaje" class="form-control">
                                <input type="submit" class='btn_submit_porta' value='ENVIAR'>
                            </form>
                        </div>
                    </div>
                    
                <div id="map">
                    
                </div>
            </div>
            <div class="col-12">
                <img src="{{ asset('img/portada_1.jpg') }}" alt="">
            </div>
        </div>
        <script scr='{{ asset('js/general.js') }}' ></script>
    </body>
</html>

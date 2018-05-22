<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Puerta Romani</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/helpers.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/general.css') }}">

    </head>
    <body>
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="portada">
                    <img src="{{ asset('img/portada_1.jpg') }}" alt="">
                </div>

            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-2">
                        <a href="#quienes">QUIENES SOMOS?</a>
                    </div>
                    <div class="col-2">
                        <a href="#modelos">MODELOS</a>
                    </div>
                    <div class="col-2">
                        <a href="#amenidades">AMENIDADES</a>
                    </div>
                    <div class="col-2">
                        <a href="#ubicacion">UBICACION</a>
                    </div>
                    <div class="col-2">
                        <a href="#contacto">CONTACTO</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="pestana">
                    <img src="" alt="">
                    <p>QUIENES SOMOS?</p>
                </div>
                <div class="centro_880">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ asset('img/galeria_1.jpg') }}" alt="">
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('img/galeria_2.jpg') }}" alt="">
                                </div>
                                <div class="col-12">
                                    <img src="{{ asset('img/galeria_3.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('img/galeria_4.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="centro_880">
                    <div class="row">
                        <div class="col-12">
                            <img src="" alt="">
                        </div>
                        <div class="col-12">
                            <h2>-Porta Romani Residencial-</h2>
                        </div>
                        <div class="col-12">
                            <p>
                                Es un desarrollo inmobiliario donde la calidad es la prioridad sobre todas las cosas y que fue diseñado cuidando cada detalle.

                                Con una ubicación privilegiada al sur de la ciudad de León, Guanajuato, se desarrolla sobre una superficie de más de tres hectáreas y media un complejo habitacional de 137 viviendas con tres modelos diferentes y una zona comercial de 22 locales.

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
                <a href="">
                    <img src="genova.jpg" alt="">
                </a>
            </div>
            <div class="col-12">
                <a href="">
                    <img src="monza.jpg" alt="">
                </a>
            </div>
            <div class="col-12">
                <a href="">
                    <img src="verona.jpg" alt="">
                </a>
            </div>
            <div class="col-12">
                <div class="centro_880">
                    <div class="row">
                        <div class="col-4 col-sm-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="contacto">
                    
                </div>
                <div id="map">
                    
                </div>
            </div>
        </div>
    </body>
</html>

@extends('layouts.main')

@section('content')

    <h1>TACOS</h1>
    <div class="row">

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Fish Taco</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#fishtaco">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary" style="width: 200px;" data-toggle="modal"
                data-target="#fishtaco">Fish Taco
            </button>&nbsp;Guacamole & Mexican Salsa --}}

            <div class="modal fade" id="fishtaco" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Fish Taco</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474867549" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Ponemos nuestro pedazo de filete a la freidora aproximadamente por 2 minutos o
                                    menos, ponemos a calentar la tortilla en la plancha en lo que esta el pedazo de
                                    filete. Sacamos el pedazo de filete de la freidora y ya que la tortilla esta
                                    caliente, ponemos la tortilla en un plato enseguida encima ponemos el filete, le
                                    pondremos aderezo ranch, lechuga y su pica de gallo.</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Steak Taco</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#steaktacos">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary" style="width: 200px;" data-toggle="modal"
                data-target="#steaktacos">Steak Taco</button>&nbsp;Guacamole & Mexican Salsa
            --}}

            <div class="modal fade" id="steaktacos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Steak Taco</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474868274" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Ponemos en la plancha de cucharada a cucharada y media de carne asada alrededor
                                    de 45 segundos a un minuto y ponemos la tortilla a calentar. Ya que este
                                    caliente la tortilla y la carne, procederemos a poner la tortilla en un plato,
                                    en seguida la carne sobre la tortilla, le pondremos guacamole y su pico de
                                    gallo.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Chicken Soft Taco</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#cst">
                        Go somewhere
                    </a>
                </div>
            </div>


            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary" style="width: 200px;" data-toggle="modal"
                data-target="#cst">Chicken Soft Taco</button>&nbsp;Guacamole & Mexican Salsa
            --}}

            <div class="modal fade" id="cst" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Chicken Soft Taco</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474867821" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Ponemos en la freidora el taco dorado por un minuto o menos a 365 grados la
                                    freidora. Ya que esta el taco dorado los sacamos de la freidora y lo dejamos
                                    escurrir, quitamos los palillos que tiene el taco, abrimos, ponemos queso,
                                    lechuga y pico de gallo y envolvemos el taco dorado.</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row">
        
        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Beef Hard Taco</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bht">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary" style="width: 200px;" data-toggle="modal" data-target="#bht">Beef
                Hard Taco</button><label>&nbsp;Cheese, Lettyce & Mexican Salsa</label> --}}

            <div class="modal fade" id="bht" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Beef Hard Taco</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474867967" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Chicken Hard Taco</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#cht">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary" style="width: 200px;" data-toggle="modal"
                data-target="#cht">Chicken Hard Taco</button>&nbsp;Cheese, Lettuce & Mexican Salsa --}}

            <div class="modal fade" id="cht" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Chicken Hard Taco</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474867967" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Carnitas Taco</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#carnitastaco">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary" style="width: 200px;" data-toggle="modal"
                data-target="#carnitastaco">Carnitas Taco</button>&nbsp;Guacamole & Mexican Salsa --}}

            <div class="modal fade" id="carnitastaco" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Carnitas Tacos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474867473" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Shrimp Tacos</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#shrimptaco">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary" style="width: 200px;" data-toggle="modal"
                data-target="#shrimptaco">Shrimp Taco</button><label class="label">&nbsp;Cheese, Lettyce & Mexican
                Salsa</label> --}}

            <div class="modal fade" id="shrimptaco" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Shrimp Tacos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474867056" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Pondremos en la plancha de 5 a 6 camarones le agregamos un poco de margarina y
                                    sazonador, al mismo tiempo estaremos calentando la tortilla, le daremos vueltas
                                    a los camarones para que empiecen a cocinarse los camarones alrededor de un
                                    minuto o menos estarán listos los camarones, pondremos la tortilla en un plato
                                    luego los camarones en la tortilla, le pondremos guacamole y pico de gallo.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Pastor Tacos</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#pastortaco">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary" style="width: 200px;" data-toggle="modal"
                data-target="#pastortaco">Pastor Taco</button><label class="label">&nbsp;Guacamole & Mexican
                Salsa</label> --}}

            <div class="modal fade" id="pastortaco" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pastor Taco</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474866962" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Pondremos en la plancha de cucharada a cucharada y media de carne al pastor y al
                                    mismo tiempo estaremos calentando la tortilla. Alredor de 2 minutos o menos
                                    estará caliente la carne ya que este caliente la carne y la tortilla
                                    procederemos a poner la tortilla en un plato, en seguida la carne al pastor. Le
                                    pondremos guacamole y pico de gallo.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <hr>

    <h1>TORTAS</h1>
    <div class="row">
        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Steak Tortas</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#steaktorta">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#steaktorta">Steak Tortas</button><label class="label">&nbsp;Lettuce, Tomatoes, Onions,
                Avocado & T. Island</label> --}}

            <div class="modal fade" id="steaktorta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Steak Tortas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474868274" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Pastor Tortas</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#pastorta">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#pastorta">Pastor Tortas</button><label class="label">&nbsp;Lettuce, Tomatoes, Onions,
                Avocado & T. Island</label> --}}
                
            <div class="modal fade" id="pastorta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pastor Tortas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/469852215" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Carnitas Torta</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tortacarnitas">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#tortacarnitas">Carnitas Torta</button><label class="label">&nbsp;Lettuce, Tomatoes,
                Onions, Avocado & T. Island</label> --}}

            <div class="modal fade" id="tortacarnitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Carnitas Tortas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo11">
                                                                                                          <source src="files/recetas/carnitas torta regular.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469860469" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <ul>
                                    <li>Se asa las carnitas</li>
                                    <li>Se pone a calentar el pan cortado a la mitad</li>
                                    <li>Se coloca la carne en el pan</li>
                                    <li>Se le coloca en doble papel</li>
                                    <li>3 rebanadas de jitomate</li>
                                    <li>3 pedazos de cebolla</li>
                                    <li>3 rebanadas de aguacate</li>
                                    <li>Poca sal</li>
                                    <li>4oz de lechuga</li>
                                    <li>2oz de aderezo</li>
                                    <li>Se envuelve y se corta a la mitad</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-3 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Ham Tortas</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#jamontorta">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#jamontorta">Ham Tortas</button><label class="label">&nbsp;Lettuce, Tomatoes, Onions,
                Avocado & T. Island</label> --}}

            <div class="modal fade" id="jamontorta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ham Tortas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474868486" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <h1>QUESADILLAS</h1>
    <div class="row">
        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Steak Quesadiilas</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#quecasteak">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#quecasteak">Steak Quesadiilas</button> --}}

            <div class="modal fade" id="quecasteak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Steak Quesadillas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474864738" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <ul>
                                    <li>Se calienta la tortilla</li>
                                    <li>Se vierten 7oz de carne azada</li>
                                    <li>Se vierten a la tortilla 4oz de queso</li>
                                    <li>Se coloca el queso y la carne en la tortilla</li>
                                    <li>Se colocan 4oz de queso más encima de la carne</li>
                                    <li>Se deja calentar hasta que se derrita el queso y se dore la tortilla</li>
                                    <li>Se coloca en el plato 2oz de lechuga</li>
                                    <li>Se coloca en el plato 2oz de pico de gallo</li>
                                    <li>Se coloca en el plato 3oz de guacamole</li>
                                    <li>Se parte en 4 y se coloca en el plato</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Beans Cheese Quesadillas</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#quefrique">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#quefrique">Beans Cheese Quesadillas</button> --}}

            <div class="modal fade" id="quefrique" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Beans Cheese Quesadillas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474865057" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Cucharada de frijoles le pondremos 5 onzas de queso (142 gramos) y lo pasamos a
                                    la plancha alrededor de 2 minutos y medio, pondremos en un plato 4 onzas de
                                    lechuga (114 gramos) 3 de onzas de pico de gallo (85 gramos) le estaremos dando
                                    vueltas a las tortillas por 2 minutos en lo que se derrite el queso. Sacamos la
                                    quesadilla de la plancha cortamos la quesadilla en 4 partes, y la pones en el
                                    plato.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <h1>FRIES</h1>
    <div class="row">
        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Steak Fries</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#friesteak">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#friesteak">Steak Fries</button><label class="label">&nbsp;Beans, Cheese, Sour Cream,
                Guacamole & Mexican Salsa</label> --}}

            <div class="modal fade" id="friesteak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Steak Fries</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474866224" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <ul>
                                    <li>Se fríen 12oz de papas por 3min. Aprox.</li>
                                    <li>10oz de carne</li>
                                    <li>Se le agrega 4oz de queso</li>
                                    <li>1 cuchara llena de frijol</li>
                                    <li>2oz de guacamole</li>
                                    <li>2oz de crema</li>
                                    <li>Se le agrega la carne Un poco de pico de gallo y queso en cima</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Chicken Fries</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#friechick">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#friechick">Chicken Fries</button><label class="label">&nbsp;Beans, Cheese, Sour Cream,
                Guacamole & Mexican Salsa</label> --}}

            <div class="modal fade" id="friechick" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Chicken Fries</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo21">
                                                                                                          <source src="files/recetas/chicken fries f.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469862765" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <ul>
                                    <li>Se fríen 12oz de papas por 3min. Aprox.</li>
                                    <li>10oz de carne de pollo</li>
                                    <li>Se le agrega 4oz de queso</li>
                                    <li>1 cuchara llena de frijol</li>
                                    <li>2oz de guacamole</li>
                                    <li>2oz de crema</li>
                                    <li>Se agrega la carne de pollo a las papas ya fritas</li>
                                    <li>Un poco de pico de gallo y queso en cima</li>

                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <h1>NACHOS</h1>
    <div class="row">
        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Steak Nachos</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#nachosteak">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#nachosteak">Steak Nachos</button><label class="label">&nbsp;Beans, Cheese, Sour Cream,
                Guacamole & Mexican Salsa</label> --}}

            <div class="modal fade" id="nachosteak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Steak Nachos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474866528" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Agarramos un plato y le pondremos 13 onzas de chips (369 gramos) los ponemos a
                                    calentar por 30 segundos, sacamos los nachos de la freidora y dejamos que
                                    escurran un poco. Pondremos 8 onzas de carne (227 gramos) en la plancha para que
                                    se empiece a calentar. Ya que se escurrieron los nachos los pasaremos al plato y
                                    le pondremos 4 onzas de queso (113 gramo), una cucharada de frijol, una
                                    cucharada de guacamole y cucharada de crema. Ya que la carne este caliente las
                                    pondremos en los nachos le pondremos una cucharada de pico de gallo y una
                                    cucharada de queso.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <H1>WINGS & FINGERS</H1>
    <div class="row">
        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Chicken Wings</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#chickwings">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#chickwings">Chicken Wings</button> --}}

            <div class="modal fade" id="chickwings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Chicken Wings</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo23">
                                                                                                          <source src="files/recetas/chicken wings f.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469863073" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Chicken Fingers</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#fingers">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#fingers">Chicken Fingers</button> --}}

            <div class="modal fade" id="fingers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Chicken Fingers</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo24">
                                                                                                          <source src="files/recetas/chicken fingers f.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469862506" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <ul>
                                    <li>Se fríen 10oz de papas por 3min. Aprox</li>
                                    <li>2 Fingers se fríen por 4 min. Aprox.</li>
                                    <li>Se coloca en el plato papas ya fritas y los dos Fingers</li>
                                    <li>A aquí depende de cuantos Fingers piden la orden de 4 o 2</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <h1>SALADS</h1>
    <div class="row">
        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Chicken Salad</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#salad">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#salad">Chicken Salad</button><label class="label">&nbsp;Lettuce, Tomatoes, Spinach,
                Carrots, Cabbage, Tortilla Chips, Avocado</label> --}}

            <div class="modal fade" id="salad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Chicken Salad</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo25">
                                                                                                          <source src="files/recetas/ensalada de pollo f.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469864727" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Pondremos 8 onzas de pollo en la plancha (227 gramos) para que empiecen a
                                    calentar, pondremos 16 con de lechuga en nuestro plato (454 gramos) pondremos 2
                                    onzas de zanahoria rallada (57 gramos) 2 onzas de espinacas (57 gramos) 2 onzas
                                    de repollo morado ( 57 gramos) revolvemos toda la verdura. Pondremos 3 onzas de
                                    tortillas chips (85 gramos), 2 rebanadas de tomate, 2 rebanadas de aguacate y
                                    tenemos listo la ensalada y ya que el pollo este dorado lo agregaremos a nuestra
                                    ensalada.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <h1>BREAKFAST BURRITOS</h1>
    <div class="row">

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Bacon</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#baconburrito">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#baconburrito">Bacon</button> --}}

            <div class="modal fade" id="baconburrito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Bacon</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo26">
                                                                                                          <source src="files/recetas/breakfast chorizo jamon y tozino burritos.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469854143" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <ul>
                                    <li>4oz de tocino en cuadritos se ponen a freír</li>
                                    <li>Se fríen 3 min. Aprox. Las papas</li>
                                    <li>Se le ponen dos huevos alas papas ya fritas y un poco de sal</li>
                                    <li>Se coloca en una tortilla de harina las papas y el tocino frito</li>
                                    <li>Se le agrega 4oz de queso</li>
                                    <li>4oz de pico de gallo</li>
                                    <li>Se enreda y se envuelve con papel</li>

                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Ham</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#hamburrito">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#hamburrito">Ham</button> --}}
                
            <div class="modal fade" id="hamburrito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ham</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/469854143" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <ul>
                                    <li>2 rebanadas de jamón partidas en cuadritos</li>
                                    <li>Se fríen 3 min. Aprox. Las papas</li>
                                    <li>Se le ponen dos huevos alas papas ya fritas y un poco de sal</li>
                                    <li>Se coloca en una tortilla de harina las papas y el jamón frito</li>
                                    <li>Se le agrega 4oz de queso</li>
                                    <li>4oz de pico de gallo</li>
                                    <li>Se enreda y se envuelve con papel</li>

                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Chorizo</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#choriburr">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#choriburr">Chorizo</button> --}}

            <div class="modal fade" id="choriburr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Chorizo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/469854143" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <ul>
                                    <li>4oz de Chorizo se pone a freír</li>
                                    <li>Se fríen 3 min. Aprox. Las papas</li>
                                    <li>Se le ponen dos huevos alas papas ya fritas y un poco de sal</li>
                                    <li>Se coloca en una tortilla de harina las papas y el Chorizo frito</li>
                                    <li>Se le agrega 4oz de queso</li>
                                    <li>4oz de pico de gallo</li>
                                    <li>Se enreda y se envuelve con papel</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Sausage</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#burrosau">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#burrosau">Sausage</button> --}}

            <div class="modal fade" id="burrosau" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sausage</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo29">
                                                                                                          <source src="files/recetas/breakfast burrito sausage f.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469853475" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <ul>
                                    <li>3 salchichas se ponen a freír</li>
                                    <li>Se fríen 3 min. Aprox. Las papas</li>
                                    <li>Se le ponen dos huevos alas papas ya fritas y un poco de sal</li>
                                    <li>Se coloca en una tortilla de harina las papas y las salchichas fritas
                                        partidas</li>
                                    <li>Se le agrega 4oz de queso</li>
                                    <li>4oz de pico de gallo</li>
                                    <li>Se enreda y se envuelve con papel</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <h1>BURRITOS</h1>
    <div class="row">
        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Steak</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#burrosteak">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#burrosteak">Steak</button><label class="label">&nbsp;with Guacamole & Pico de
                Gallo</label> --}}

            <div class="modal fade" id="burrosteak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Steak</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo30">
                                                                                                          <source src="files/recetas/burrito de carne asada f.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469857269" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Carnitas</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#burrocarnitas">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#burrocarnitas">Carnitas</button><label class="label">&nbsp;with Guacamole & Pico de
                Gallo</label> --}}

            <div class="modal fade" id="burrocarnitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Carnitas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo31">
                                                                                                          <source src="files/recetas/carnitas burrito f.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469860435" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Pondremos a calentar 4 onzas de carnitas (114 gramos) y ponemos a calentar la
                                    tortilla al mismo tiempo. Ya que la carne y la tortilla este caliente,
                                    agregaremos la carne a la tortilla, le pondremos 2 cucharadas de guacamoles, 4
                                    onzas de pico de gallo (114 gramos) y envolvemos en la tortilla y envolvemos el
                                    burrito en papel.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Pastor</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#burropsator">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#burropsator">Pastor</button><label class="label">&nbsp;with Guacamole & Pico de
                Gallo</label> --}}
                
            <div class="modal fade" id="burropsator" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pastor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo32">
                                                                                                          <source src="files/recetas/burrito al pastor f.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469856857" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Pondremos a calentar 4 onzas de pastor (114 gramos) y ponemos a calentar la
                                    tortilla al mismo tiempo. Ya que la carne y la tortilla este caliente,
                                    agregaremos el pastor a la tortilla, le pondremos 4 onzas de pico de gallo (114
                                    gramos) y 3 de onzas(85 gramos) de guacamole y envolvemos en la tortilla y
                                    envolvemos el burrito en papel.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Fish</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#burrofish">
                        Go somewhere
                    </a>
                </div>
            </div>
            
            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#burrofish">Fish</button><label class="label">&nbsp;with Lettuce, Pico de Gallo &
                Ranch</label> --}}
            <div class="modal fade" id="burrofish" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Fish</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo33">
                                                                                                          <source src="files/recetas/burrito de pescado f.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469857468" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Dos pedazos de pescado, Los vamos a freír por dos minutos y pondremos a calentar
                                    la tortilla al mismo tiempo. Sacamos el pescado de la freidora lo dejamos
                                    escurrir la grasa. Le pondremos los dos pedazos de pescado a la tortilla,
                                    pondremos 3 onzas de lechuga (85 gramos) 4 onzas de pico de gallo (114 gramos) y
                                    aderezo ranch y enredamos el burrito.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">California</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#burrocalifornia">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#burrocalifornia">California</button><label class="label">&nbsp;with Steak Potatoes,
                Pico de Gallo & Cheese</label> --}}

            <div class="modal fade" id="burrocalifornia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">California</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo34">
                                                                                                          <source src="files/recetas/california burrito f.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469858480" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Pondremos a freír 6 a 8 onzas de papas (170 gramos a 227 gramos) aproximadamente
                                    4 minutos y pondremos a calentar en la plancha 4 onzas de carne (114 gramos). En
                                    un plato pondremos 4 onzas de lechuga (114 gramos) 3 a 4 onzas de pico de gallo
                                    (85 a 114 gramos). Ya que este bien cocida la papa las pondremos con la carne.
                                    Le pondremos un poco de sal a las papas, y vamos a revolver. Pondremos a
                                    calentar la tortilla, ya cuando la tortilla este lista, pondremos todo en la
                                    tortilla, le pondremos 4 onzas de queso (114 gramos) y enrollamos el burrito.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Beans & Cheese</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#burrobc">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#burrobc">Beans & Cheese</button> --}}

            <div class="modal fade" id="burrobc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Beans & Cheese</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474866528" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Pondremos a calentar la tortilla, ya que este caliente le pondremos 4 onzas de
                                    frijoles (114 gramos) y después le pondremos 4 onzas de queso (114 gramos) y
                                    enrollamos el burrito
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <hr>

    <h1>WET BURRITOS</h1>
    <div class="row">
        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Steak</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#wbs">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#wbs">Steak</button> --}}

            <div class="modal fade" id="wbs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Steak</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/469873626" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Pondremos a calentar 4 onzas de carne (114 gramos) y ponemos a calentar la
                                    tortilla al mismo tiempo. Ya que la carne y la tortilla este caliente,
                                    agregaremos la carne a la tortilla, le pondremos 2 cucharadas de guacamole una
                                    cucharada de pico de gallo, envolvemos en la tortilla y envolvemos el burrito en
                                    papel.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Shrimp</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bws">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#bws">Shrimp</button> --}}
            
            <div class="modal fade" id="bws" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Shrimp</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474865856" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Pondremos en un plato 4 onzas de lechugas (114 gramos) 4 onzas de pico de gallo
                                    (114 gramos) y pondremos 15 camarones en la plancha con margarina y sazonador,
                                    al mismo tiempo esteremos calentado la tortilla. Pondremos los camarones en la
                                    tortilla, le pondremos una cucharada de arroz 4 onzas (114 gramos) 4 onzas de
                                    frijol (114 gramos) envolvemos el frijol, le pondremos 6 onzas de salsa (171
                                    gramo) y 2 onzas de queso encima del burrito envuelto (57 gramos).
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Fish</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bwf">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#bwf">Fish</button> --}}

            <div class="modal fade" id="bwf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Fish</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo38">
                                                                                                          <source src="files/recetas/fish wet burrito f.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469865379" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Pastor</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bwp">
                        Go somewhere
                    </a>
                </div>
            </div>
            
            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#bwp">Pastor</button> --}}

            <div class="modal fade" id="bwp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pastor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474864332" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Pondremos 2 tortillas a la freidora aproximadamente 12 segundos para que se
                                    calienten y la tortilla se un poco flexible, pondremos 4 onzas de lechuga, 4 de
                                    pico de gallo. Pondremos 8 onzas de carne al pastor en la plancha alrededor de 1
                                    minutos y medio, y ponemos la carne en la tortilla. Le pondremos 4 onzas de
                                    frijol (114 gramos) y 4 onzas de frijol (114 gramos) y le pondremos 4 onzas de
                                    salsa enchiladas (114 gramos) y 2 onzas de queso encima (57 gramos)
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Beans & Cheese</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bwbc">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#bwbc">Beans & Cheese</button> --}}
            <div class="modal fade" id="bwbc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Beans & Cheese</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo40">
                                                                                                          <source src="files/recetas/carne ala parrilla y wet burrito bean chesse.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469859856" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Pondremos a calentar la tortilla una ves que este caliente, pondremos 8 onzas de
                                    frijol (227 gramos) le pondremos 4 onzas de queso (114 gramos) y envolvemos el
                                    burrito, en un plato pondremos 4 onzas de lechugas, 4 onzas de pico de gallo,
                                    pondremos el burrito n el plato y le pondremos 6 onzas de salsa (171 gramos) y
                                    le pondremos 2 onzas de queso encima (57gramos).
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Chile Relleno</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#chilerelleno">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#chilerelleno">Chile Relleno</button> --}}

            <div class="modal fade" id="chilerelleno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Chile Relleno</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo41">
                                                                                                          <source src="files/recetas/chile relleno wet burrito f.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469863335" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Pondremos a calentar el chile relleno en la plancha y le quitaremos el tallo del
                                    chile relleno. Vamos a cortar el chile relleno a la mitad para que se caliente,
                                    pondremos a calentar la tortilla y cuando este caliente la tortilla pondremos el
                                    chile relleno en la tortilla. Le agregaremos 4 onzas de frijol (114 gramos) 4
                                    onzas de arroz (114 gramos) envolvemos el burrito y lo pondremos en el plato.
                                    Agregaremos 4 onzas de lechuga (114 gramos), 4 onzas de pico de gallo (114
                                    gramos) y le pondremos 6 onzas de salsa al burrito (170 gramos) y 2 onzas de
                                    queso encima ( 57 gramos)
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <hr>

    <h1>COMBOS</h1>
    <div class="row">
        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Steak Combo</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#cm1">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#cm1">1. Steak Combo</button> --}}

            <div class="modal fade" id="cm1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">1. Steak Combo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474865992" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <ul>
                                    <li>8oz de Trozos largos de carne a la parrilla</li>
                                    <li>En una charola</li>
                                    <li>Una cucharada de arroz</li>
                                    <li>Una cucharada de frijol</li>
                                    <li>4oz de lechuga</li>
                                    <li>1 rodaja de jitomate</li>
                                    <li>2 rebanadas de aguacate</li>
                                    <li>Poco queso encima de los frijoles</li>
                                    <li>Tortillas al gusto de harina 1 de maíz 4 Tortillas</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Chimichanga Any Meat</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#cm8">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#cm8">8. Chimichanga Any Meat</button> --}}

            <div class="modal fade" id="cm8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">8. Chimichanga Any Meat</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo43">
                                                                                                          <source src="files/recetas/chimichanga any meat f.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469863934" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <ul>
                                    <li>8oz de pollo dependiendo el ingrediente ya sea de carnitas,pastor,carne
                                        asada</li>
                                    <li>Se calienta 1 Tortilla de harina</li>
                                    <li>Se lo pone el ingrediente en la tortilla</li>
                                    <li>También Una cucharada de frijol</li>
                                    <li>Un puño de queso</li>
                                    <li>Enredar la tortilla que el dobles quede en la parte de abajo</li>
                                    <li>Se pone a freír con una canasta encima para que no se abra 2 min aprox.</li>
                                    <li>En una charola</li>
                                    <li>Una cucharada de arroz</li>
                                    <li>Una cucharada de frijol</li>
                                    <li>Y una cama de lechuga donde ira el burrito</li>
                                    <li>1 Cucharada guacamole y de crema encima del burro</li>
                                    <li>Lechuga y queso encima del burro</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Chicken Enchiladas C.</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#cm10">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#cm10">10. 2 Chicken Enchiladas C.</button> --}}

            <div class="modal fade" id="cm10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">10. 2 Chicken Enchiladas C.</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo44">
                                                                                                          <source src="files/recetas/chicken enchiladas.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469862098" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <ul>
                                    <li>3oz de carne de pollo para cada enchilada</li>
                                    <li>Se deja dorar un poco el pollo</li>
                                    <li>Se colocan dos tortillas en un plato</li>
                                    <li>Se agrega el pollo a las tortillas</li>
                                    <li>Se enrollan</li>
                                    <li>Una cucharada de arroz</li>
                                    <li>Una cucharada de frijol</li>
                                    <li>Se bañan en con 6oz salsa enchilada</li>
                                    <li>4oz de lechuga</li>
                                    <li>Poco queso encima</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Rolled Chicken Tacos</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#cm12">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#cm12">12. Rolled Chicken Tacos</button> --}}

            <div class="modal fade" id="cm12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">12. Rolled Chicken Tacos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/474865680" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <ul>
                                    <li>Se ponen 4 rollos de pollo a dorar por dos minutos</li>
                                    <li>En un plato se pone un poco de lechuga</li>
                                    <li>Una cucharada de arroz</li>
                                    <li>Una cucharada de frijol</li>
                                    <li>Encima de los rollos 2oz de guacamole 2oz de crema</li>
                                    <li>3oz de lechuga</li>
                                    <li>Poco queso encima</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Cheese Enchiladas C.</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#cm14">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#cm14">14. Cheese Enchiladas C.</button> --}}

            <div class="modal fade" id="cm14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">14. Cheese Enchiladas C.</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo46">
                                                                                                          <source src="files/recetas/cheese enchilasdas.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469861355" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <li>Se ponen a freír dos tortillas</li>
                                <li>Se ponen 4oz de queso a cada tortilla junto con una cucharada de salsa enchilada
                                    en el interior</li>
                                <li>Se enredan</li>
                                <li>Una cucharada de arroz</li>
                                <li>Una cucharada de frijol</li>
                                <li>Se bañan en con 6oz salsa enchilada</li>
                                <li>3oz de lechuga</li>
                                <li>Poco queso encima</li>
                                <li>Poco queso encima</li>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <hr>

    <h1>EXTRA TOPPING</h1>
    <div class="row">
        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Guacamole</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#guaca">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#guaca">Guacamole</button> --}}

            <div class="modal fade" id="guaca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Guacamole</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo47">
                                                                                                          <source src="files/recetas/aguacate y procedimiento de tortas f.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469852215" width="640" height="360"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>Moler 25 aguacates aproximadamente para tener 5 litros de guacamole
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <h1>DRINKS</h1>
    <div class="row">
        <div class="col-md-4 my-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/card.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Horchata</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#horchata">
                        Go somewhere
                    </a>
                </div>
            </div>

            {{-- <img src="{{ asset('img/logo_1.png') }}" class="img-fluid mb-3" alt="">
            <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" data-toggle="modal"
                data-target="#horchata">Horchata</button> --}}

            <div class="modal fade" id="horchata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Horchata</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <video width="320" height="240" controls id="iframeVideo48">
                                                                                                          <source src="files/recetas/aguadehorchata.mp4" type="video/mp4">
                                                                                                         </video> -->
                                <iframe src="https://player.vimeo.com/video/469852447" width="640" height="564"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h1>Descripción</h1>
                                <p>8 onzas de arroz remojar por 2 horas mínimo, ya que este remojado, lo vamos a
                                    vaciar en la licuadora, agregamos 3 y media onzas de vainilla (99 gramos) , una
                                    cucharada de canela molida y licuaremos todos estos ingredientes. Pondremos 2
                                    latas de leche evaporada para que no tenga tanto espesor, licuaremos de nuevo
                                    por 3 minutos, vaciaremos lo que licuamos en una jarra, agregaremos 38 onzas o
                                    dos cucharones y medio de azúcar (1077 gramos) lo revolvemos todo en la jarra.
                                    Todo este procedimientos será para 5 galones de agua de horchata (19 litros).
                                    Vaciaremos el liquido de la garra y lo pondremos en nuestro recipiente y lo
                                    llenaremos con agua.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

<?php
include 'header.php';
?>

<div class="container">
    <!--<div id="floating_button">
        <button type="button" class="btn btn-default btn-lg" id="dodaj_film" onclick="idiNaKarton()">Dodaj film</button>
    </div>-->

    <div class="row">

        <div class="col-md-6">
                <form class="form-horizontal" role="form">

                    <div class="col-md-6" id="naslov">
                        <h1>Pretraga fimova:</h1>
                    </div>

                    <div class="row">
                        <div id="flip" class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-3" for="naziv_filma">Naziv filma: </label>
                                <div class="col-md-7">
                                    <select class="js-example-basic-hide-search col-md-12">
                                    </select>
                                </div>

                                <div class="col-md-2">
                                      <button type="button" class="btn btn-default btn-sm" id="pretrazi">Pretraži</button>
                                </div>
                            </div>
                            <div id="napredna_pretraga">
                                Napredna pretraga <span class="glyphicon glyphicon-triangle-bottom glyphicon"></span>
                            </div>
                        </div>
                    </div> <!--osnovno-->

                    <div class="row">
                        <div id="sekcija1" class="col-md-12">
                            <p class="pasusi" id="pasusi1"> Osnovne informacije <span class="glyphicon glyphicon-triangle-bottom glyphicon"></span> </p>
                            <div class="row">
                            <div id="osnovno" class="col-md-12">
                                    <div class="row redovi_u_pretrazi">
                                                <label class="col-md-2" for="sel1">Godina proizvodnje:</label>
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                        <select class="js-example-data-array col-md-12" style="width: 100%">
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-md-2" for="predmet">Katedra:</label>
                                                <div class="col-md-4">
                                                    <select class="js-example-responsive col-md-12" style="width: 100%">
                                                    </select>
                                                </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2" for="sel1">Naziv vežbe:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2" for="predmet">Godina studija:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-responsive col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2" for="sel1">Profesor:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2" for="predmet">Predmet:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-responsive col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2" for="sel1">Trajanje:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2" for="predmet">Režiser:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-responsive col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2" for="sel1">Producent:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2" for="predmet">Scenarista:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-responsive col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2" for="sel1">Snimatelj:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2" for="predmet">Montažer:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-responsive col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2" for="sel1">Glumci:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2" for="predmet">Kompozitor:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-responsive col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2" for="sel1">Dizajner zvuka:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2" for="predmet">Snimatelj zvuka:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-responsive col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2" for="sel1">Scenograf:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2" for="predmet">Kostimograf:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-responsive col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2" for="sel1">Animacija:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2" for="predmet">Šminker:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-responsive col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2" for="sel1">Specijalni efekti:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- row-->

                                </div> <!--osnovno-->
                                </div>

                            <p class="pasusi" id="pasusi2"> Tehnička specifikacija<span class="glyphicon glyphicon-triangle-bottom glyphicon"></span> </p>
                            <div class="row">
                                <div id="tehnicka" class="col-md-12">
                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2" for="sel1">Osnovni format:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2" for="predmet">Filmski format:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-responsive col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2" for="sel1">Video format:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2" for="predmet">Televizijski standard:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-responsive col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2" for="sel1">Analiza slike:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2" for="predmet">Format sličice:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-responsive col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2" for="sel1">Sličice u sekundi:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2" for="predmet">Video nosač:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-responsive col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2" for="sel1">Vrsta fajla:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2" for="predmet">Zvuk:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-responsive col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2" for="sel1">Broj kanala:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2" for="predmet">Redukcija šuma:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-responsive col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                </div> <!--kraj sekcije2-->
                            </div> <!--kraj reda tehnickih spec-->



                        </div> <!--sekcija1-->
                    </div> <!--kraj row-a sekcija1-->

                </form>
        </div> <!--najveci div-->

        <div class="col-md-6" id="vrteska">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/ljuba.jpg" alt="Chania">
                    </div>

                    <div class="item">
                        <img src="img/ivan.jpg" alt="Chania">
                    </div>

                    <div class="item">
                        <img src="img/milica.jpg" alt="Flower">
                    </div>

                    <div class="item">
                        <img src="img/jelena.jpg" alt="Flower">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

    </div><!-- div red-->

</div> <!--container-->

<?php
include 'footer.php';
?>

<script src="js/index.js"></script>


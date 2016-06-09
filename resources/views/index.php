<?php
include 'header.php';
?>

<div class="container">

    <div class="row">

        <div class="col-md-6" id="levi_div">
            <form id="pretragaForma" role="form" method="post">


            <div class="naslov">
                        <h1>Pretraga fimova:</h1>
                    </div>

                    <div class="row">
                        <div id="flip" class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-3" for="naziv_filma">Naziv filma: </label>
                                <div class="col-md-9">
                                    <select class="js-example-data-array naziv_filma col-md-12" name="naziv_filma">
                                    </select>
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
                                                <label class="col-md-2">Godina proizvodnje:</label>
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                        <select class="js-example-data-array godina_proizvodnje col-md-12" name="godina_proizvodnje" style="width: 100%">
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-md-2">Katedra:</label>
                                                <div class="col-md-4">
                                                    <select class="js-example-data-array katedra col-md-12" name="katedra" style="width: 100%">
                                                    </select>
                                                </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Naziv vežbe:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array vezbe col-md-12" name="vezbe" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Godina studija:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array godina_studija col-md-12" name="godina_studija" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Profesor:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array profesor col-md-12"  name="profesor" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Predmet:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array predmet col-md-12" name="predmet" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Trajanje:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array trajanje col-md-12" name="trajanje" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Režiser:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array reziser col-md-12" name="reziser" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Producent:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array producenti col-md-12" name="producent" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Scenarista:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array col-md-12 scenaristi" name="scenarista" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Snimatelj:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array snimatelj col-md-12" name="snimatelj" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Montažer:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array montazer col-md-12" name="montazer" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Glumci:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array glumci col-md-12" name="glumci" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Kompozitor:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array kompozitori col-md-12" name="kompozitor" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Dizajner zvuka:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array dizajner_zvuka col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Snimatelj zvuka:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array snimatelj_zvuka col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Scenograf:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array scenograf col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Kostimograf:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array kostimograf col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Animacija:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array animacija col-md-12" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Šminker:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array sminker col-md-12" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Specijalni efekti:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array spec_efekti col-md-12" style="width: 100%">
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
                                        <label class="col-md-2">Osnovni format:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array osnovni_format col-md-12" name="osnovni_format" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Filmski format:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array filmski_format col-md-12" name="filmski_format" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Video format:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array video_format col-md-12" name="video_format" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Televizijski standard:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array tel_standard col-md-12" name="tel_standard" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Analiza slike:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array analiza_slike col-md-12" name="analiza_slike" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Format sličice:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array format_slike col-md-12" name="format_slike" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Sličice u sekundi:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array slicice_sekund col-md-12" name="slicice_sekund" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Video nosač:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array video_nosac col-md-12"  name="video_nosac" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Vrsta fajla:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array vrsta_fajla col-md-12" name="vrsta_fajla" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Zvuk:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array vrsta_zvuka col-md-12" name="vrsta_zvuka" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Broj kanala:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array broj_kanala col-md-12" name="broj_kanala" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Redukcija šuma:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array redukcija_suma col-md-12" name="redukcija_suma" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                </div> <!--kraj sekcije2-->
                            </div> <!--kraj reda tehnickih spec-->



                        </div> <!--sekcija1-->
                    </div> <!--kraj row-a sekcija1-->

                    <div class="row redovi_u_pretrazi"> <!--dugme-->
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-default btn-sm" id="pretrazi">Pretraži</button>
                        </div>
                        </div>

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

<script src="js/index.js"></script>

<?php
include 'footer.php';
?>


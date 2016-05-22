<?php
include 'header.php';
?>

<div class="container">
    <!--<div id="floating_button">
        <button type="button" class="btn btn-default btn-lg" id="dodaj_film" onclick="idiNaKarton()">Dodaj film</button>
    </div>-->

    <div class="row" id="navigation">
        <div class="col-md-8" id="naslov">
            <h1>Pretraga fimova:</h1>
        </div>
    </div><!-- div navigacija -->

    <div class="row">

        <div class="col-md-6">
                <form class="form-horizontal" role="form">

                    <div id="flip">
                        <div class="form-group">
                            <label class="col-md-1" for="naziv_filma">Naziv filma: </label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="naziv_filma" id="naziv_filma">
                            </div>

                            <div class="col-md-2">
                                  <button type="button" class="btn btn-default btn-md" id="pretrazi">Pretraži</button>
                            </div>
                        </div>
                        <div id="napredna_pretraga">
                            Napredna pretraga <span class="glyphicon glyphicon-triangle-bottom glyphicon"></span>
                        </div>

                    </div> <!--osnovno-->

                    <div id="sekcija1">
                        <p class="pasusi" id="pasusi"> Osnovne informacije <span class="glyphicon glyphicon-triangle-bottom glyphicon"></span> </p>
                        <div id="osnovno">
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label class="control-label col-md-6" for="godina">Godina proizvodnje:</label>
                                    <div class="col-md-6">
                                    <select class="form-control" id="sel1">
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-7">
                                    <label class="control-label col-md-3" for="katedra">Katedra:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="sel1">
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="col-md-3" for="sel1">Profesor:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="sel1">
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                        <label class="control-label col-md-3" for="predmet">Predmet:</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="sel1">
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                            </select>
                                        </div>
                                </div>
                             </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-2 for="naziv_vezbe">Naziv vežbe:</label>
                                    <div class="col-md-10">
                                        <select class="form-control" id="sel1">
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-2 for="naziv_vezbe">Naziv vežbe:</label>
                                    <div class="col-md-10">
                                        <select class="form-control" id="sel1">
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                        </select>
                                    </div>
                                </div>






                            </div>







                        </div>

                    </div> <!--sekcija1-->
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


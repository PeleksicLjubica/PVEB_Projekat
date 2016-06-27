<?php
include 'header.php';
?>


<div class="container" id ="pocetnaContainer">

        <div id="levi_div">
            <form id="pretragaForma">

            <div class="naslov">
                        <h1>Pretraga fimova:</h1>
            </div>

                <div class="row">
                    <div id="flip" class="col-md-12">
                        <div class="form-group row">
                            <label class="col-md-2" for="naziv_filma">Naziv filma: </label>

                            <div class="col-md-5">
                                <select class="js-example-data-array naziv_filma col-md-12" name="naziv_filma">
                                </select>
                            </div>

                            <div class="col-md-2">
                                <button type="button" class="btn btn-default btn-sm" id="pretrazi">Pretraži</button>
                            </div>

                            <div id="napredna_pretraga" class="col-md-3">
                                Napredna pretraga <span class="glyphicon glyphicon-triangle-bottom glyphicon"></span>
                            </div>

                        </div>
                    </div>

                </div> <!--osnovno-->

                    <div class="row">
                        <div id="sekcija1">
                            <div class="col-md-6">
                            <p class="pasusi1" id="pasusi1"> Osnovne informacije </p>
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
                                                    <select class="js-example-data-array dizajner_zvuka col-md-12" name="dizajner_zvuka" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Snimatelj zvuka:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array snimatelj_zvuka col-md-12" name="snimatelj_zvuka" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Scenograf:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array scenograf col-md-12" name="scenograf" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Kostimograf:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array kostimograf col-md-12" name="kostimograf" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Animacija:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array animacija col-md-12" name="animacija" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-md-2">Šminker:</label>
                                        <div class="col-md-4">
                                            <select class="js-example-data-array sminker col-md-12" name="sminker" style="width: 100%">
                                            </select>
                                        </div>

                                    </div><!-- row-->

                                    <div class="row redovi_u_pretrazi">
                                        <label class="col-md-2">Specijalni efekti:</label>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="js-example-data-array spec_efekti col-md-12" name="specijani_efekti" style="width: 100%">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- row-->

                                </div> <!--osnovno-->

                                </div>
                                </div>

                            <div class="col-md-6">
                            <p class="pasusi1" id="pasusi2"> Tehnička specifikacija </p>
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
                                    <div class="row redovi_u_pretrazi"> <!--dugme-->
                                        <div class="col-md-3 col-md-offset-9">
                                            <button type="button" class="btn btn-default btn-sm" id="pretrazi1">Pretrazi</button>
                                        </div>
                                    </div>

                                    </div>
                                </div> <!--kraj sekcije2-->
                            </div> <!--kraj reda tehnickih spec-->



                        </div> <!--sekcija1-->
                    </div> <!--kraj row-a sekcija1-->



                </form>
        </div> <!--levi najveci div-->


<div id="prikaz">
    <!--ako je nesto vratio-->

    <h3 class="pasusi1"> Rezultat pretrage: </h3>
    <div id="exampleGrid"> </div>

</div>

<div id="nema">
    <h3 style="margin-bottom: 50px;">Ne postoji film koji zadovoljava kriterijume pretrage. Pokušajte ponovo.</h3>
</div>




</div> <!--container-->

<script src="js/index.js"></script>

<?php
include 'footer.php';
?>


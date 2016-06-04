
<?php
include 'header.php';
?>


<div class="container">

    <form id="karton_filma" class="form-horizontal" method="post" enctype="multipart/form-data" action="karton">

    <div class="row">
        <div class="naslov">
            <h1>Karton filma</h1>
        </div>

        <h3 class="centriran_naslov">Osnovne informacije: </h3> <br/>

        <div class="col-md-6">

                <div class="form-group">
                    <label class="control-label col-md-2" for="naziv_filma">Naziv filma:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="naziv_filma" name="naziv_filma">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="naziv_vezbe">Naziv vežbe:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="naziv_vezbe" name="naziv_vezbe">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="reziser">Režiser:</label>
                    <div class="col-md-9">
                        <select class="js-example-data-array col-md-12 studenti" name="reziser"></select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="scenarista">Scenarista:</label>
                    <div class="col-md-9">
                        <select class="js-example-data-array col-md-12 studenti" name="scenarista"></select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="montazer">Montažer:</label>
                    <div class="col-md-9">
                        <select class="js-example-data-array col-md-12 studenti" name="montazer"></select>
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="dizajner_zvuka">Dizajner zvuka:</label>
                    <div class="col-md-9">
                        <select class="js-example-data-array col-md-12 studenti" name="dizajner_zvuka"></select>
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="snimatelj_zvuka">Snimatelj zvuka:</label>
                    <div class="col-md-9">
                        <select class="js-example-data-array col-md-12 studenti" name="snimatelj_zvuka"></select>
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="specijalni_efekti">Specijalni efekti:</label>
                    <div class="col-md-9">
                        <select class="js-example-data-array col-md-12 studenti" name="specijalni_efekti"></select>
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="animacija">Animacija:</label>
                    <div class="col-md-9">
                        <select class="js-example-data-array col-md-12 studenti" name="animacija"></select>
                    </div>

                </div>


            </div><!-- LEVO -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-md-2" for="godina">Godina proizvodnje:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="godina" name="godina">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="trajanje">Trajanje:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="trajanje" name="trajanje">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="producent">Producent:</label>
                    <div class="col-md-9">
                        <select class="js-example-data-array col-md-12 studenti" name="producent"></select>
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="snimatelj">Snimatelj:</label>
                    <div class="col-md-9">
                        <select class="js-example-data-array col-md-12 studenti" name="snimatelj"></select>
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="kompozitor">Kompozitor:</label>
                    <div class="col-md-9">
                        <select class="js-example-data-array col-md-12 studenti" name="kompozitor"></select>
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="scenograf">Scenograf:</label>
                    <div class="col-md-9">
                        <select class="js-example-data-array col-md-12 studenti" name="scenograf"></select>
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="kostimograf">Kostimograf:</label>
                    <div class="col-md-9">
                        <select class="js-example-data-array col-md-12 studenti" name="kostimograf"></select>
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="sminker">Šminker:</label>
                    <div class="col-md-9">
                        <select class="js-example-data-array col-md-12 studenti" name="sminker"></select>
                    </div>

                </div>
                <div class="form-group">
                    <div class = "form-horizontal">
                        <label class="control-label col-md-2" for="nagrade">Nagrade:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="nagrade" name="nagrade">
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <div class = "form-horizontal">
                        <label class="control-label col-md-2" for="glumci">Glumci:</label>
                        <div class="col-md-9">
                            <select class="js-example-data-array col-md-12 studenti" name="glumci"></select>
                        </div>


                    </div>
                </div>

            </div><!-- DESNO -->


        <!--

         -->
    </div> <!--kraj 1. row-a-->

    <div class="row">

    <div class="col-md-6">

        <div class="form-group">
            <label class="control-label col-md-2" for="arhivska_muzika">Arhivska muzika:</label>
            <div class="col-md-9">
                <textarea rows="5" cols="5" class="form-control" id="arhivska_muzika" name="arhivska_muzika"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="sinopsis"> Sinopsis: </label>
            <div class="col-md-9">
                <textarea rows="7" cols="5" class="form-control" id="sinopsis" name="sinopsis"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="bio_rezisera"> Kratka biografija rezisera: </label>
            <div class="col-md-9">
                <textarea rows="7" cols="5" class="form-control" id="bio_rezisera" name="bio_rezisera"></textarea>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-md-2" for="napomene"> Napomene: </label>
            <div class="col-md-9">
                <textarea rows="7" cols="5" class="form-control" id="napomene" name="napomene"></textarea>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-md-2" for="dodatno1"> Uz karton filma predajem i sledeće: </label>
            <div class="col-md-10">

                <div class="row">
                    <div class="checkbox col-md-4">
                        <label><input type="checkbox" value="" id="dodatno1" name="dodatno1"> DVD </label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="fileToUpload1" id="fileToUpload1">
                    </div>
                </div>

                <div class="row">
                    <div class="checkbox col-md-4">
                        <label><input type="checkbox" value="" id="dodatno2" name="dodatno2"> Blu-ray </label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="fileToUpload2" id="fileToUpload2">
                    </div>
                </div>

                <div class="row">
                    <div class="checkbox col-md-4">
                        <label><input type="checkbox" value="" id="dodatno3"  name="dodatno3"> fajl </label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="fileToUpload3" id="fileToUpload3">
                    </div>
                </div>

                <div class="row">
                    <div class="checkbox col-md-4">
                        <label><input type="checkbox" value=""  id="dodatno4" name="dodatno4"> rolnu filma </label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="fileToUpload4" id="fileToUpload4">
                    </div>
                </div>

                <div class="row">
                    <div class="checkbox col-md-4">
                        <label><input type="checkbox" value="" id="dodatno5" name="dodatno5"> verziju sa i bez engleskog titla </label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="fileToUpload5" id="fileToUpload5">
                    </div>
                </div>

                <div class="row">
                    <div class="checkbox col-md-4">
                        <label><input type="checkbox" value="" id="dodatno6" name="dodatno6"> srpsku i englesku dijalog listu </label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="fileToUpload6" id="fileToUpload6">
                    </div>
                </div>

                <div class="row">
                    <div class="checkbox col-md-4">
                        <label><input type="checkbox" value="" id="dodatno7" name="dodatno7"> fotografiju student (jpg - 300 dpi) </label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="fileToUpload7" id="fileToUpload7">
                    </div>
                </div>


                <div class="row">
                    <div class="checkbox col-md-4">
                        <label><input type="checkbox" value="" id="dodatno8" name="dodatno8"> fotografije iz filma (3 komada) </label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="fileToUpload8" id="fileToUpload8">
                    </div>
                </div>

            </div>
        </div>

    </div> <!--kraj prvog diva-->

    <div class="col-md-6">

        <h3 class="centriran_naslov">Tehnička specifikacija: </h3> <br/>

        <div class="form-group">
            <label class="control-label col-md-2" for="osnovni_format"> Osnovni format: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12 osnovni_format" name="osnovni_format">
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="filmski_format"> Filmski format: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12 filmski_format" name="filmski_format">
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="video_format"> Video format: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12 video_format" name="video_format">
                </select>
            </div>
        </div>



        <div class="form-group">
            <label class="control-label col-md-2" for="tel_standard"> Televizijski standard: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12 tel_standard" name="tel_standard">
                </select>
            </div>
        </div>



        <div class="form-group">
            <label class="control-label col-md-2" for="analiza_slike"> Analiza slike: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12 analiza_slike" name="analiza_slike">
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="format_slike"> Format sličice: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12 format_slike" name="format_slike">
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="slicice_sekund"> Sličice u sekundi: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12 slicice_sekund" name="slicice_sekund">
                </select>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-md-2" for="video_nosac"> Video nosač: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12 video_nosac" name="video_nosac">
                </select>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-md-2" for="vrsta_fajla"> Vrsta fajla: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12 vrsta_fajla" name="vrsta_fajla">
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="vrsta_zvukaS"> Zvuka: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12 vrsta_zvuka" name="vrsta_zvuka">
                </select>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-md-2" for="broj_kanala"> Broj kanala: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12 broj_kanala" name="broj_kanala">
                </select>
            </div>
        </div>



        <div class="form-group">
            <label class="control-label col-md-2" for="redukcija_suma"> Redukcija šuma: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12 redukcija_suma" name="redukcija_suma">
                </select>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-md-2" for="varijacije_zvuka"> Varijacije zvuka: </label>
            <div class="col-md-9">
                <textarea rows="5" cols="5" class="form-control" id="varijacije_zvuka" name="varijacije_zvuka"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="arhivska_muzika"> Napomene: </label>
            <div class="col-md-9">
                <textarea rows="5" cols="5" class="form-control" id="arhivska_muzika" name="arhivska_muzika"></textarea>
            </div>
        </div>

        <div id="dugme_potvrdi">
        <button type="submit" class="btn btn-default btn-md col-md-offset-9" id="forma_potvrdi" name="forma_potvrdi">
            Potvrdi
        </button>
        </div>

    </div> <!--kraj drugog diva-->



    </div> <!--kraj 2. row-a -->


    </form>

</div> <!--kraj container-a-->

<script src="js/karton.js"></script>


<?php
include 'footer.php';
?>
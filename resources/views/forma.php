
<?php
include 'header.php';
?>


<div class="container">

    <form id="karton_filma" class="form-horizontal" method="post" enctype="multipart/form-data" action="">

    <div class="row">
        <div class="naslov">
            <h1>Karton filma</h1>
        </div>

        <h3 class="centriran_naslov">Osnovne informacije: </h3> <br/>

        <div class="col-md-6">

                <div class="form-group">
                    <label class="control-label col-md-2" for="naziv">Naziv filma:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="naziv" name="naziv">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="naziv_vezbe">Naziv vežbe:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="naziv_vezbe">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="reziser">Režiser:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="reziser">
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-default" (click)="onClick()">+</button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="scenarista">Scenarista:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="scenarista">
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-default" (click)="onClick()">+</button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="montazer">Montažer:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="montazer">
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-default" (click)="onClick()">+</button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="dizajner_zvuka">Dizajner zvuka:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="dizajner_zvuka">
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-default" (click)="onClick()">+</button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="snimatelj_zvuka">Snimatelj zvuka:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="snimatelj_zvuka">
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-default" (click)="onClick()">+</button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="specijalni_efekti">Specijalni efekti:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="specijalni_efekti">
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-default" (click)="onClick()">+</button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="animacija">Animacija:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="animacija">
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-default" (click)="onClick()">+</button>
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
                        <input type="text" class="form-control" id="producent">
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-default" (click)="onClick()">+</button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="snimatelj">Snimatelj:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="snimatelj">
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-default" (click)="onClick()">+</button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="kompozitor">Kompozitor:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="kompozitor">
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-default" (click)="onClick()">+</button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="scenograf">Scenograf:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="scenograf">
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-default" (click)="onClick()">+</button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="kostimograf">Kostimograf:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="kostimograf">
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-default" (click)="onClick()">+</button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="sminker">Šminker:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="sminker">
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-default" (click)="onClick()">+</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class = "form-horizontal">
                        <label class="control-label col-md-2" for="nagrade">Nagrade:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="nagrade">
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-default" (click)="onClick()">+</button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class = "form-horizontal">
                        <label class="control-label col-md-2" for="glumci">Glumci:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="glumci">
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-default" (click)="onClick()">+</button>
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
                <textarea rows="5" cols="5" class="form-control" id="arhivska_muzika"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="sinopsis">Sinopsis:</label>
            <div class="col-md-9">
                <textarea rows="7" cols="5" class="form-control" id="sinopsis"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="bio_rezisera">Kratka biografija rezisera:</label>
            <div class="col-md-9">
                <textarea rows="7" cols="5" class="form-control" id="bio_rezisera"></textarea>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-md-2" for="napomene">Napomene:</label>
            <div class="col-md-9">
                <textarea rows="7" cols="5" class="form-control" id="napomene"></textarea>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-md-2" for="dodatno1">Uz karton filma predajem i sledeće: </label>
            <div class="col-md-10">

                <div class="row">
                    <div class="checkbox col-md-4">
                        <label><input type="checkbox" value="" id="dodatno1">DVD</label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>

                <div class="row">
                    <div class="checkbox col-md-4">
                        <label><input type="checkbox" value="" id="dodatno1">Blu-ray</label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>

                <div class="row">
                    <div class="checkbox col-md-4">
                        <label><input type="checkbox" value="" id="dodatno1">fajl</label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>

                <div class="row">
                    <div class="checkbox col-md-4">
                        <label><input type="checkbox" value="" id="dodatno1">rolnu filma</label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>

                <div class="row">
                    <div class="checkbox col-md-4">
                        <label><input type="checkbox" value="" id="dodatno1">verziju sa i bez engleskog titla</label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>

                <div class="row">
                    <div class="checkbox col-md-4">
                        <label><input type="checkbox" value="" id="dodatno1">srpsku i englesku dijalog listu</label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>

                <div class="row">
                    <div class="checkbox col-md-4">
                        <label><input type="checkbox" value="" id="dodatno1">fotografiju student (jpg - 300 dpi)</label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>


                <div class="row">
                    <div class="checkbox col-md-4">
                        <label><input type="checkbox" value="" id="dodatno1">fotografije iz filma (3 komada)</label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>

            </div>
        </div>

    </div> <!--kraj prvog diva-->

    <div class="col-md-6">

        <h3 class="centriran_naslov">Tehnička specifikacija: </h3> <br/>


        <div class="form-group">
            <label class="control-label col-md-2" for="scenarista"> Osnovni format: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12">
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="scenarista">   Filmski format: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12">
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="scenarista">  Video format: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12">
                </select>
            </div>
        </div>



        <div class="form-group">
            <label class="control-label col-md-2" for="scenarista"> Televizijski standard: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12">
                </select>
            </div>
        </div>



        <div class="form-group">
            <label class="control-label col-md-2" for="scenarista"> Analiza slike: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12">
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="scenarista"> Format sličice: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12">
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="scenarista"> Sličice u sekundi: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12">
                </select>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-md-2" for="scenarista">   Video nosač:  </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12">
                </select>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-md-2" for="scenarista">  Vrsta fajla: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12">
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="scenarista"> Vrsta zvuka: </label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12">
                </select>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-md-2" for="scenarista"> Broj kanala:</label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12">
                </select>
            </div>
        </div>



        <div class="form-group">
            <label class="control-label col-md-2" for="scenarista">Redukcija šuma:</label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12">
                </select>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-md-2" for="scenarista">Varijacije zvuka:</label>
            <div class="col-md-9">
                <select class="js-example-data-array col-md-12">
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="arhivska_muzika">Napomene:</label>
            <div class="col-md-9">
                <textarea rows="5" cols="5" class="form-control" id="arhivska_muzika"></textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-default btn-md col-md-offset-9" id="forma_potvrdi">Potvrdi</button>





    </div> <!--kraj drugog diva-->



    </div> <!--kraj 2. row-a -->


    </form>

</div> <!--kraj container-a-->

<script src="js/karton.js"></script>


<?php
include 'footer.php';
?>
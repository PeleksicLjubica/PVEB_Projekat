<?php
include 'header.php';
?>


<div class="container">

    <div class="row" id="proba">
        <div class="col-md-4"><img src="img/movie.jpg" width="300px" height="300px"></div>

        <div class="col-md-4">
            <label id="naziv_filma1"> OVO JE NAZIV </label>
            <p>Godina proizvodnje: <label id="godina_proizvodnje"> 2006 </label> </p>
            <p>Trajanje: <label id="trajanje"> 12:12:12 </label> </p>
            <p>Katedra: <label id="katedra"> rezija </label> </p>
            <p>Profesor: <label id="profesor"> Andjelka </label> </p>
            <p>Godina studija: <label id="godina_studija"> 2 </label></p>
            <p>Naziv vezbe: <label id="naziv_vezbe"> vezba1 </label> </p>
            <p>Predmet: <label id="predmet"> bla </label> </p>

        </div>



        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" id="oi" class="btn btn-default btn-block" data-toggle="collapse" data-target="#osn_informacije">
                       Detalji
                    </button>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <button type="button" id="pusti_film" class="btn btn-default btn-block" data-toggle="collapse" data-target="#prikaz_filma">
                        Prikaz filma
                    </button>
                </div>
            </div>


        </div>
    </div>

    <div class="row">

        <div class="row" id="opcije">

            <div class="col-md-6">
            <div class="collapse" id="osn_informacije">
                <h3 id="oi_naslov"> Osnovne informacije:</h3>
                        <div class="row">

                            <div class="col-md-12">

                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <td>Režiser:</td>
                                        <td>Mika</td>
                                    </tr>
                                    <tr>
                                        <td>Producent</td>
                                        <td>Pera</td>
                                    </tr>
                                    <tr>
                                        <td>Scenarista</td>
                                        <td>Mika</td>
                                    </tr>
                                    <tr>
                                        <td>Snimatelj</td>
                                        <td>Mika</td>
                                    </tr>
                                    <tr>
                                        <td>Monatažer</td>
                                        <td>Mika</td>
                                    </tr>
                                    <tr>
                                        <td>Glumac</td>
                                        <td>Mika</td>
                                    </tr>
                                    <tr>
                                        <td>Kompozitor</td>
                                        <td>Mika</td>
                                    </tr>
                                    <tr>
                                        <td>Dizajener zvuka</td>
                                        <td>Mika</td>
                                    </tr>
                                    <tr>
                                        <td>Snmatelj zvuka</td>
                                        <td>Mika</td>
                                    </tr>
                                    <tr>
                                        <td>Scenograf</td>
                                        <td>Mika</td>
                                    </tr>
                                    <tr>
                                        <td>Kostimograf</td>
                                        <td>Mika</td>
                                    </tr>
                                    <tr>
                                        <td>Animacija</td>
                                        <td>Mika</td>
                                    </tr>
                                    <tr>
                                        <td>Sminker</td>
                                        <td>Mika</td>
                                    </tr>
                                    <tr>
                                        <td>Specijalni efekti</td>
                                        <td>Mika</td>
                                    </tr>
                                    </tbody>
                                </table>


                                <h3 id="ts_naslov"> Tehnicka specifikacija:</h3>

                                <div class="row" >
                                    <div class="col-md-6">
                                        <p>Osnovni format: <label id="osnovni_format"> VIDEO </label> </p>
                                        <p>Video format: <label id="video_format"> rezija </label> </p>
                                        <p>Analiza slike: <label id="analiza_slike"> rezija </label> </p>
                                        <p>Format sličice: <label id="format_slicice"> rezija </label> </p>
                                        <p>Katedra: <label id="katedra"> rezija </label> </p>
                                        <p>Video nosač: <label id="video_nosac"> rezija </label> </p>
                                        <p>Zvuk: <label id="zvuk"> rezija </label> </p>
                                    </div>

                                    <div class="col-md-6">
                                        <p>Filmski format: <label id="filmski_format"> rezija </label> </p>
                                        <p>Televizijski standard: <label id="televizijski_standard"> rezija </label> </p>
                                        <p>Sličiceu sekundi: <label id="slicice_u_sekundi"> rezija </label> </p>
                                        <p>Vrsta fajla: <label id="vrsta_fajla"> rezija </label> </p>
                                        <p>Broj kanala: <label id="broj_kanala"> rezija </label> </p>
                                        <p>Redukcija šuma: <label id="redukcija_suma"> rezija </label> </p>

                                    </div>
                                </div>

                            </div>


                        </div>
            </div>
            </div>


            <div class="col-md-6 collapse" id="prikaz_filma">
                <video id="video1" width="600" controls>
                    <source src="filmovi/TOM.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
            </div>

        </div>


    </div>

</div>




<?php
include 'footer.php';
?>


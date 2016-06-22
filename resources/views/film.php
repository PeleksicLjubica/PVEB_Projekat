<?php
include 'header.php';
?>

<div class="container">

    <div class="row" id="proba">
        <div class="col-md-4"><img src="img/movie.jpg" width="300px" height="300px"></div>

        <div class="col-md-4">
            <label id="naziv_filma"><?php echo $film->informacije[0]->naziv_filma ?></label>
            <p>Godina proizvodnje: <label id="godina_proizvodnje"> <?php echo $film->informacije[0]->godina_proizvodnje ?> </label> </p>
            <p>Trajanje: <label id="trajanje"> <?php echo $film->informacije[0]->trajanje ?> </label> </p>
            <p>Katedra: <label id="katedra"> rezija </label> </p>
            <p>Profesor: <label id="profesor"> Andjelka </label> </p>
            <p>Godina studija: <label id="godina_studija"> 2 </label></p>
            <p>Naziv vezbe: <label id="naziv_vezbe"> <?php echo $film->vezba[0]->naziv ?> </label> </p>
            <p>Predmet: <label id="predmet"> <?php echo $film->predmet[0]->naziv ?> </label> </p>

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
                                        <td>
                                            <ul>
                                                <?php
                                                    foreach ($film->reziseri as $reziser) {
                                                        echo '<li>' . $reziser->ime_prezime . ' ' . $reziser->indeks . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Producent</td>
                                        <td>
                                            <ul>
                                                <?php
                                                    foreach ($film->producenti as $producent) {
                                                        echo '<li>' . $producent->ime_prezime . ' ' . $producent->indeks . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Scenarista</td>
                                        <td>
                                            <ul>
                                                <?php
                                                    foreach ($film->scenaristi as $scenarista) {
                                                        echo '<li>' . $scenarista->ime_prezime . ' ' . $scenarista->indeks . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Snimatelj</td>
                                        <td>
                                            <ul>
                                                <?php
                                                    foreach ($film->snimatelji as $snimatelj) {
                                                        echo '<li>' . $snimatelj->ime_prezime . ' ' . $snimatelj->indeks . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Monatažer</td>
                                        <td>
                                            <ul>
                                                <?php
                                                    foreach ($film->montazeri as $montazer) {
                                                        echo '<li>' . $montazer->ime_prezime . ' ' . $montazer->indeks . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Glumac</td>
                                        <td>
                                            <ul>
                                                <?php
                                                    foreach ($film->glumci as $glumac) {
                                                        echo '<li>' . $glumac->ime_prezime . '</li>';
                                                    }
                                                    foreach ($film->glumci_studenti as $glumci_studenti) {
                                                        echo '<li>' . $glumci_studenti->ime_prezime . ' ' . $glumci_studenti->indeks . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kompozitor</td>
                                        <td>
                                            <ul>
                                                <?php
                                                    foreach ($film->kompozitori as $kompozitor) {
                                                        echo '<li>' . $kompozitor->ime_prezime . '</li>';
                                                    }
                                                    foreach ($film->kompozitori_studenti as $kompozitor_student) {
                                                        echo '<li>' . $kompozitor_student->ime_prezime . ' ' . $kompozitor_student->indeks . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dizajner zvuka</td>
                                        <td>
                                            <ul>
                                                <?php
                                                    foreach ($film->dizajneri_zvuka as $dizajner_zvuka) {
                                                        echo '<li>' . $dizajner_zvuka->ime_prezime . '</li>';
                                                    }
                                                    foreach ($film->dizajneri_zvuka_studenti as $dizajner_zvuka_student) {
                                                        echo '<li>' . $dizajner_zvuka_student->ime_prezime . ' ' . $dizajner_zvuka_student->indeks . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Snimatelj zvuka</td>
                                        <td>
                                            <ul>
                                                <?php
                                                    foreach ($film->snimatelji_zvuka as $snimatelj_zvuka) {
                                                        echo '<li>' . $snimatelj_zvuka->ime_prezime . '</li>';
                                                    }
                                                    foreach ($film->snimatelji_zvuka_studenti as $snimatelj_zvuka_student) {
                                                        echo '<li>' . $snimatelj_zvuka_student->ime_prezime . ' ' . $snimatelj_zvuka_student->indeks . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Scenograf</td>
                                        <td>
                                            <ul>
                                                <?php
                                                    foreach ($film->scenografi as $scenograf) {
                                                        echo '<li>' . $scenograf->ime_prezime . '</li>';
                                                    }
                                                    foreach ($film->scenografi_studenti as $scenograf_student) {
                                                        echo '<li>' . $scenograf_student->ime_prezime . ' ' . $scenograf_student->indeks . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kostimograf</td>
                                        <td>
                                            <ul>
                                                <?php
                                                foreach ($film->kostimografi as $kostimograf) {
                                                    echo '<li>' . $kostimograf->ime_prezime . '</li>';
                                                }
                                                foreach ($film->kostimografi_studenti as $kostimograf_student) {
                                                    echo '<li>' . $kostimograf_student->ime_prezime . ' ' . $kostimograf_student->indeks . '</li>';
                                                }
                                                ?>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Animacija</td>
                                        <td>
                                            <ul>
                                                <?php
                                                    foreach ($film->animacije as $animacije) {
                                                        echo '<li>' . $animacije->ime_prezime . '</li>';
                                                    }
                                                    foreach ($film->animacije_studenti as $animacije_student) {
                                                        echo '<li>' . $animacije_student->ime_prezime . ' ' . $animacije_student->indeks . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sminker</td>
                                        <td>
                                            <ul>
                                                <?php
                                                    foreach ($film->sminkeri as $sminker) {
                                                        echo '<li>' . $sminker->ime_prezime . '</li>';
                                                    }
                                                    foreach ($film->sminkeri_studenti as $sminker_student) {
                                                        echo '<li>' . $sminker_student->ime_prezime . ' ' . $sminker_student->indeks . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Specijalni efekti</td>
                                        <td>
                                            <ul>
                                                <?php
                                                    foreach ($film->spec_efekti as $spec_efekti) {
                                                        echo '<li>' . $spec_efekti->ime_prezime . '</li>';
                                                    }
                                                    foreach ($film->spec_efekti_studenti as $spec_efekti_student) {
                                                        echo '<li>' . $spec_efekti_student->ime_prezime . ' ' . $spec_efekti_student->indeks . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>


                                <h3 id="ts_naslov"> Tehnicka specifikacija:</h3>

                                <div class="row" >
                                    <div class="col-md-6">
                                        <p>Osnovni format: <label id="osnovni_format"> <?php echo $film->tehnicka[0]->osnovni_format ?> </label> </p>
                                        <p>Video format: <label id="video_format"> <?php echo $film->tehnicka[0]->video_format ?> </label> </p>
                                        <p>Analiza slike: <label id="analiza_slike"> <?php echo $film->tehnicka[0]->analiza_slike ?> </label> </p>
                                        <p>Format slike: <label id="format_slicice"> <?php echo $film->tehnicka[0]->format_slike ?> </label> </p>
                                        <p>Video nosač: <label id="video_nosac"> <?php echo $film->tehnicka[0]->video_nosac ?> </label> </p>
                                        <p>Zvuk: <label id="zvuk"> <?php echo $film->tehnicka[0]->zvuk ?> </label> </p>
                                        <p>Varijacije zvuka: <label id="varijacije_zvuka"> <?php echo $film->tehnicka[0]->varijacije_zvuka ?> </label> </p>
                                    </div>

                                    <div class="col-md-6">
                                        <p>Filmski format: <label id="filmski_format"> <?php echo $film->tehnicka[0]->filmski_format ?> </label> </p>
                                        <p>Televizijski standard: <label id="televizijski_standard"> <?php echo $film->tehnicka[0]->tel_standard ?> </label> </p>
                                        <p>Broj sličica u sekundi: <label id="slicice_u_sekundi"> <?php echo $film->tehnicka[0]->br_sl_sek ?> </label> </p>
                                        <p>Vrsta fajla: <label id="vrsta_fajla"> <?php echo $film->tehnicka[0]->vrsta_fajla ?> </label> </p>
                                        <p>Broj kanala: <label id="broj_kanala"> <?php echo $film->tehnicka[0]->broj_kanala ?> </label> </p>
                                        <p>Redukcija šuma: <label id="redukcija_suma"> <?php echo $film->tehnicka[0]->redukcija_suma ?> </label> </p>
                                        <p>Napomene: <label id="napomeneTehnicke"> <?php echo $film->tehnicka[0]->napomene ?> </label> </p>
                                    </div>
                                </div>

                                <h3 id="ts_naslov"> Detalji:</h3>

                                <div class="row" >
                                    <div class="col-md-6">
                                        <p>Sinopsis: <label id="sinopsis"> <?php echo $film->osnovne[0]->sinopsis ?> </label> </p>
                                        <p>Arhivska muzika: <label id="arhivska_muzika"> <?php echo $film->osnovne[0]->arhivska_muzika ?> </label> </p>
                                        <p>Biografija rezisera: <label id="biografija_rezisera"> <?php echo $film->osnovne[0]->biografija_rezisera ?> </label> </p>
                                        <p>Napomene: <label id="napomeneOsnovne"> <?php echo $film->osnovne[0]->napomene ?> </label> </p>
                                    </div>
                                </div>

                                <h3 id="ts_naslov"> Prilozeno uz film:</h3>

<!--                                <div class="row" >-->
<!--                                    <div class="col-md-6">-->
<!--                                        <p>Sinopsis: <label id="sinopsis"> --><?php //echo $film->osnovne[0]->sinopsis ?><!-- </label> </p>-->
<!--                                        <p>Arhivska muzika: <label id="arhivska_muzika"> --><?php //echo $film->osnovne[0]->arhivska_muzika ?><!-- </label> </p>-->
<!--                                        <p>Biografija rezisera: <label id="biografija_rezisera"> --><?php //echo $film->osnovne[0]->biografija_rezisera ?><!-- </label> </p>-->
<!--                                        <p>Napomene: <label id="napomeneOsnovne"> --><?php //echo $film->osnovne[0]->napomene ?><!-- </label> </p>-->
<!--                                    </div>-->
<!--                                </div>-->

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


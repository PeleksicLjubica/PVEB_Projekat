



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FDU</title>
    <link rel="shortcut icon" href="img/logo_fdu1.jpg"/>

    <!-- jQuery library -->
    <script src="components/jquery/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.js"></script>


    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="components/bootstrap/css/bootstrap.min.css">

    <!-- Latest compiled Bootstrap JavaScript -->
    <script src="components/bootstrap/js/bootstrap.min.js"></script>

    <!-- Simple Paging Grid -->

    <link href="css/simplePagingGrid-0.6.0.0.css" rel="stylesheet">

    <script src="js/handlebars-v4.0.5.js" type="text/javascript"></script>
    <script src="js/simplePagingGrid-0.6.0.0.js" type="text/javascript"></script>



    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <script src="js/shared.js"></script>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</head>
<body>

<div class="container-fluid" id="content">

    <div class="row" id="header_nas">

        <div class="col-md-2">
            <img src="img/logo_fdu1.jpg" id="logo" alt = "logo FDU header">
        </div>

        <div class="col-md-8" >
            <h1 id="naslov_header">Arhiv filmova Fakulteta Dramskih Umetnosti u Beogradu </h1>
        </div>

        <div class="col-md-2" id="admin">

        </div>

    </div> <!--header-->

    <nav class="navbar navbar-inverse" id="navbar">
        <div class="container-fluid">

            <ul id="navbar-lista" class="nav navbar-nav">
                <li>
                    <?php
                    if ($admin == 0) {
                        echo '<a onclick="goBack()">Vrati se nazad na početnu stranu</a>';
                    } else if ($admin == 1) {
                        echo '<a onclick="goToPageWithToken(\'homeAdmin\')">Filmovi</a>';
                    }
                    ?>

                </li>
                <?php
                if ($admin == 1) {
                    echo '<li><a onclick="goToPageWithToken(\'katedra\')">Katedre</a></li>
                        <li><a onclick="goToPageWithToken(\'vezba\')">Vezbe</a></li>
                        <li><a onclick="goToPageWithToken(\'karton\')">Dodaj film</a></li>
                        <li><a onclick="goToPageWithToken(\'studenti\')">Studenti</a></li>';
                }
                ?>

            </ul>
            <div class="nav navbar-nav navbar-right">
                <div id = "div_admin">
                    <span class="glyphicon glyphicon-user glyphicon" id="admin_ikonica"></span>
                    <?php
                    if($admin == 1){
                        echo '<button type="button" class="btn btn-default btn-lg" id="logout_dugme">
                    Logout</button>';
                    }
                    else
                        echo '<button type="button" class="btn btn-default btn-lg" id="admin_dugme" data-toggle="modal" data-target="#myModal">
                    Administrator</button>';
                    ?>
                </div>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm">

                        <!-- Modal content-->
                        <div class="modal-content" id="dialog">

                            <form class="form-vertical">

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10" id="forma_za_logovanje_sa_ikonicom">

                                        <!-- ikonica u prozoru za logovanje -->
                                        <span class="glyphicon glyphicon-user glyphicon center-block" id="admin_ikonica1"></span>

                                        <div id="forma_za_logovanje">
                                            <div class="form-group">
                                                <label for="korisnicko_ime">Korisničko ime: </label>
                                                <input type="text" class="form-control" name="korisnicko_ime" id="korisnicko_ime" value="wade@example.com">
                                            </div>

                                            <div class="form-group">
                                                <label for="sifra">Šifra: </label>
                                                <input type="password" class="form-control" name="sifra" id="sifra" value="12345"><br>
                                            </div>

                                            <div class="form-group">
                                                <label id="labela_greska">Pogrešno koriscničko ime ili šifra!</label>
                                            </div>
                                        </div><!--forma za logovanje-->

                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default"  id="potvrdi">Potvrdi</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal" id="odustani">Odustani</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </nav>



<div class="container">

    <h1 id="naziv_filma" style="font-style: italic; text-align: center; font-size: 500%; margin-bottom: 30px;"><?php echo $film->informacije[0]->naziv_filma ?></h1>

    <div class="row" id="proba">
        <div class="col-md-6" id="vrteska">
            <!--karusel-->


          <?php
                    $brojac = 0;
                    foreach ($film->prilozi as $prilog) {
                        if ($prilog->tip_priloga == 'fotografija iz filma')
                            $brojac++;
                    }



                    if ($brojac > 0) {

                        echo '<div id = "myCarousel" class="carousel slide" data-ride= "carousel" >';

                        echo '<ol class="carousel-indicators" >';

                        $index = 0;
                        foreach ($film->prilozi as $prilog) {
                            if ($prilog->tip_priloga == 'fotografija iz filma') {
                                if ($index == 0) {
                                    echo '<li data-target = "#myCarousel" data-slide-to =  ' .  $index  . ' class="active" ></li >';
                                }

                                else {
                                    echo '<li data-target = "#myCarousel" data-slide-to =  ' . $index  . '></li >';
                                }

                                $index++;
                            }

                            //echo $index;
                        }

                        echo '</ol>';

                        $indeks = 1;
                        echo '<div class="carousel-inner" role = "listbox" >';
                            foreach($film->prilozi as $prilog) {
                                if ($prilog->tip_priloga == 'fotografija iz filma') {
                                    if ($indeks == 1) {
                                        echo '<div class="item active" >';
                                            echo '<img src = "' .$prilog->putanja. ' " alt = "Chania" >';
                                        echo '</div >';
                                    }

                                    else {
                                        echo '<div class="item" >';
                                        echo '<img src = "' .$prilog->putanja. ' " alt = "Chania" >';
                                        echo '</div >';
                                    }

                                    $indeks++;
                                }
                        }
                        echo '</div >';

                        echo '<a class="left carousel-control" href = "#myCarousel" role = "button" data-slide = "prev" >';
                            echo '<span class="glyphicon glyphicon-chevron-left" aria-hidden = "true" ></span >';
                            echo '<span class="sr-only" > Previous</span >';
                        echo '</a >';

                        echo '<a class="right carousel-control" href = "#myCarousel" role = "button" data-slide = "next" >';
                            echo '<span class="glyphicon glyphicon-chevron-right" aria-hidden = "true" ></span >';
                            echo ' <span class="sr-only" > Next</span >';
                        echo '</a >';

                     echo '</div >'; /*karusel */

                    }

          else
                echo ' <div><img src="img/movie.jpg" width="70%" height="50%"></div>';
          ?>

        </div>


        <div class="col-md-3" id="osn_info">
            <p><span  style="font-style: italic;">Godina proizvodnje: </span> <label id="godina_proizvodnje">  </span> <?php echo $film->informacije[0]->godina_proizvodnje ?> </label> </p>
            <p><span style="font-style: italic;">Trajanje: </span> <label id="trajanje"> <?php echo $film->informacije[0]->trajanje ?> </label> </p>
            <p><span style="font-style: italic;">Katedra: </span> <label id="katedra">
                    <?php
                    foreach ($film->katedre as $kat) {
                        echo $kat->naziv .' ';
                    }

                    ?></label> </p>
            <p><span style="font-style: italic;">Profesor: </span> <label id="profesor"> <?php

                    foreach ($film->profesori as $prof) {
                        echo $prof->ime_prezime .' ';
                    }

                    ?> </label> </p>
            <p><span style="font-style: italic;">Godina studija: </span> <label id="godina_studija"> 2 </label></p>
            <p><span style="font-style: italic;">Naziv vežbe:</span> <label id="naziv_vezbe"> <?php echo $film->vezba[0]->naziv ?> </label> </p>
            <p><span style="font-style: italic;">Predmet:</span><label id="predmet"> <?php echo $film->predmet[0]->naziv ?> </label> </p>

        </div>

        <div class="col-md-3" id="sinopsis">
           <p><span style="font-style: italic;">Sinopsis:</span> </br><?php echo $film->osnovne[0]->sinopsis ?></p>
        </div>

    </div> <!--prvi red, header-->


    <div class="row">

        <div class="row" id="opcije">

            <div class="col-md-6">
            <div  id="osn_informacije">
                <h3 class="pasusi1"> Osnovne informacije:</h3>
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
                                        <td>Šminker</td>
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


                                <h3 class="pasusi1"> Tehnička specifikacija:</h3>

                                <div class="row" >
                                    <div class="col-md-12">

                                        <table class="table table-striped">

                                            <tbody>
                                            <tr>
                                                <td>Osnovni format:</td>
                                                <td>
                                                    <?php echo $film->tehnicka[0]->osnovni_format ?>
                                                </td>
                                                <td>Filmski format:</td>
                                                <td>
                                                    <?php echo $film->tehnicka[0]->filmski_format ?>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>Video format:</td>
                                                <td>
                                                    <?php echo $film->tehnicka[0]->video_format ?>
                                                </td>
                                                <td>Televizijski standard: </td>
                                                <td>
                                                    <?php echo $film->tehnicka[0]->tel_standard ?>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>Analiza slike: </td>
                                                <td>
                                                    <?php echo $film->tehnicka[0]->analiza_slike ?>
                                                </td>
                                                <td>Format slike: </td>
                                                <td>
                                                    <?php echo $film->tehnicka[0]->format_slike ?>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>Video nosač:  </td>
                                                <td>
                                                    <?php echo $film->tehnicka[0]->video_nosac ?>
                                                </td>
                                                <td>Zvuk: </td>
                                                <td>
                                                    <?php echo $film->tehnicka[0]->zvuk ?>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>Varijacije zvuka: </td>
                                                <td>
                                                    <?php echo $film->tehnicka[0]->varijacije_zvuka ?>
                                                </td>
                                                <td>Broj sličica u sekundi: </td>
                                                <td>
                                                    <?php echo $film->tehnicka[0]->br_sl_sek ?>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>Vrsta fajla: </td>
                                                <td>
                                                    <?php echo $film->tehnicka[0]->vrsta_fajla ?>
                                                </td>
                                                <td>Broj kanala: </td>
                                                <td>
                                                    <?php echo $film->tehnicka[0]->broj_kanala ?>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>Redukcija šuma:  </td>
                                                <td>
                                                    <?php echo $film->tehnicka[0]->redukcija_suma ?>
                                                </td>
                                                <td>Napomene: </td>
                                                <td>
                                                    <?php echo $film->tehnicka[0]->napomene ?>
                                                </td>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div> <!--col md 12-->


                        </div> <!--row-->
            </div> <!--osnovne info-->
            </div> <!--kraj leve strane-->


            <div class="col-md-6">

                            <?php
                            if(count($film->prilozi) >0) {
                                echo '<div>';
                                echo '<h3 class="pasusi1"> Prikaz filma: </h3>';

                                foreach ($film->prilozi as $prilog) {
                                if ($prilog->tip_priloga == 'Blu-ray') {
                                        echo '<div class="row">';
                                        echo '<div class="col-md-12">';
                                        echo '<video width = "100%" controls >';
                                               echo '<source src="' .$prilog->putanja. ' " type = "video/mp4" >';
                                               echo  'Your browser does not support HTML5 video.';
                                            echo '</video >';
                                    echo '</div>';
                                    echo '</div>';

                                }

                                if ($prilog->tip_priloga == 'DVD') {
                                    echo '<div class="row">';
                                    echo '<div class="col-md-12">';
                                    echo '<video width = "100%" controls >';
                                                echo '<source src="' .$prilog->putanja. ' " type = "video/mp4" >';
                                                echo  'Your browser does not support HTML5 video.';
                                        echo '</div >';
                                    echo '</div >';

                                }
                            }echo '</div >';

                            }
                            ?>


                        <?php
                        if (count($film->prilozi)> 0) {
                            echo '<div id="prilog">';
                                echo '<h3 class="pasusi1"> Prilozeno uz film:</h3>';
                                    echo '<div class="row">';
                                    echo '<div class="col-md-12">';
                            }
                        ?>

                        <table class="table table-striped">
                            <tbody>
                            <?php
                            $index = 1;
                            foreach ($film->prilozi as $prilog) {
                                echo '<tr>';
                                if ($prilog->tip_priloga == 'fotografija iz filma') {
                                    echo '<td style="vertical-align: middle">' . $prilog->tip_priloga . ' (' . $index . ')</td>';
                                    $index++;
                                } else {
                                    echo '<td style="vertical-align: middle">' . $prilog->tip_priloga . '</td>';
                                }
                                echo '<td>' . '<a class="btn btn-default" href="file_' . $prilog->id_priloga . '">Download</a></td>';
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>


                <?php if (count($film->prilozi)> 0) {
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
                        <?php if($film->osnovne[0]->arhivska_muzika != "") {
                            echo '<div>';
                                 echo '<p class="pasusi_manji">Arhivska muzika: </p>';
                                 echo '<div class="row">';
                                    echo '<div class="col-md-12">';
                                    echo $film->osnovne[0]->arhivska_muzika;
                                 echo '</div>';
                                echo '</div>';
                            echo '</div>';
                            }

                            if($film->osnovne[0]->biografija_rezisera != "") {
                                echo '<div>';
                                    echo  '<p class="pasusi_manji">Biografija rezisera:  </p>';
                                        echo '<div class="row">';
                                            echo '<div class="col-md-12">';
                                                echo $film->osnovne[0]->biografija_rezisera;
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            }

                        if($film->osnovne[0]->napomene != "") {
                            echo '<div>';
                                echo   '<p class="pasusi_manji">Napomene: </p>';
                                    echo '<div class="row">';
                                        echo '<div class="col-md-12">';
                            echo $film->osnovne[0]->napomene;
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>



            </div> <!--kraj desne col md strane-->



        </div> <!--row-->


    </div> <!--row-->

</div>




<?php
include 'footer.php';
?>


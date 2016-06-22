<?php
/**
 * Created by PhpStorm.
 * User: jlosic
 * Date: 7.6.16.
 * Time: 01.40 AM
 */

include 'header.php';
?>

<div class="container">
    <!-- Le styles -->


    <div class="page">

        <section id="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <h3> Svi studenti: </h3>
                        <div id="exampleGrid"></div>
                    </div>

                    <div class="col-md-3">
                        <div id="unos_studenta" class="pasusi">
                            Unos novog studenta <span class="glyphicon glyphicon-triangle-bottom glyphicon"></span>
                        </div>

                        <div id="studenti_forma">
                            <form role="form" method="post" enctype="multipart/form-data" action="" onsubmit="pathWithToken('studenti')">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="indeks">Indeks studenta:</label>
                                        <input type="text" class="form-control" id="indeks" name="indeks">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="ime">Ime i prezime:</label>
                                        <input type="text" class="form-control" id="ime_prezime" name="ime_prezime">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email studenta:</label>
                                    <input type="text" class="form-control" id="e_mail" name="e_mail">
                                </div>

                                <div class="form-group">
                                    <label>Katedra:</label>
                                    <select class="js-example-data-array katedre"  name="katedra" style="width: 100%">
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-default" id="dugme_studenti">Potvrdi</button>

                            </form>
                        </div>

                    </div> <!--kraj drugog diva-->

                </div>
            </div>
        </section>
    </div>

</div>


<script src="js/student.js"></script>

<?php
include 'footer.php';
?>

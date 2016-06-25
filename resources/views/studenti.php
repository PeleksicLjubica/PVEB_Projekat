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

                       <div class="csv_div">
                            <button class="btn btn-default" id="praviStudentiCSV"> Export studenata u CSV </button>
                        </div>

                        <div id="unos_studenta" class="pasusi">
                            Unos novog studenta <span class="glyphicon glyphicon-triangle-bottom glyphicon"></span>
                        </div>

                        <div id="forma_studenti">
                            <form id="studenti_forma" role="form" method="post" enctype="multipart/form-data" action="" onsubmit="pathWithToken('studenti')">

                                <div class="form-group ">
                                    <label for="indeks">Indeks studenta:</label>
                                    <input type="text" class="form-control" id="indeks" name="indeks">
                                </div>


                                <div class="form-group ">
                                    <label for="ime">Ime i prezime:</label>
                                    <input type="text" class="form-control" id="ime_prezime" name="ime_prezime">
                                </div>


                                <div class="form-group">
                                    <label for="email">Email studenta:</label>
                                    <input type="text" class="form-control" id="e_mail" name="e_mail">
                                </div>

                                <div class="form-group">
                                    <label>Katedra:</label>
                                    <select class="js-example-data-array katedre" id="katedre" name="katedre" style="width: 100%">
                                    </select>
                                </div>


                                <button type="button" class="btn btn-default" id="dugme_studenti" data-toggle="modal" data-target="#potvrda_student">Potvrdi</button>

                                <div class="modal fade" id="potvrda_student" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content" id="modal_student">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Upozorenje</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Da li ste sigurni da zelite da unesete novog studenta?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal" id="odbaci_forma_student">Odustani</button>
                                                <button type="button" class="btn btn-default" id="salji_forma_student">Potvrdi</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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

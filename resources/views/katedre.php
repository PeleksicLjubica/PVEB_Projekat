
<?php
include 'header.php';
?>


<div class="container">
    <!-- Le styles -->

    <div class="page">

        <section id="main">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-9">
                        <h3> Sve katedre: </h3>
                        <div id="exampleGrid"></div>
                    </div>

                    <div class="col-md-3">

                        <div class="csv_div">
                            <button class="btn btn-default" id="praviKatedreCSV" style="width: 100%">Export katedri u CSV</button>
                        </div>

                        <div id="unos_katedre" class="pasusi">
                            Unos nove katedre <span class="glyphicon glyphicon-triangle-bottom glyphicon"></span>
                        </div>

                        <div id="katedre_forma">
                            <form id = "forma_katedre" role="form" method="post" action="" onsubmit="pathWithToken('katedra')">
                                <div class="form-group">
                                    <label for="naziv">Naziv katedre: </label>
                                    <select class="js-example-data-array naziv_katedre" name="naziv_katedre" style="width: 100%">
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="opis">Godina studija: </label>
                                    <select class="js-example-data-array god_studija_katedra" name="god_studija_katedra" style="width: 100%">
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Profesor: </label>
                                    <select class="js-example-data-array profesor_katedre" name="profesor_katedre" style="width: 100%">
                                    </select>
                                </div>

                                <button type="button" class="btn btn-default" id="dugme_katedra" data-toggle="modal" data-target="#potvrda_katedra">Potvrdi</button>

                                <div class="modal fade" id="potvrda_katedra" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content" id="modal_katedra">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Upozorenje</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Da li ste sigurni da zelite da unesete novu katedru?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal" id="odbaci_forma_katedra">Odustani</button>
                                                <button type="button" class="btn btn-default" id="salji_forma_katedra">Potvrdi</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>






            </div>
        </section>



    </div>

</div>

<script src="js/katedre.js"></script>
<?php
include 'footer.php';
?>


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
                        <p> Sve katedre: </p>
                        <div id="exampleGrid"></div>
                    </div>

                    <div class="col-md-3">
                        <button class="btn btn-default" id="praviKatedreCSV" style="width: 100%">Export katedri u CSV</button>

                        <div id="unos_katedre" class="pasusi">
                            Unos nove katedre <span class="glyphicon glyphicon-triangle-bottom glyphicon"></span>
                        </div>

                        <div id="katedre_forma">
                            <form role="form" method="post" enctype="multipart/form-data" action="" onsubmit="pathWithToken('katedra')">
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

                                <button type="submit" class="btn btn-default" id="dugme_vezbe">Potvrdi</button>
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

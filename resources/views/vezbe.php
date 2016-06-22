
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
                    <h3> Sve vežbe: </h3>
                    <div id="exampleGrid"></div>
                </div>

                <div class="col-md-3">

                        <div class="csv_div">
                            <button class="btn btn-default" id="praviVezbeCSV"> Export vezbi u CSV </button>
                        </div>

                        <div id="unos_vezbe" class="pasusi">
                            Unos nove vežbe <span class="glyphicon glyphicon-triangle-bottom glyphicon"></span>
                        </div>

                        <div id="vezbe_forma">
                            <form id="forma_vezbe" role="form" method="post" enctype="multipart/form-data" action="" onsubmit="pathWithToken('vezba')">
                                <div class="form-group">
                                    <label for="naziv">Naziv vežbe:</label>
                                    <input type="text" class="form-control" id="naziv" name="naziv">
                                </div>
                                <div class="form-group">
                                    <label for="opis">Opis vežbe:</label>
                                    <textarea rows="5" cols="5" class="form-control" id="opis" name="opis"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tip">Tip vežbe:</label>
                                    <select class="js-example-data-array tip" name="tip" id="tip" style="width: 100%">
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Katedre kojima vežba pripada:</label>
                                    <select class="js-example-data-array katedre" name="katedre[]" id="katedre" style="width: 100%">
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Predmet kojem vežba pripada:</label>
                                    <select class="js-example-data-array predmet" name="predmet" id="predmet" style="width: 100%">
                                    </select>
                                </div>

                                <button type="button" class="btn btn-default" id="dugme_vezbe" data-toggle="modal" data-target="#potvrda_vezba">Potvrdi</button>

                                <div class="modal fade" id="potvrda_vezba" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content" id="modal_vezba">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Upozorenje</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Da li ste sigurni da zelite da unesete novu vezbu?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal" id="odbaci_forma_vezba">Odustani</button>
                                                <button type="button" class="btn btn-default" id="salji_forma_vezba">Potvrdi</button>
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


<script src="js/vezba.js"></script>

<?php
include 'footer.php';
?>

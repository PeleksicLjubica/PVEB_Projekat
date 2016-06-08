
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
                        <div id="unos_vezbe" class="pasusi">
                            Unos nove vežbe <span class="glyphicon glyphicon-triangle-bottom glyphicon"></span>
                        </div>

                        <div id="vezbe_forma">
                            <form role="form" method="post" enctype="multipart/form-data" action="#" onsubmit="pathWithToken('vezba')">
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
                                    <select class="js-example-data-array tip" name="tip" style="width: 100%">
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Katedre kojima vežba pripada:</label>
                                    <select class="js-example-data-array katedre" name="katedre" style="width: 100%">
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Predmet kojem vežba pripada:</label>
                                    <select class="js-example-data-array predmet" name="predmet" style="width: 100%">
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-default" id="dugme_vezbe">Potvrdi</button>

                            </form>
                        </div>

                </div> <!--kraj drugog diva-->
            </div>

            <button class="btn btn-default" id="praviVezbeCSV">Export vezbi u CSV</button>
        </div>
    </section>
</div>

</div>


<script src="js/vezba.js"></script>

<?php
include 'footer.php';
?>

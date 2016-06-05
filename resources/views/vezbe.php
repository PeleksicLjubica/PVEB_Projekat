
<?php
include 'header.php';
?>

<div class="container">
    <!-- Le styles -->

    <script type="text/javascript">
        $(document).ready(function() {

        var request = new XMLHttpRequest();

        request.open('GET', pathWithToken('vezbePodaci'));

        request.onload = function() {


            if (request.status == 200) {
                $("#exampleGrid").simplePagingGrid({
                    columnNames: ["ID vežbe", "Naziv", "Opis", "Tip", "ID predmeta"],
                    columnKeys: ["id_vezbe", "naziv", "opis", "tip", "Predmet_id_predmeta"],
                    columnWidths: ["10%", "30%", "30%","20", "10"],
                    data: JSON.parse(request.response).data
                });
            } else
            {
                console.log(Error(request.statusText));
            }
        };

        request.onerror = function() {
            console.log(Error('Problem prilikom slanja zahteva'));
        };

        request.send();

        });

    </script>

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
                            <form role="form" method="post" enctype="multipart/form-data" action="vezbeUnos">
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
                                    <input type="text" class="form-control" id="tip" name="tip">
                                </div>

                                <div class="form-group">
                                    <label>Katedre kojima vežba pripada:</label>
                                    <select class="js-example-data-array katedre" style="width: 100%">
                                    </select>
                                </div>
                                    <button type="submit" class="btn btn-default" id="dugme_vezbe">Potvrdi</button>

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

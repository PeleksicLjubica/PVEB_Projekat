<?php
include 'header.php';
?>

<div class="container">
    <div id="floating_button">
        <button type="button" class="btn btn-default btn-lg" id="dodaj_film" onclick="idiNaKarton()">Dodaj film</button>
    </div>

    <div class="row" id="navigation">
        <div class="col-md-8" id="naslov">
            <h1>Pretraga fimova:</h1>
        </div>
    </div><!-- div navigacija -->

    <div class="row">

        <div class="col-md-12" id="forma">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-md-1" for="naziv_filma">Naziv filma: </label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="naziv_filma" id="naziv_filma">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-1" for="naziv_vezbe">Naziv vezbe: </label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="naziv_vezbe" id="naziv_vezbe"><br>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-1" for="predmet">Predmet: </label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="predmet" id="predmet"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-1" for="sel1">Profesor:</label>
                    <div class="col-md-2">
                        <select class="form-control" id="sel1">
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                        </select>
                    </div>
                </div>

                <button type="button" class="btn btn-default" id="pretrazi">Pretrazi</button>

            </form>
        </div>

    </div><!-- div red-->

</div>

<?php
include 'footer.php';
?>

<script src="js/index.js"></script>


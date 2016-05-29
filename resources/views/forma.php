
<?php
include 'header.php';
?>


<div class="container">

    <div class="row">
        <div class="naslov">
            <h1>Karton filma:</h1>
        </div>

        <form class="form-horizontal">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-md-2" for="naziv">Naziv filma:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="naziv">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="naziv_vezbe">Naziv vežbe:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="naziv_vezbe">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="reziser">Režiser:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="reziser">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="scenarista">Scenarista:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="scenarista">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="montazer">Montažer:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="montazer">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="dizajner_zvuka">Dizajner zvuka:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="dizajner_zvuka">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="snimatelj_zvuka">Snimatelj zvuka:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="snimatelj_zvuka">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="specijalni_efekti">Specijalni efekti:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="specijalni_efekti">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="animacija">Animacija:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="animacija">
                    </div>
                </div>


            </div><!-- LEVO -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-md-2" for="godina">Godina proizvodnje:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="godina">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="trajanje">Trajanje:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="trajanje">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="producent">Producent:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="producent">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="snimatelj">Snimatelj:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="snimatelj">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="kompozitor">Kompozitor:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="kompozitor">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="scenograf">Scenograf:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="scenograf">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="kostimograf">Kostimograf:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="kostimograf">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="sminker">Šminker:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="sminker">
                    </div>
                </div>
                <div class="form-group">
                    <div class = "form-horizontal">
                        <label class="control-label col-md-2" for="nagrade">Nagrade:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="nagrade">
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-default">+</button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class = "form-horizontal">
                        <label class="control-label col-md-2" for="glumci">Glumci:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="glumci">
                        </div>
                        <div class="col-md-1">
                            <dugme_plus></dugme_plus>
                        </div>
                    </div>
                </div>

            </div><!-- DESNO -->
        </form>

        <!--

         -->




    </div>

</div>

<?php
include 'footer.php';
?>
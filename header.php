<div class="row" id="header">

    <div class="col-md-2">
        <img src="pictures/logo_fdu1.jpg" id="logo">
    </div>

    <div class="col-md-8" >
        <h1 id="naslov_header">Fakultet Dramskih Umetnosti </h1>
    </div>

    <div class="col-md-2" id="admin">
        <div id = "glupi_div">
            <span class="glyphicon glyphicon-user glyphicon" id="admin_ikonica"></span>
            <button type="button" class="btn btn-default btn-lg" id="admin_dugme" data-toggle="modal" data-target="#myModal">Administrator</button>
        </div>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">

                <!-- Modal content-->
                <div class="modal-content" id="dialog">

                    <form class="form-vertical" role="form">

                        <div class="row" style="padding:40px;">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">

                                <div class="form-group">
                                    <label for="korisnicko_ime">Korisničko ime: </label>
                                    <input type="text" class="form-control" name="korisnicko_ime" id="korisnicko_ime">

                                </div>

                                <div class="form-group">
                                    <label for="šifra">Šifra: </label>
                                    <input type="text" class="form-control" name="šifra" id="šifra"><br>

                                </div>

                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Potvrdi</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="odustani">Odustani</button>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</div> <!--header-->

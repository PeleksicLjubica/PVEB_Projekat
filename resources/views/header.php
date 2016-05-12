<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FDU</title>
    <link rel="shortcut icon" href="img/logo_fdu1.jpg"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script type="text/javascript" src="https://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js" charset="UTF-8"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container-fluid" id="content">

<div class="row" id="header">

    <div class="col-md-2">
        <img src="img/logo_fdu1.jpg" id="logo">
    </div>

    <div class="col-md-8" >
        <h1 id="naslov_header">Fakultet Dramskih Umetnosti </h1>
    </div>

    <div class="col-md-2" id="admin">
        <div id = "div_admin">
            <span class="glyphicon glyphicon-user glyphicon" id="admin_ikonica"></span>
            <button type="button" class="btn btn-default btn-lg" id="admin_dugme" data-toggle="modal" data-target="#myModal">Administrator</button>
        </div>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">

                <!-- Modal content-->
                <div class="modal-content" id="dialog">

                    <form class="form-vertical" role="form">

                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10" id="forma_za_logovanje_sa_ikonicom">

                                <!-- ikonica u prozoru za logovanje -->
                                <span class="glyphicon glyphicon-user glyphicon" id="admin_ikonica1"></span>

                                <div id="forma_za_logovanje">
                                    <div class="form-group">
                                        <label for="korisnicko_ime">Korisničko ime: </label>
                                        <input type="text" class="form-control" name="korisnicko_ime" id="korisnicko_ime">
                                    </div>

                                    <div class="form-group">
                                        <label for="šifra">Šifra: </label>
                                        <input type="text" class="form-control" name="šifra" id="šifra"><br>
                                    </div>
                                </div><!--forma za logovanje-->

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
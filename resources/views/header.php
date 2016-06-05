<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FDU</title>
    <link rel="shortcut icon" href="img/logo_fdu1.jpg"/>

    <!-- jQuery library -->
    <script src="components/jquery/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.js"></script>


    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="components/bootstrap/css/bootstrap.min.css">

    <!-- Latest compiled Bootstrap JavaScript -->
    <script src="components/bootstrap/js/bootstrap.min.js"></script>

    <!-- Simple Paging Grid -->

    <link href="css/simplePagingGrid-0.6.0.0.css" rel="stylesheet">

    <script src="js/handlebars-v4.0.5.js" type="text/javascript"></script>
    <script src="js/simplePagingGrid-0.6.0.0.js" type="text/javascript"></script>



    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>



    <!-- 1. Load libraries -->
    <!-- Polyfill(s) for older browsers -->
<!--    <script src="node_modules/es6-shim/es6-shim.min.js"></script>-->
<!---->
<!--    <script src="node_modules/zone.js/dist/zone.js"></script>-->
<!--    <script src="node_modules/reflect-metadata/Reflect.js"></script>-->
<!--    <script src="node_modules/systemjs/dist/system.src.js"></script>-->

    <!-- 2. Configure SystemJS -->
<!--    <script src="systemjs.config.js"></script>-->
<!--    <script>-->
<!--        System.import('app').catch(function(err){ console.error(err); });-->
<!--    </script>-->

    <link rel="stylesheet" href="css/style.css">
	<script src="js/shared.js"></script>

    <script>

        $.validator.addMethod(
            "regex",
            function(value, element, regexp) {
                var re = new RegExp(regexp);
                return this.optional(element) || re.test(value);
            },
            "Ispravan format je broj sati:broj minuta:broj sekundi"
        );

        $(function() {
            $("#karton_filma").validate({
                rules: {
                    godina: {required: true, number: true},
                    //trajanje: {required: true, regex: "^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$"},
                    naziv: {required: true}

                },
                messages: {
                    godina: {
                        required: "Upišite godinu proizvodnje",
                        number: "Morate da upišete broj"
                    },
                    trajanje: {
                        required: "Upišite trajanje filma"
                    },
                    naziv: {
                        required: "Upišite naziv filma"
                    }
                }
            });
        });
    </script>



</head>
<body>

<div class="container-fluid" id="content">

<div class="row" id="header_nas">

    <div class="col-md-2">
        <img src="img/logo_fdu1.jpg" id="logo" alt = "logo FDU header">
    </div>

    <div class="col-md-8" >
        <h1 id="naslov_header">Fakultet Dramskih Umetnosti </h1>
    </div>

    <div class="col-md-2" id="admin">

    </div>

</div> <!--header-->

<nav class="navbar navbar-inverse" id="navbar">
    <div class="container-fluid">

        <ul class="nav navbar-nav">
            <li class="active">
                <?php
                if ($admin == 0) {
             //       echo '<a href="home">Filmovi</a>';
                } else if ($admin == 1) {
                    echo '<a onclick="goToPageWithToken(\'homeAdmin\')">Filmovi</a>';
                }
                ?>

            </li>
            <?php
            if ($admin == 1) {
                echo '<li><a onclick="goToPageWithToken(\'katedra\')">Katedre</a></li>
                        <li><a onclick="goToPageWithToken(\'vezba\')">Vezbe</a></li>
                        <li><a onclick="goToPageWithToken(\'karton\')">Dodaj film</a></li>';
            }
            ?>
            
        </ul>
        <div class="nav navbar-nav navbar-right">
            <div id = "div_admin">
                <span class="glyphicon glyphicon-user glyphicon" id="admin_ikonica"></span>
                <?php
                if($admin == 1){
                echo '<button type="button" class="btn btn-default btn-lg" id="logout_dugme">
                    Logout</button>';
                }
                else
                    echo '<button type="button" class="btn btn-default btn-lg" id="admin_dugme" data-toggle="modal" data-target="#myModal">
                    Administrator</button>';
                ?>
            </div>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-sm">

                    <!-- Modal content-->
                    <div class="modal-content" id="dialog">

                        <form class="form-vertical">

                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10" id="forma_za_logovanje_sa_ikonicom">

                                    <!-- ikonica u prozoru za logovanje -->
                                    <span class="glyphicon glyphicon-user glyphicon center-block" id="admin_ikonica1"></span>

                                    <div id="forma_za_logovanje">
                                        <div class="form-group">
                                            <label for="korisnicko_ime">Korisničko ime: </label>
                                            <input type="text" class="form-control" name="korisnicko_ime" id="korisnicko_ime" value="wade@example.com">
                                        </div>

                                        <div class="form-group">
                                            <label for="sifra">Šifra: </label>
                                            <input type="password" class="form-control" name="sifra" id="sifra" value="12345"><br>
                                        </div>

                                        <div class="form-group">
                                            <label id="labela_greska">Pogrešno koriscničko ime ili šifra!</label>
                                        </div>
                                    </div><!--forma za logovanje-->

                                </div>
                                <div class="col-md-1"></div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default"  id="potvrdi">Potvrdi</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal" id="odustani">Odustani</button>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</nav>


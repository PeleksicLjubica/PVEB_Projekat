<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script type="text/javascript" src="https://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js" charset="UTF-8"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container-fluid" id="content">

    <?php
        include 'header.php';
    ?>

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

    <?php
        include 'footer.php';
    ?>

</div>

</body>
</html>

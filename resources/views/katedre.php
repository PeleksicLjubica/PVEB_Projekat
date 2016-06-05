
<?php
include 'header.php';
?>


<div class="container">
    <!-- Le styles -->

    <script type="text/javascript">
        $(document).ready(function() {

            var request = new XMLHttpRequest();

            request.open('GET', pathWithToken('katedraPodaci'));

            request.onload = function() {


                if (request.status == 200) {
                    $("#exampleGrid").simplePagingGrid({
                        columnNames: ["Godina studija", "Skolska godina", "Naziv", "ID Profesora"],
                        columnKeys: ["godina_studija", "skolska_godina", "naziv", "Profesor_id_profesora"],
                        columnWidths: ["30%", "20%", "40%","10"],
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
                <div class="row-fluid">
                    <p> Sve katedre: </p>
                    <div id="exampleGrid"></div>
                </div>
            </div>
        </section>
    </div>

</div>


<?php
include 'footer.php';
?>

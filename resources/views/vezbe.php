
<?php
include 'header.php';
?>

<div class="container">
    <!-- Le styles -->

    <script type="text/javascript">
        $(document).ready(function() {

        var request = new XMLHttpRequest();

        request.open('GET', 'vezbePodaci');

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
            <div class="row-fluid">
                <p> Sve vežbe: </p>
                <div id="exampleGrid"></div>
            </div>
        </div>
    </section>
</div>

</div>

<?php
include 'footer.php';
?>

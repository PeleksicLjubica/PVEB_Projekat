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
                    <div id="osnovno">
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
                        </div> <!-- form-group-->
                    </div><!-- div osnovno-->

                    <div id="napredno1">
                        <div class="form-group">
                            <label class="col-md-1" for="godina">Godina proizvodnje:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="godina">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="katedra">Katedra:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="katedra">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="naziv">Naziv filma:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="naziv">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="naziv_vezbe">Naziv vežbe:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="naziv_vezbe">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="predmet">Predmet:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="predmet">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="profesor">Profesor:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="profesor">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="godina_studija">Godina studija:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="godina_studija">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="trajanje">Trajanje:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="trajanje">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="reziser">Režiser:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="reziser">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="producent">Producent:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="producent">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-1" for="scenarista">Scenarista:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="scenarista">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="snimatelj">Snimatelj:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="snimatelj">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="montazer">Montažer:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="montazer">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class = "form-horizontal">
                                <label class="col-md-1" for="glumci">Glumci:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="glumci">
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-default">+</button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="dizajner_zvuka">Dizajner zvuka:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="dizajner_zvuka">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="snimatelj_zvuka">Snimatelj zvuka:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="snimatelj_zvuka">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="kompozitor">Kompozitor:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="kompozitor">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="scenograf">Scenograf:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="scenograf">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="kostimograf">Kostimograf:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="kostimograf">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="specijalni_efekti">Specijalni efekti:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="specijalni_efekti">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="animacija">Animacija:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="animacija">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-1" for="mdinker">Šminker:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="mdinker">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class = "form-horizontal">
                                <label class="col-md-1" for="nagrade">Nagrade:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="nagrade"></textarea>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-default">+</button>
                                </div>
                            </div>
                        </div>

                    </div><!-- div napredno-->

                    <div id="napredno2">
                        <div class="form-group" >
                            <label class="control-label col-md-2" for="osnovni_format">
                                Osnovni format:
                            </label>
                            <div class="col-md-9">
                                <label class="radio-inline col-md-3">
                                    <input type="radio" name="osnovni_format" id="osnovni_format"> VIDEO
                                </label>
                                <label class="radio-inline col-md-3">
                                    <input type="radio" name="osnovni_format" id="osnovni_format">FILM
                                </label>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-2" for="filmski_format">Filmski format:</label>
                            <div class="col-md-9">
                                <label class="radio-inline col-md-3">
                                    <input type="radio" name="filmski_format" id="filmski_format">8 mm
                                </label>
                                <label class="radio-inline col-md-3">
                                    <input type="radio" name="filmski_format">16 mm
                                </label>
                                <label class="radio-inline col-md-3">
                                    <input type="radio" name="filmski_format">35 mm
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="video_format">Video format:</label>
                            <div class="col-md-9">
                                <label class="radio-inline col-md-3">
                                    <input type="radio" name="video_format" id="video_format">SD
                                </label>
                                <label class="radio-inline col-md-3">
                                    <input type="radio" name="video_format" id="video_format">HD
                                </label>
                                <label class="radio-inline col-md-3">
                                    <input type="radio" name="video_format" id="video_format">2K
                                </label>
                                <label class="radio-inline col-md-2">
                                    <input type="radio" name="video_format" id="video_format">4K
                                </label>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-2" for="tel_standard">Televizijski standard:</label>
                            <div class="col-md-9">
                                <label class="radio-inline col-md-3"><input type="radio" name="tel_standard" id="tel_standard">PAL</label>
                                <label class="radio-inline col-md-3"><input type="radio" name="tel_standard">NTSC</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="an_slike">Analiza slike:</label>
                            <div class="col-md-9">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="format_slike" id="formаt_slike">Sa proredom
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="format_slike" id="formаt_slike">Progresivna
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="formаt_slike">Format sličice:</label>
                            <div class="col-md-3">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="format_slike" id="formаt_slike">4:3
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="format_slike" id="formаt_slike">16:9
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="format_slike" id="formаt_slike">1:1,66
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio"  name="format_slike" id="formаt_slike"> Scope
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="format_slike" id="formаt_slike">4:3 Letterbox
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="format_slike" id="formаt_slike">16:9 Letterbox
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="format_slike" id="formаt_slike">1:1,85
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio"  name="format_slike" id="formаt_slike"> Scope
                                    </label>
                                </div>
                            </div>
                    </div>

                    </div><!-- div napredno -->

                    <button type="button" class="btn btn-default" id="pretrazi">Pretrazi</button></form>
        </div>

    </div><!-- div red-->

</div>

<?php
include 'footer.php';
?>

<script src="js/index.js"></script>


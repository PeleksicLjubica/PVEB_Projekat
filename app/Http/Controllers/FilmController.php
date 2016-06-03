<?php
/**
 * Created by PhpStorm.
 * User: milica
 * Date: 5/29/2016
 * Time: 6:06 PM
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Osnovne_informacije;
use App\Models\Vezba;
use App\Models\Tehnicka_spacifikacija;
use App\Models\Reziser;

class FilmController extends Controller{

    public function obradi(Request $request){

        $film = new Film;
        $osnovne_informacije= new Osnovne_informacije;
        $tehnicka_spacifikacija = new Tehnicka_spacifikacija;
        $reziser = new Reziser;

        $scenarista = $request->input('scenarista');
        $montazer = $request->input('montazer');
        $dizajner_zvuka = $request->input('dizajner_zvuka');
        $snimatelj_zvuka = $request->input('snimatelj_zvuka');
        $specijalni_efekti = $request->input('specijalni_efekti');
        $animacija = $request->input('animacija');
        $producent = $request->input('producent');
        $snimatelj = $request->input('snimatelj');
        $kompozitor = $request->input('kompozitor');
        $scenograf = $request->input('scenograf');
        $kostimograf = $request->input('kostimograf');
        $sminker = $request->input('sminker');
        $nagrade = $request->input('nagrade');
        $glumci = $request->input('glumci');


        //trazenje id_vezbe preko naziva vezbe koji je korisnik uneo
        $naziv_vezbe = $request->input('naziv_vezbe');
        $id_vezbi = Vezba::where('naziv', $naziv_vezbe)
            ->take(1)
            ->get();

        //unos informacija u tabelu FILM koje je korisnik uneo
        $film->naziv_filma = $request->input('naziv_filma');
        $film->godina_proizvodnje = $request->input('godina');
        $film->trajanje = $request->input('trajanje');
        $film->Vezba_id_vezbe = $id_vezbi[0]->id_vezbe;;
        $film->save();

        //unos informacija u tabelu OSNOVNE_INFORMACIJE koje je korisnik uneo
        $osnovne_informacije->Film_id_filma = $film->id;
        $osnovne_informacije->sinopsis = $request->input('sinopsis');
        $osnovne_informacije->arhivska_muzika = $request->input('arhivska_muzika');
        $osnovne_informacije->biografija_rezisera = $request->input('bio_rezisera');
        $osnovne_informacije->napomene = $request->input('napomene');
        $osnovne_informacije->save();

        //unos informacija u tabelu TEHNICKA_SPECIFIKACIJA koje je korisnik uneo
        $tehnicka_spacifikacija->Film_id_filma = $film->id;
        $tehnicka_spacifikacija->osnovni_format = $request->input('osnovni_format');
        $tehnicka_spacifikacija->filmski_format = $request->input('filmski_format');
        $tehnicka_spacifikacija->video_format = $request->input('video_format');
        $tehnicka_spacifikacija->tel_standard = $request->input('tel_standard');
        $tehnicka_spacifikacija->analiza_slike = $request->input('analiza_slike');
        $tehnicka_spacifikacija->format_slike = $request->input('format_slike');
        $tehnicka_spacifikacija->br_sl_sek = $request->input('slicice_sekund');
        $tehnicka_spacifikacija->video_nosac = $request->input('video_nosac');
        $tehnicka_spacifikacija->vrsta_fajla = $request->input('vrsta_fajla');
        $tehnicka_spacifikacija->zvuk = $request->input('vrsta_zvuka');
        $tehnicka_spacifikacija->broj_kanala = $request->input('broj_kanala');
        $tehnicka_spacifikacija->redukcija_suma = $request->input('redukcija_suma');
        $tehnicka_spacifikacija->varijacije_zvuka = $request->input('varijacije_zvuka');
        $tehnicka_spacifikacija->napomene = $request->input('napomene');
        $tehnicka_spacifikacija->save();

        $reziser = $request->input('reziser');


        return view('forma');

    }


}
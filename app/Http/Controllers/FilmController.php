<?php
/**
 * Created by PhpStorm.
 * User: milica
 * Date: 5/29/2016
 * Time: 6:06 PM
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Assetic\Cache\ArrayCache;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Osnovne_informacije;
use App\Models\Vezba;
use App\Models\Tehnicka_spacifikacija;
use App\Models\Reziser;
use App\Models\Student;
use App\Models\Scenarista;
use App\Models\Montazer;
use App\Models\Producent;
use App\Models\Snimatelj;
use App\Models\Nagrada;
use App\Models\Glumac;
use App\Models\Glumac_student;
use App\Models\Podrska;
use App\Models\Podrska_student;

class FilmController extends Controller {

    public function obradi(Request $request) {

        $greska = "";

        //instanciranje modela u koje smestamo podatke za unos u bazu
        $film = new Film;
        $osnovne_informacije= new Osnovne_informacije;
        $tehnicka_spacifikacija = new Tehnicka_spacifikacija;


        //trazenje id_vezbe preko naziva vezbe koji je korisnik uneo

        $id_vezbe =  $request->input('naziv_vezbe');

            //unos informacija u tabelu FILM koje je korisnik uneo
            $film->naziv_filma = $request->input('naziv_filma');
            $film->godina_proizvodnje = $request->input('godina');
            $film->trajanje = $request->input('trajanje');
            $film->Vezba_id_vezbe = $id_vezbe;
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



            //uzimanje id_studenta za studenata iz forme
            $reziser_indeks = $request->input('reziser');

            //koliko studenata smo uneli
            $duzina = count($reziser_indeks);

            if($duzina > 0){
                //ako smo uneli neke studnte pravimo niz objekata reziser koji ce da se unose u bazu
                $arr = array();
                $i = 0;

                for (; $i < $duzina; $i++){
                    array_push($arr,new Reziser());
                }

                $i = 0;
                //za svakog unetog rezisera nalazi njegov id_studenta i unosi u tabelu Reziser u bazi
                foreach ($reziser_indeks as $value){
                    $studenti = Student::where('indeks', $value)
                        ->take(1)
                        ->get();

                    $id_studenta = $studenti[0]->id_studenta;

                    $arr[$i]->Student_id_studenta = $id_studenta;
                    $arr[$i]->Film_id_filma = $film->id;

                    $arr[$i]->save();

                    $i++;
                }
            }


            //uzimanje id_studenta za studenta kog smo izabrali za scenaristu
            $scenarista_indeks = $request->input('scenarista');
            $duzina = count($scenarista_indeks);

            if($duzina > 0){
                //ako smo uneli neke studnte pravimo niz objekata scenarista koji ce da se unose u bazu
                $arr = array();
                $i = 0;

                for (; $i < $duzina; $i++){
                    array_push($arr,new Scenarista());
                }

                $i = 0;
                //za svakog unetog rezisera nalazi njegov id_studenta i unosi u tabelu Reziser u bazi
                foreach ($scenarista_indeks as $value){
                    $studenti = Student::where('indeks', $value)
                        ->take(1)
                        ->get();

                    $id_studenta = $studenti[0]->id_studenta;

                    $arr[$i]->Student_id_studenta = $id_studenta;
                    $arr[$i]->Film_id_filma = $film->id;

                    $arr[$i]->save();

                    $i++;
                }
            }


            //uzimanje id_studenta za studenta kog smo izabrali za montazera i unos u tabelu MONTAZER
            $montazer_indeks = $request->input('montazer');
            $duzina = count($montazer_indeks);

            if($duzina > 0){
                //ako smo uneli neke studnte pravimo niz objekata scenarista koji ce da se unose u bazu
                $arr = array();
                $i = 0;

                for (; $i < $duzina; $i++){
                    array_push($arr,new Montazer());
                }

                $i = 0;
                //za svakog unetog rezisera nalazi njegov id_studenta i unosi u tabelu Montazer u bazi
                foreach ($montazer_indeks as $value){
                    $studenti = Student::where('indeks', $value)
                        ->take(1)
                        ->get();

                    $id_studenta = $studenti[0]->id_studenta;

                    $arr[$i]->Student_id_studenta = $id_studenta;
                    $arr[$i]->Film_id_filma = $film->id;

                    $arr[$i]->save();

                    $i++;
                }
            }


            //uzimanje id_studenta za studenta kog smo izabrali za producenta i unos u tabelu PRODUCENT
            $producent_indeks = $request->input('producent');
            $duzina = count($producent_indeks);

            if($duzina > 0){
                //ako smo uneli neke studnte pravimo niz objekata scenarista koji ce da se unose u bazu
                $arr = array();
                $i = 0;

                for (; $i < $duzina; $i++){
                    array_push($arr,new Producent());
                }

                $i = 0;
                //za svakog unetog rezisera nalazi njegov id_studenta i unosi u tabelu Montazer u bazi
                foreach ($producent_indeks as $value){
                    $studenti = Student::where('indeks', $value)
                        ->take(1)
                        ->get();

                    $id_studenta = $studenti[0]->id_studenta;

                    $arr[$i]->Student_id_studenta = $id_studenta;
                    $arr[$i]->Film_id_filma = $film->id;

                    $arr[$i]->save();

                    $i++;
                }
            }

            //uzimanje id_studenta za studenta kog smo izabrali za snimatelja i unos u tabelu SNIMATELJ
            $snimatelj_indeks = $request->input('snimatelj');
            $duzina = count($snimatelj_indeks);

            if($duzina > 0){
                //ako smo uneli neke studnte pravimo niz objekata scenarista koji ce da se unose u bazu
                $arr = array();
                $i = 0;

                for (; $i < $duzina; $i++){
                    array_push($arr,new Snimatelj());
                }

                $i = 0;
                //za svakog unetog rezisera nalazi njegov id_studenta i unosi u tabelu Montazer u bazi
                foreach ($snimatelj_indeks as $value){
                    $studenti = Student::where('indeks', $value)
                        ->take(1)
                        ->get();

                    $id_studenta = $studenti[0]->id_studenta;

                    $arr[$i]->Student_id_studenta = $id_studenta;
                    $arr[$i]->Film_id_filma = $film->id;

                    $arr[$i]->save();

                    $i++;
                }
            }


            //unos informacija u tabelu NAGRADE koje je korisnik uneo

            $nagrada_naziv = $request->input('nagrade');
            $duzina = count($nagrada_naziv);

            if($duzina > 0){
                //ako smo uneli neke studnte pravimo niz objekata scenarista koji ce da se unose u bazu
                $arr = array();
                $i = 0;

                for (; $i < $duzina; $i++){
                    array_push($arr,new Nagrada());
                }

                $i = 0;
                //za svakog unetog rezisera nalazi njegov id_studenta i unosi u tabelu Montazer u bazi
                foreach ($nagrada_naziv as $value){

                    $arr[$i]->naziv = $value;
                    $arr[$i]->Film_id_filma = $film->id;
                    $arr[$i]->save();

                    $i++;
                }
            }


            //unos GLUMACA - ako se pronadje indeks,ubacuje se u tabelu GLUMAC_STUDENT,inace u GLUMAC
            $glumac_indeks = $request->input('glumci');
            $duzina = count($glumac_indeks);

            if($duzina > 0){
                //ako smo uneli neke studnte pravimo niz objekata scenarista koji ce da se unose u bazu

                foreach ($glumac_indeks as $value){
                    //trazimo studenta sa upisanim indeksom
                    $studenti = Student::where('indeks', $value)
                        ->get();

                    if(!$studenti->first()){
                        $glumac = new Glumac();
                        $glumac->Film_id_filma = $film->id;
                        $glumac->ime_prezime = $value;
                        $glumac->save();

                    }
                    //ako smo nasli indeks,to znaci da je taj glumac student i upisujemo ga u tabelu GLUMAC_STUDENT
                    else{
                        $glumac_student = new Glumac_student();

                        $glumac_student->Film_id_filma = $film->id;
                        $glumac_student->Student_id_studenta = $studenti[0]->id_studenta;
                        $glumac_student->save();

                    }
                }
            }


            $dizajner_zvuka_indeks = $request->input('dizajner_zvuka');
            $this->obradiPodrsku($dizajner_zvuka_indeks,"dizajner zvuka",$film);

            $specijalni_efekti_indeks = $request->input('specijalni_efekti');
            $this->obradiPodrsku($specijalni_efekti_indeks,"specijalni efeti",$film);

            $snimatelj_zvuka_indeks = $request->input('snimatelj_zvuka');
            $this->obradiPodrsku($snimatelj_zvuka_indeks,"snimatelj zvuka",$film);

            $animacija_indeks = $request->input('animacija');
            $this->obradiPodrsku($animacija_indeks,"animacija",$film);

            $kompozitor_indeks = $request->input('kompozitor');
            $this->obradiPodrsku($kompozitor_indeks,"kompozitor",$film);

            $scenograf_indeks = $request->input('scenograf');
            $this->obradiPodrsku($scenograf_indeks,"scenograf",$film);

            $kostimograf_indeks = $request->input('kostimograf');
            $this->obradiPodrsku($kostimograf_indeks,"kostimograf",$film);

            $sminker_indeks = $request->input('sminker');
            $this->obradiPodrsku($sminker_indeks,"sminker",$film);

            $this->premestiFajlove($request, $film->id);


        return view('forma', ['admin' => 1]);

    }

    public function getKartonView(Request $request) {
        return view('forma', ['admin' => 1]);
    }

    public function obradiPodrsku($input,$uloga,$film){
        $duzina = count($input);
        //ako je upisan dizajner zvuka,upisujemo ga u bazu

        if($duzina > 0){
            //ako smo uneli neke studnte pravimo niz objekata scenarista koji ce da se unose u bazu

            foreach ($input as $value){
                //trazimo studenta sa upisanim indeksom
                $studenti = Student::where('indeks', $value)
                    ->get();

                if(!$studenti->first()){

                    $podrska = new Podrska();
                    $podrska->Film_id_filma = $film->id;
                    $podrska->tip_podrske = $uloga;
                    $podrska->ime_prezime = $value;
                    $podrska->save();

                }
                //ako smo nasli indeks,to znaci da je taj glumac student i upisujemo ga u tabelu GLUMAC_STUDENT
                else{
                    $podrska_student = new Podrska_student();
                    $podrska_student->Film_id_filma = $film->id;
                    $podrska_student->tip_podrske = $uloga;;
                    $podrska_student->Student_id_studenta = $studenti[0]->id_studenta;
                    $podrska_student->save();
                }
            }

        }

    }

    private function premestiFajlove(Request $request, $id_filma) {

        for ($i = 1; $i <= 7; $i++) {
            if ($request->hasFile('fileToUpload' . $i)) {
                $file = $request->file('fileToUpload' . $i);
                if ($file->isValid()) {
                    $filename = $file->getClientOriginalName();
                    try {
                        $destinationPath = 'filmovi/' . $request->input('naziv_filma') . '_' . $id_filma;
                        $file->move($destinationPath, $filename);
                    } catch (FileException $e) {
                        echo $e->getMessage();
                    }
                }
            }
        }

    }
    public function pretrazi(Request $request) {






        if ($request->query('token')) {
            return view('index', ['admin' => 1]);
        } else {
            return view('index', ['admin' => 0]);
        }
    }


    /*kupi sve filmove*/
    public function getAll() {
        $film = Film::all();
        return response()->json(['data'=>$film]);
    }



}
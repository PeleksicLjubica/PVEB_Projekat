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

class FilmController extends Controller{

    public function obradi(Request $request){

        $greska = "";

        //instanciranje modela u koje smestamo podatke za unos u bazu
        $film = new Film;
        $osnovne_informacije= new Osnovne_informacije;
        $tehnicka_spacifikacija = new Tehnicka_spacifikacija;
        $reziser = new Reziser;
        $scenarista = new Scenarista;
        $montazer = new Montazer;
        $producent = new Producent;
        $snimatelj= new Snimatelj;
        $nagrada = new Nagrada;
        $glumac = new Glumac;
        $glumac_student = new Glumac_student;
        $podrska = new Podrska;
        $podrska_student = new Podrska_student;


        //trazenje id_vezbe preko naziva vezbe koji je korisnik uneo
        $naziv_vezbe = $request->input('naziv_vezbe');
        $id_vezbi = Vezba::where('naziv', $naziv_vezbe)
            ->take(1)
            ->get();

        if($id_vezbi->first()) {
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



            //uzimanje id_studenta za studenta kog smo izabrali za rezisera i unos u tabelu REZISER
            $reziser_indeks = $request->input('reziser');
            if($reziser_indeks != '0'){
                $studenti = Student::where('indeks', $reziser_indeks)
                    ->take(1)
                    ->get();

                if(!$studenti->first()){
                    $greska.= " Ovaj reziser nije student";
                }
                else{
                    $id_studenta = $studenti[0]->id_studenta;
                    $reziser->Student_id_studenta = $id_studenta;
                    $reziser->Film_id_filma = $film->id;
                    $reziser->save();
                }
            }


            //uzimanje id_studenta za studenta kog smo izabrali za scenaristu i unos u tabelu SECNARISTA
            $scenarista_indeks = $request->input('scenarista');
            if($scenarista_indeks != '0'){
                $studenti = Student::where('indeks', $scenarista_indeks)
                    ->take(1)
                    ->get();

                if($studenti->first()){
                    $id_studenta = $studenti[0]->id_studenta;
                    $scenarista->Student_id_studenta = $id_studenta;
                    $scenarista->Film_id_filma = $film->id;
                    $scenarista->save();
                }
                else{
                    $greska.= " Ovaj scenarista nije student";

                }

            }

            //uzimanje id_studenta za studenta kog smo izabrali za montazera i unos u tabelu MONTAZER
            $montazer_indeks = $request->input('montazer');
            if($montazer_indeks != '0'){
                $studenti = Student::where('indeks', $montazer_indeks)
                    ->take(1)
                    ->get();

                if($studenti->first()){
                    $id_studenta = $studenti[0]->id_studenta;
                    $montazer->Student_id_studenta = $id_studenta;
                    $montazer->Film_id_filma = $film->id;
                    $montazer->save();
                }
                else{
                    $greska.= " Ovaj montazer nije student";

                }

            }

            //uzimanje id_studenta za studenta kog smo izabrali za producenta i unos u tabelu PRODUCENT
            $producent_indeks = $request->input('producent');
            if($producent_indeks != '0'){
                $studenti = Student::where('indeks', $producent_indeks)
                    ->take(1)
                    ->get();

                if($studenti->first()){
                    $id_studenta = $studenti[0]->id_studenta;
                    $producent->Student_id_studenta = $id_studenta;
                    $producent->Film_id_filma = $film->id;
                    $producent->save();
                }
                else{
                    $greska.= " Ovaj producent nije student";
                }


            }

            //uzimanje id_studenta za studenta kog smo izabrali za snimatelja i unos u tabelu SNIMATELJ
            $snimatelj_indeks = $request->input('snimatelj');
            if($snimatelj_indeks != '0'){
                $studenti = Student::where('indeks', $snimatelj_indeks)
                    ->take(1)
                    ->get();

                if($studenti->first()){
                    $id_studenta = $studenti[0]->id_studenta;
                    $snimatelj->Student_id_studenta = $id_studenta;
                    $snimatelj->Film_id_filma = $film->id;
                    $snimatelj->save();
                }
                else{
                    $greska.= " Ovaj snimatelj nije student";
                }


            }

            //unos informacija u tabelu NAGRADE koje je korisnik uneo
            $nagrada->Film_id_filma = $film->id;
            $nagrada->naziv = $request->input('nagrade');
            $nagrada->save();

            //unos GLUMACA - ako se pronadje indeks,ubacuje se u tabelu GLUMAC_STUDENT,inace u GLUMAC
            $glumac_indeks = $request->input('glumci');
            //ako je upisan glumac,upisujemo ga u bazu
            if($glumac_indeks != '0'){
                //trazimo studenta sa upisanim indeksom
                $studenti = Student::where('indeks', $glumac_indeks)
                    ->get();

                //ako takav student ne postoji,to znaci da je to glumac koji nije student i upisuje se u tabelu GLUMAC
                if(!$studenti->first()){
                    $glumac->Film_id_filma = $film->id;
                    $array = explode(" ",$glumac_indeks);

                    $duzina_niza = count($array);

                    if($duzina_niza == 2){
                        $glumac->ime = $array[0];
                        $glumac->prezime = $array[1];
                    }
                    else if($duzina_niza == 1){
                        $glumac->ime = $array[0];
                    }

                    $glumac->save();

                }
                //ako smo nasli indeks,to znaci da je taj glumac student i upisujemo ga u tabelu GLUMAC_STUDENT
                else{
                    $id_studenta = $studenti[0]->id_studenta;
                    $glumac_student->Student_id_studenta = $id_studenta;
                    $glumac_student->Film_id_filma = $film->id;
                    $glumac_student->save();
                }
            }

            $dizajner_zvuka_indeks = $request->input('dizajner_zvuka');
            //ako je upisan dizajner zvuka,upisujemo ga u bazu
            if($dizajner_zvuka_indeks != '0'){
                //trazimo studenta sa upisanim indeksom
                $studenti = Student::where('indeks', $dizajner_zvuka_indeks)
                    ->get();

                //ako takav student ne postoji,to znaci da je to podrska koji nije student i upisuje se u tabelu PODRSKA
                if(!$studenti->first()){
                    $podrska->Film_id_filma = $film->id;
                    $array = explode(" ",$dizajner_zvuka_indeks);

                    $duzina_niza = count($array);
                    if($duzina_niza == 2){
                        $podrska->ime = $array[0];
                        $podrska->prezime = $array[1];
                        $podrska->tip_podrske = "dizajner_zvuka";
                    }
                    elseif($duzina_niza == 1){
                        $podrska->ime = $array[0];
                        $podrska->tip_podrske = "dizajner_zvuka";
                    }

                    $podrska->save();
                }
                //ako smo nasli indeks,to znaci da je ta podrska student i upisujemo ga u tabelu PODRSKA_STUDENT
                else{
                    $id_studenta = $studenti[0]->id_studenta;
                    $podrska_student->Student_id_studenta = $id_studenta;
                    $podrska_student->Film_id_filma = $film->id;
                    $podrska_student->save();
                }
            }

            $specijalni_efekti_indeks = $request->input('specijalni_efekti');
            //ako je upisan  specijani efekti,upisujemo ga u bazu
            if($specijalni_efekti_indeks != '0'){
                //trazimo studenta sa upisanim indeksom

                $studenti = Student::where('indeks', $specijalni_efekti_indeks)
                    ->get();

                //ako takav student ne postoji,to znaci da je to podrska koji nije student i upisuje se u tabelu PODRSKA
                if(!$studenti->first()){
                    echo "OVO NIJE STUDENT";
                    $podrska->Film_id_filma = $film->id;
                    $array = explode(" ",$specijalni_efekti_indeks);

                    $duzina_niza = count($array);

                    if($duzina_niza == 2){
                        $podrska->ime = $array[0];
                        $podrska->prezime = $array[1];
                        $podrska->tip_podrske = "specijalni_efekti";
                    }

                    elseif($duzina_niza == 1){
                        $podrska->ime = $array[0];
                        $podrska->tip_podrske = "specijalni_efekti";
                    }

                    $podrska->save();
                }
                //ako smo nasli indeks,to znaci da je ta podrska student i upisujemo ga u tabelu PODRSKA_STUDENT
                else{
                    $id_studenta = $studenti[0]->id_studenta;
                    $podrska_student->Student_id_studenta = $id_studenta;
                    $podrska_student->Film_id_filma = $film->id;
                    $podrska_student->save();
                }

            }

            $snimatelj_zvuka_indeks = $request->input('snimatelj_zvuka');
            //ako je upisan snimatelj zvuka,upisujemo ga u bazu
            if($snimatelj_zvuka_indeks != '0'){
                //trazimo studenta sa upisanim indeksom
                $studenti = Student::where('indeks', $snimatelj_zvuka_indeks)
                    ->get();

                echo $snimatelj_zvuka_indeks;

                //ako takav student ne postoji,to znaci da je to podrska koji nije student i upisuje se u tabelu PODRSKA
                if(!$studenti->first()){
                    $podrska->Film_id_filma = $film->id;
                    $array = explode(" ",$snimatelj_zvuka_indeks);

                    $duzina_niza = count($array);

                    if($duzina_niza == 2){
                        $podrska->ime = $array[0];
                        $podrska->prezime = $array[1];
                        $podrska->tip_podrske = "snimatelj_zvuka";
                    }
                    elseif($duzina_niza == 1){
                        $podrska->ime = $array[0];
                        $podrska->tip_podrske = "snimatelj_zvuka";
                    }

                    $podrska->save();
                }
                //ako smo nasli indeks,to znaci da je ta podrska student i upisujemo ga u tabelu PODRSKA_STUDENT
                else{
                    $id_studenta = $studenti[0]->id_studenta;
                    $podrska_student->Student_id_studenta = $id_studenta;
                    $podrska_student->Film_id_filma = $film->id;
                    $podrska_student->save();
                }
            }

            $animacija_indeks = $request->input('animacija');
            //ako je upisan animacija,upisujemo ga u bazu
            if($animacija_indeks!= '0'){
                //trazimo studenta sa upisanim indeksom
                $studenti = Student::where('indeks', $animacija_indeks)
                    ->get();

                //ako takav student ne postoji,to znaci da je to podrska koji nije student i upisuje se u tabelu PODRSKA
                if(!$studenti->first()){
                    $podrska->Film_id_filma = $film->id;
                    $array = explode(" ",$animacija_indeks);

                    $duzina_niza = count($array);

                    if($duzina_niza == 2){
                        $podrska->ime = $array[0];
                        $podrska->prezime = $array[1];
                        $podrska->tip_podrske = "animacija";
                    }
                    elseif($duzina_niza == 1){
                        $podrska->ime = $array[0];
                        $podrska->tip_podrske = "animacija";
                    }

                    $podrska->save();
                }
                //ako smo nasli indeks,to znaci da je ta podrska student i upisujemo ga u tabelu PODRSKA_STUDENT
                else{
                    $id_studenta = $studenti[0]->id_studenta;
                    $podrska_student->Student_id_studenta = $id_studenta;
                    $podrska_student->Film_id_filma = $film->id;
                    $podrska_student->save();
                }
            }

            $kompozitor_indeks = $request->input('kompozitor');
            //ako je upisan kompozitor,upisujemo ga u bazu
            if($kompozitor_indeks != '0'){
                //trazimo studenta sa upisanim indeksom
                $studenti = Student::where('indeks', $kompozitor_indeks)
                    ->get();

                //ako takav student ne postoji,to znaci da je to podrska koji nije student i upisuje se u tabelu PODRSKA
                if(!$studenti->first()){
                    $podrska->Film_id_filma = $film->id;
                    $array = explode(" ",$kompozitor_indeks);

                    $duzina_niza = count($array);

                    if($duzina_niza == 2){
                        $podrska->ime = $array[0];
                        $podrska->prezime = $array[1];
                        $podrska->tip_podrske = "kompozitor";
                    }
                    elseif($duzina_niza == 1){
                        $podrska->ime = $array[0];
                        $podrska->tip_podrske = "kompozitor";
                    }

                    $podrska->save();
                }
                //ako smo nasli indeks,to znaci da je ta podrska student i upisujemo ga u tabelu PODRSKA_STUDENT
                else{
                    $id_studenta = $studenti[0]->id_studenta;
                    $podrska_student->Student_id_studenta = $id_studenta;
                    $podrska_student->Film_id_filma = $film->id;
                    $podrska_student->save();
                }
            }

            $scenograf_indeks = $request->input('scenograf');
            //ako je upisan scenograf,upisujemo ga u bazu
            if($scenograf_indeks != '0'){
                //trazimo studenta sa upisanim indeksom
                $studenti = Student::where('indeks', $scenograf_indeks)
                    ->get();

                //ako takav student ne postoji,to znaci da je to podrska koji nije student i upisuje se u tabelu PODRSKA
                if(!$studenti->first()){
                    $podrska->Film_id_filma = $film->id;
                    $array = explode(" ",$scenograf_indeks);

                    $duzina_niza = count($array);

                    if($duzina_niza == 2){
                        $podrska->ime = $array[0];
                        $podrska->prezime = $array[1];
                        $podrska->tip_podrske = "scenograf";
                    }
                    elseif($duzina_niza == 1){
                        $podrska->ime = $array[0];
                        $podrska->tip_podrske = "scenograf";
                    }

                    $podrska->save();
                }
                //ako smo nasli indeks,to znaci da je ta podrska student i upisujemo ga u tabelu PODRSKA_STUDENT
                else{
                    $id_studenta = $studenti[0]->id_studenta;
                    $podrska_student->Student_id_studenta = $id_studenta;
                    $podrska_student->Film_id_filma = $film->id;
                    $podrska_student->save();
                }
            }

            $kostimograf_indeks = $request->input('kostimograf');
            //ako je upisan kostimograf,upisujemo ga u bazu
            if($kostimograf_indeks != '0'){
                //trazimo studenta sa upisanim indeksom
                $studenti = Student::where('indeks', $kostimograf_indeks)
                    ->get();

                //ako takav student ne postoji,to znaci da je to podrska koji nije student i upisuje se u tabelu PODRSKA
                if(!$studenti->first()){
                    $podrska->Film_id_filma = $film->id;
                    $array = explode(" ",$kostimograf_indeks);

                    $duzina_niza = count($array);

                    if($duzina_niza == 2){
                        $podrska->ime = $array[0];
                        $podrska->prezime = $array[1];
                        $podrska->tip_podrske = "kostimograf";
                    }
                    elseif($duzina_niza == 1){
                        $podrska->ime = $array[0];
                        $podrska->tip_podrske = "kostimograf";
                    }

                    $podrska->save();
                }
                //ako smo nasli indeks,to znaci da je ta podrska student i upisujemo ga u tabelu PODRSKA_STUDENT
                else{
                    $id_studenta = $studenti[0]->id_studenta;
                    $podrska_student->Student_id_studenta = $id_studenta;
                    $podrska_student->Film_id_filma = $film->id;
                    $podrska_student->save();
                }
            }

            $sminker_indeks = $request->input('sminker');
            //ako je upisan kompozitor,upisujemo ga u bazu
            if($sminker_indeks != '0'){
                //trazimo studenta sa upisanim indeksom
                $studenti = Student::where('indeks', $sminker_indeks)
                    ->get();

                //ako takav student ne postoji,to znaci da je to podrska koji nije student i upisuje se u tabelu PODRSKA
                if(!$studenti->first()){
                    $podrska->Film_id_filma = $film->id;
                    $array = explode(" ",$sminker_indeks);

                    $duzina_niza = count($array);

                    if($duzina_niza == 2){
                        $podrska->ime = $array[0];
                        $podrska->prezime = $array[1];
                        $podrska->tip_podrske = "sminker";
                    }
                    elseif($duzina_niza == 1){
                        $podrska->ime = $array[0];
                        $podrska->tip_podrske = "sminker";
                    }


                    $podrska->save();
                }
                //ako smo nasli indeks,to znaci da je ta podrska student i upisujemo ga u tabelu PODRSKA_STUDENT
                else{
                    $id_studenta = $studenti[0]->id_studenta;
                    $podrska_student->Student_id_studenta = $id_studenta;
                    $podrska_student->Film_id_filma = $film->id;
                    $podrska_student->save();
                }
            }

        }
        else{
            $greska = "NIJE DOBRA VEZBA";
        }

        echo $greska;

        return view('forma', ['admin' => 1]);

    }
    
    public function getKartonView(Request $request) {
        return view('forma', ['admin' => 1]);
    } 


}
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
                $greska+= " Ovaj scenarista nije student";

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
                $greska+= " Ovaj montazer nije student";

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
                $greska+= " Ovaj producent nije student";
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
                $greska+= " Ovaj snimatelj nije student";
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

                $duzina_niza = count($glumac);

                echo $duzina_niza;

                if($duzina_niza == 2){
                    $glumac->ime = $array[0];
                    $glumac->prezime = $array[1];
                    $glumac->save();
                }
                else if($duzina_niza == 1){
                    $glumac->ime = $array[0];
                    $glumac->save();
                }

            }
            //ako smo nasli indeks,to znaci da je taj glumac student i upisujemo ga u tabelu GLUMAC_STUDENT
            else{
                $id_studenta = $studenti[0]->id_studenta;
                $glumac_student->Student_id_studenta = $id_studenta;
                $glumac_student->Film_id_filma = $film->id;
                $glumac_student->save();
            }
        }

        echo $greska;

        return view('forma');

    }


}
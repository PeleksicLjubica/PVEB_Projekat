<?php
/**
 * Created by PhpStorm.
 * User: milica
 * Date: 5/29/2016
 * Time: 6:06 PM
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Karton_prilog;
use App\Models\Predmet;
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
            $this->obradiPodrsku($specijalni_efekti_indeks,"specijalni efekti",$film);

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

        for ($i = 1; $i <= 6; $i++) {

            if ($request->hasFile('fileToUpload' . $i)) {
                $file = $request->file('fileToUpload' . $i);

                if ($file->isValid()) {

                    $filename = $file->getClientOriginalName();
                    try {
                        $tipovi = ['DVD','Blu-ray','fajl','rolna filma','verzija sa i bez engleskog titla',
                            'srpska i engleska dijalog listu','fotografija student','fotografija iz filma'];
                        $destinationPath = 'filmovi/' . $request->input('naziv_filma') . '_' . $id_filma;
                        $file->move($destinationPath, $filename);


                        $karton_prilog = new Karton_prilog();
                        $karton_prilog->Film_id_filma = $id_filma;
                        $karton_prilog->putanja = $destinationPath . "/" .$filename;
                        $karton_prilog->tip_priloga = $tipovi[$i-1];

                        $karton_prilog->save();



                    } catch (FileException $e) {
                        echo $e->getMessage();
                    }
                }
            }
        }


        $duzina = count($request->file('fileToUpload8'));

        if($duzina !== 1) {
            for ($i = 0; $i < $duzina; $i++) {


                $file = $request->file('fileToUpload8')[$i];



                if ($file->isValid()) {

                    $filename = $file->getClientOriginalName();
                    try {

                        $destinationPath = 'filmovi/' . $request->input('naziv_filma') . '_' . $id_filma;
                        $file->move($destinationPath, $filename);


                        $karton_prilog = new Karton_prilog();
                        $karton_prilog->Film_id_filma = $id_filma;
                        $karton_prilog->putanja = $destinationPath . "/" . $filename;
                        $karton_prilog->tip_priloga = 'fotografija iz filma';

                        $karton_prilog->save();

                        echo $karton_prilog->putanja . " " . $karton_prilog->putanja . " \n";


                    } catch (FileException $e) {
                        echo $e->getMessage();
                    }
                }

            }
        }





    }
    public function pretrazi(Request $request) {

        $film=Film::query();

        $naziv = $request->input('naziv_filma');


        if (strcmp('0',$naziv) != 0) {

            $naziv = $request->input('naziv_filma');

           $film = $film->where('id_filma', $naziv)->get();

            print_r(json_encode($film));

            if ($request->query('token')) {
                return view('index', ['admin' => 1, 'result' => json_encode($film)]);
            } else {
                return view('index', ['admin' => 0, 'result' => json_encode($film)]);
            }

        }

        else  {

            $godina_proizvodnje = $request->input('godina_proizvodnje');
            if(strcmp('0',$godina_proizvodnje) != 0) {
                $film = $film->where('godina_proizvodnje', $godina_proizvodnje)->get();
                print_r(json_encode($film));
            }

            $trajanje = $request->input('trajanje');
            if(strcmp('0',$trajanje) != 0) {
                $film = $film->where('trajanje', $trajanje)->get();
                print_r(json_encode($film));
            }

            $vezbe = $request->input('vezbe');
            if(strcmp('0',$vezbe) != 0) {
                $film = $film
                    ->join('vezba','vezba.id_vezbe', '=', 'Vezba_id_vezbe')
                    ->where('vezba.id_vezbe', $vezbe)
                    ->get();

                print_r(json_encode($film));
            }


            $predmet = $request->input('predmet');
            if(strcmp('0',$predmet) != 0) {

                $film = $film
                    ->join('vezba', 'vezba.id_vezbe', '=', 'Vezba_id_vezbe')
                    ->join('predmet', 'vezba.Predmet_id_predmeta', '=', 'predmet.id_predmeta')
                    ->where('predmet.id_predmeta', $predmet)
                    ->get();

                print_r(json_encode($film));
            }

            $reziser = $request->input('reziser');
            if(strcmp('0',$reziser) != 0) {

                $film = $film
                    ->join('reziser','reziser.Film_id_filma', '=', 'film.id_filma')
                    ->where('reziser.Student_id_studenta', $reziser)
                    ->get();

                print_r(json_encode($film));
            }


            $montazer = $request->input('montazer');
            if(strcmp('0',$montazer) != 0) {
                $film = $film
                    ->join('montazer','montazer.Film_id_filma', '=', 'film.id_filma')
                    ->where('montazer.Student_id_studenta', $montazer)
                    ->get();

                print_r(json_encode($film));
            }


            $producent = $request->input('producent');
            if(strcmp('0',$producent) != 0) {
                $film = $film
                    ->join('producent','producent.Film_id_filma', '=', 'film.id_filma')
                    ->where('producent.Student_id_studenta', $producent)
                    ->get();

                print_r(json_encode($film));
            }

            $scenarista = $request->input('scenarista');
            if(strcmp('0',$scenarista) != 0) {
                $film = $film
                    ->join('scenarista','scenarista.Film_id_filma', '=', 'film.id_filma')
                    ->where('scenarista.Student_id_studenta', $scenarista)
                    ->get();

                print_r(json_encode($film));
            }

            $snimatelj = $request->input('snimatelj');
            if(strcmp('0',$snimatelj) != 0) {

                $film = $film
                    ->join('snimatelj','snimatelj.Film_id_filma', '=', 'film.id_filma')
                    ->where('snimatelj.Student_id_studenta', $snimatelj)
                    ->get();

                print_r(json_encode($film));
            }

            /*TEHNICKA SPEC*/


            $osnovni_format = $request->input('osnovni_format');
            if(strcmp('0',$osnovni_format) != 0) {

                $film = $film
                    ->join('tehnicka_specifikacija','tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma')
                    ->where('tehnicka_specifikacija.osnovni_format', $osnovni_format)
                    ->get();

                print_r(json_encode($film));
            }

            $filmski_format = $request->input('filmski_format');
            if(strcmp('0',$filmski_format) != 0) {

                $film = $film
                    ->join('tehnicka_specifikacija','tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma')
                    ->where('tehnicka_specifikacija.filmski_format', $filmski_format)
                    ->get();

                print_r(json_encode($film));
            }


            $video_format = $request->input('video_format');
            if(strcmp('0',$video_format) != 0) {

                $film = $film
                    ->join('tehnicka_specifikacija','tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma')
                    ->where('tehnicka_specifikacija.video_format', $video_format)
                    ->get();

                print_r(json_encode($film));
            }


            $tel_standard = $request->input('tel_standard');
            if(strcmp('0',$tel_standard ) != 0) {

                $film = $film
                    ->join('tehnicka_specifikacija','tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma')
                    ->where('tehnicka_specifikacija.tel_standard', $tel_standard)
                    ->get();

                print_r(json_encode($film));
            }


            $analiza_slike = $request->input('analiza_slike');
            if(strcmp('0', $analiza_slike) != 0) {

                $film = $film
                    ->join('tehnicka_specifikacija','tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma')
                    ->where('tehnicka_specifikacija.analiza_slike', $analiza_slike)
                    ->get();

                print_r(json_encode($film));
            }


            $format_slike = $request->input('format_slike');
            if(strcmp('0', $format_slike) != 0) {

                $film = $film
                    ->join('tehnicka_specifikacija','tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma')
                    ->where('tehnicka_specifikacija.format_slike', $format_slike)
                    ->get();

                print_r(json_encode($film));
            }

            $slicice_sekund = $request->input('slicice_sekund');
            if(strcmp('0', $slicice_sekund) != 0) {

                $film = $film
                    ->join('tehnicka_specifikacija','tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma')
                    ->where('tehnicka_specifikacija.br_sl_sek', $slicice_sekund)
                    ->get();

                print_r(json_encode($film));
            }


            $video_nosac = $request->input('video_nosac');
            if(strcmp('0', $video_nosac) != 0) {

                $film = $film
                    ->join('tehnicka_specifikacija','tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma')
                    ->where('tehnicka_specifikacija.video_nosac', $video_nosac)
                    ->get();

                print_r(json_encode($film));
            }

            $vrsta_fajla = $request->input('vrsta_fajla');
            if(strcmp('0', $vrsta_fajla) != 0) {

                $film = $film
                    ->join('tehnicka_specifikacija','tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma')
                    ->where('tehnicka_specifikacija.vrsta_fajla', $vrsta_fajla)
                    ->get();

                print_r(json_encode($film));
            }

            $vrsta_zvuka = $request->input('vrsta_zvuka');
            if(strcmp('0', $vrsta_zvuka) != 0) {

                $film = $film
                    ->join('tehnicka_specifikacija','tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma')
                    ->where('tehnicka_specifikacija.zvuk', $vrsta_zvuka)
                    ->get();

                print_r(json_encode($film));
            }


            $broj_kanala = $request->input('broj_kanala');
            if(strcmp('0', $broj_kanala) != 0) {

                $film = $film
                    ->join('tehnicka_specifikacija','tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma')
                    ->where('tehnicka_specifikacija.broj_kanala', $broj_kanala)
                    ->get();

                print_r(json_encode($film));
            }


            $redukcija_suma = $request->input('redukcija_suma');
            if(strcmp('0', $redukcija_suma) != 0) {

                $film = $film
                    ->join('tehnicka_specifikacija','tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma')
                    ->where('tehnicka_specifikacija.redukcija_suma', $redukcija_suma)
                    ->get();

                print_r(json_encode($film));
            }




            if ($request->query('token')) {
                return view('index', ['admin' => 1, 'result' => json_encode($film)]);
            } else {
                return view('index', ['admin' => 0, 'result' => json_encode($film)]);
            }
        } //kraj else-a

    } //kraj fje

    /*kupi sve filmove*/
    public function getAll() {
        $film = Film::all();
        return response()->json(['data'=>$film]);
    }

    public function getFilm (Request $request, $id) {
        $film = new \stdClass();

        $film->informacije = Film::query()
            ->where('id_filma', $id)
            ->get();

        $film->tehnicka = Tehnicka_spacifikacija::query()
            ->where('Film_id_filma', $id)
            ->get();

        $film->osnovne = Osnovne_informacije::query()
            ->where('Film_id_filma', $id)
            ->get();

        $film->vezba = Vezba::query()
            ->where('id_vezbe', $film->informacije[0]->Vezba_id_vezbe)
            ->get();

        //katedre i profesor
        $film->predmet = Predmet::query()
            ->where('id_predmeta', $film->vezba[0]->Predmet_id_predmeta)
            ->get();

        $film->glumci = Glumac::query()
            ->where('Film_id_filma', $id)
            ->get();

        $film->glumci_studenti = Glumac_student::query()
            ->join('student', 'student.id_studenta', '=', 'glumac_student.Student_id_studenta')
            ->where('Film_id_filma', $id)
            ->get();

        $film->prilozi = Karton_prilog::query()
            ->where('Film_id_filma', $id)
            ->get();

        $film->montazeri = Montazer::query()
            ->join('student', 'student.id_studenta', '=', 'montazer.Student_id_studenta')
            ->where('Film_id_filma', $id)
            ->get();

        $film->nagrade = Nagrada::query()
            ->where('Film_id_filma', $id)
            ->get();

        $film->podrske = Podrska::query()
            ->where('Film_id_filma', $id)
            ->get();

        $film->kompozitori = [];
        $film->dizajneri_zvuka = [];
        $film->snimatelji_zvuka = [];
        $film->scenografi = [];
        $film->kostimografi = [];
        $film->animacije = [];
        $film->sminkeri = [];
        $film->spec_efekti = [];

        foreach ($film->podrske as $podrska) {
            switch($podrska->tip_podrske) {
                case 'kompozitor':
                    array_push($film->kompozitori, $podrska);
                    break;
                case 'dizajner zvuka':
                    array_push($film->dizajneri_zvuka, $podrska);
                    break;
                case 'snimatelj zvuka':
                    array_push($film->snimatelji_zvuka, $podrska);
                    break;
                case 'scenograf':
                    array_push($film->scenografi, $podrska);
                    break;
                case 'kostimograf':
                    array_push($film->kostimografi, $podrska);
                    break;
                case 'animacija':
                    array_push($film->animacije, $podrska);
                    break;
                case 'sminker':
                    array_push($film->sminkeri, $podrska);
                    break;
                case 'specijalni efekti':
                    array_push($film->spec_efekti, $podrska);
                    break;
            }
        }

        $film->podrske_studenti = Podrska_student::query()
            ->join('student', 'student.id_studenta', '=', 'podrska_student.Student_id_studenta')
            ->where('Film_id_filma', $id)
            ->get();

        $film->kompozitori_studenti = [];
        $film->dizajneri_zvuka_studenti = [];
        $film->snimatelji_zvuka_studenti = [];
        $film->scenografi_studenti = [];
        $film->kostimografi_studenti = [];
        $film->animacije_studenti = [];
        $film->sminkeri_studenti = [];
        $film->spec_efekti_studenti = [];

        foreach ($film->podrske_studenti as $podrska_student) {
            switch($podrska_student->tip_podrske) {
                case 'kompozitor':
                    array_push($film->kompozitori_studenti, $podrska_student);
                    break;
                case 'dizajner zvuka':
                    array_push($film->dizajneri_zvuka_studenti, $podrska_student);
                    break;
                case 'snimatelj zvuka':
                    array_push($film->snimatelji_zvuka_studenti, $podrska_student);
                    break;
                case 'scenograf':
                    array_push($film->scenografi_studenti, $podrska_student);
                    break;
                case 'kostimograf':
                    array_push($film->kostimografi_studenti, $podrska_student);
                    break;
                case 'animacija':
                    array_push($film->animacije_studenti, $podrska_student);
                    break;
                case 'sminker':
                    array_push($film->sminkeri_studenti, $podrska_student);
                    break;
                case 'specijalni efekti':
                    array_push($film->spec_efekti_studenti, $podrska_student);
                    break;
            }
        }

        $film->producenti = Producent::query()
            ->join('student', 'student.id_studenta', '=', 'producent.Student_id_studenta')
            ->where('Film_id_filma', $id)
            ->get();

        $film->reziseri = Reziser::query()
            ->join('student', 'student.id_studenta', '=', 'reziser.Student_id_studenta')
            ->where('Film_id_filma', $id)
            ->get();

        $film->scenaristi = Scenarista::query()
            ->join('student', 'student.id_studenta', '=', 'scenarista.Student_id_studenta')
            ->where('Film_id_filma', $id)
            ->get();

        $film->snimatelji = Snimatelj::query()
            ->join('student', 'student.id_studenta', '=', 'snimatelj.Student_id_studenta')
            ->where('Film_id_filma', $id)
            ->get();

        if ($request->query('token')) {
            return view('film', ['admin' => 1, 'film' => $film]);
        } else {
            return view('film', ['admin' => 0, 'film' => $film]);
        }

    }

}
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


class FilmController extends Controller
{
    //funkcija koja unosi u bazu sa katrona filma
    public function obradi(Request $request)
    {
        $greska = "";

        //instanciranje modela u koje smestamo podatke za unos u bazu
        $film = new Film;
        $osnovne_informacije = new Osnovne_informacije;
        $tehnicka_spacifikacija = new Tehnicka_spacifikacija;


        //trazenje id_vezbe preko naziva vezbe koji je korisnik uneo

        $id_vezbe = $request->input('naziv_vezbe');

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

        if ($duzina > 0) {
            //ako smo uneli neke studnte pravimo niz objekata reziser koji ce da se unose u bazu
            $arr = array();
            $i = 0;

            for (; $i < $duzina; $i++) {
                array_push($arr, new Reziser());
            }

            $i = 0;
            //za svakog unetog rezisera nalazi njegov id_studenta i unosi u tabelu Reziser u bazi
            foreach ($reziser_indeks as $value) {
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

        if ($duzina > 0) {
            //ako smo uneli neke studnte pravimo niz objekata scenarista koji ce da se unose u bazu
            $arr = array();
            $i = 0;

            for (; $i < $duzina; $i++) {
                array_push($arr, new Scenarista());
            }

            $i = 0;
            //za svakog unetog rezisera nalazi njegov id_studenta i unosi u tabelu Reziser u bazi
            foreach ($scenarista_indeks as $value) {
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

        if ($duzina > 0) {
            //ako smo uneli neke studnte pravimo niz objekata scenarista koji ce da se unose u bazu
            $arr = array();
            $i = 0;

            for (; $i < $duzina; $i++) {
                array_push($arr, new Montazer());
            }

            $i = 0;
            //za svakog unetog rezisera nalazi njegov id_studenta i unosi u tabelu Montazer u bazi
            foreach ($montazer_indeks as $value) {
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

        if ($duzina > 0) {
            //ako smo uneli neke studnte pravimo niz objekata scenarista koji ce da se unose u bazu
            $arr = array();
            $i = 0;

            for (; $i < $duzina; $i++) {
                array_push($arr, new Producent());
            }

            $i = 0;
            //za svakog unetog rezisera nalazi njegov id_studenta i unosi u tabelu Montazer u bazi
            foreach ($producent_indeks as $value) {
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

        if ($duzina > 0) {
            //ako smo uneli neke studnte pravimo niz objekata scenarista koji ce da se unose u bazu
            $arr = array();
            $i = 0;

            for (; $i < $duzina; $i++) {
                array_push($arr, new Snimatelj());
            }

            $i = 0;
            //za svakog unetog rezisera nalazi njegov id_studenta i unosi u tabelu Montazer u bazi
            foreach ($snimatelj_indeks as $value) {
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

        if ($duzina > 0) {
            //ako smo uneli neke studnte pravimo niz objekata scenarista koji ce da se unose u bazu
            $arr = array();
            $i = 0;

            for (; $i < $duzina; $i++) {
                array_push($arr, new Nagrada());
            }

            $i = 0;
            //za svakog unetog rezisera nalazi njegov id_studenta i unosi u tabelu Montazer u bazi
            foreach ($nagrada_naziv as $value) {

                $arr[$i]->naziv = $value;
                $arr[$i]->Film_id_filma = $film->id;
                $arr[$i]->save();

                $i++;
            }
        }


        //unos GLUMACA - ako se pronadje indeks,ubacuje se u tabelu GLUMAC_STUDENT,inace u GLUMAC
        $glumac_indeks = $request->input('glumci');
        $duzina = count($glumac_indeks);

        if ($duzina > 0) {
            //ako smo uneli neke studnte pravimo niz objekata scenarista koji ce da se unose u bazu

            foreach ($glumac_indeks as $value) {
                //trazimo studenta sa upisanim indeksom
                $studenti = Student::where('indeks', $value)
                    ->get();

                if (!$studenti->first()) {
                    $glumac = new Glumac();
                    $glumac->Film_id_filma = $film->id;
                    $glumac->ime_prezime = $value;
                    $glumac->save();

                } //ako smo nasli indeks,to znaci da je taj glumac student i upisujemo ga u tabelu GLUMAC_STUDENT
                else {
                    $glumac_student = new Glumac_student();

                    $glumac_student->Film_id_filma = $film->id;
                    $glumac_student->Student_id_studenta = $studenti[0]->id_studenta;
                    $glumac_student->save();

                }
            }
        }

        //pozivom funkcije obradi podrsku se dodaje podrska u bazu podataka
        $dizajner_zvuka_indeks = $request->input('dizajner_zvuka');
        $this->obradiPodrsku($dizajner_zvuka_indeks, "dizajner zvuka", $film);

        $specijalni_efekti_indeks = $request->input('specijalni_efekti');
        $this->obradiPodrsku($specijalni_efekti_indeks, "specijalni efekti", $film);

        $snimatelj_zvuka_indeks = $request->input('snimatelj_zvuka');
        $this->obradiPodrsku($snimatelj_zvuka_indeks, "snimatelj zvuka", $film);

        $animacija_indeks = $request->input('animacija');
        $this->obradiPodrsku($animacija_indeks, "animacija", $film);

        $kompozitor_indeks = $request->input('kompozitor');
        $this->obradiPodrsku($kompozitor_indeks, "kompozitor", $film);

        $scenograf_indeks = $request->input('scenograf');
        $this->obradiPodrsku($scenograf_indeks, "scenograf", $film);

        $kostimograf_indeks = $request->input('kostimograf');
        $this->obradiPodrsku($kostimograf_indeks, "kostimograf", $film);

        $sminker_indeks = $request->input('sminker');
        $this->obradiPodrsku($sminker_indeks, "sminker", $film);

        $this->premestiFajlove($request, $film->id);

        return view('forma', ['admin' => 1]);

    }

    //funkcija koja vraca pogled za karton filma
    public function getKartonView(Request $request)
    {
        return view('forma', ['admin' => 1]);
    }

    //funckcija kojom se unosi u tabelu podrska ili podrska_student u zavisnosti od toga
    //da li je unet student ili neko ko to nije
    public function obradiPodrsku($input, $uloga, $film)
    {
        $duzina = count($input);
        //ako je upisan dizajner zvuka,upisujemo ga u bazu

        if ($duzina > 0) {
            //ako smo uneli neke studnte pravimo niz objekata scenarista koji ce da se unose u bazu

            foreach ($input as $value) {
                //trazimo studenta sa upisanim indeksom
                $studenti = Student::where('indeks', $value)
                    ->get();

                //ako takav student ne postoji,unosi se u tabelu PODRSKA
                if (!$studenti->first()) {

                    $podrska = new Podrska();
                    $podrska->Film_id_filma = $film->id;
                    $podrska->tip_podrske = $uloga;
                    $podrska->ime_prezime = $value;
                    $podrska->save();

                } //ako smo nasli indeks,to znaci da je taj glumac student i upisujemo ga u tabelu PODRSKA_STUDENT
                else {
                    $podrska_student = new Podrska_student();
                    $podrska_student->Film_id_filma = $film->id;
                    $podrska_student->tip_podrske = $uloga;;
                    $podrska_student->Student_id_studenta = $studenti[0]->id_studenta;
                    $podrska_student->save();
                }
            }

        }

    }

    //funkcija koja fajlove koji se prilazu uz film smesta u direktorijum PUBLIC/FILMOVI
    //i unosi u tabelu KARTON_PRLOG putanju za svaki prilozeni fajl
    private function premestiFajlove(Request $request, $id_filma)
    {

        for ($i = 1; $i <= 6; $i++) {

            if ($request->hasFile('fileToUpload' . $i)) {
                $file = $request->file('fileToUpload' . $i);

                if ($file->isValid()) {

                    $filename = $file->getClientOriginalName();
                    try {
                        $tipovi = ['DVD', 'Blu-ray', 'fajl', 'rolna filma', 'verzija sa i bez engleskog titla',
                            'srpska i engleska dijalog listu', 'fotografija student', 'fotografija iz filma'];
                        $destinationPath = 'filmovi/' . $request->input('naziv_filma') . '_' . $id_filma;
                        $file->move($destinationPath, $filename);


                        $karton_prilog = new Karton_prilog();
                        $karton_prilog->Film_id_filma = $id_filma;
                        $karton_prilog->putanja = $destinationPath . "/" . $filename;
                        $karton_prilog->tip_priloga = $tipovi[$i - 1];

                        $karton_prilog->save();


                    } catch (FileException $e) {
                        echo $e->getMessage();
                    }
                }
            }
        }


        $duzina = count($request->file('fileToUpload8'));

        echo "DUZINA" . $duzina;

        for ($i = 0; $i < $duzina; $i++) {

            $file = $request->file('fileToUpload8')[$i];

            if ($file !== NULL) {

                if ($file->isValid()) {

                    $filename = $file->getClientOriginalName();

                    echo "IME FAJLA" . $filename;

                    if (strcmp($filename, "") !== 0) {

                        echo "UNOSIM FILM";

                        try {

                            $destinationPath = 'filmovi/' . $request->input('naziv_filma') . '_' . $id_filma;
                            $file->move($destinationPath, $filename);


                            $karton_prilog = new Karton_prilog();
                            $karton_prilog->Film_id_filma = $id_filma;
                            $karton_prilog->putanja = $destinationPath . "/" . $filename;
                            $karton_prilog->tip_priloga = 'fotografija iz filma';

                            $karton_prilog->save();

                        } catch (FileException $e) {
                            echo $e->getMessage();
                        }
                    }

                }

            }
        }
    }

    //funkcija koja pretrazuje filmove i vraca filmove koji zadovoljavaju pretragu u JSON formatu
    public function pretrazi(Request $request)
    {

        //indikatori da li je radjeno spajanje sa odredjenom tabelom
        $tehnicka_ind = 0;
        $vezba_ind = 0;
        $predmet_ind = 0;
        $katedra_ind = 0;
        $vezba_katedra_ind = 0;
        $profesor_ind = 0;
        $podrska_ind = 0;
        $podrska_student_ind = 0;

        $film = Film::query();

        //ako je izabran naziv filma,to jednoznacno odredjuje film,pa se vraca taj film
        $naziv = $request->input('naziv_filma');
        if (strcmp('0', $naziv) != 0) {

            //uzima se naziv iz forme
            $naziv = $request->input('naziv_filma');

            //upit gde se pretrazuje baza podataka
            $film = $film
                ->leftJoin('reziser', 'reziser.Film_id_filma', '=', 'film.id_filma')
                ->leftJoin('student','student.id_studenta','=','reziser.Student_id_studenta')
                ->leftJoin('osnovne_informacije','osnovne_informacije.film_id_filma','=','film.id_filma')
                ->where('id_filma', $naziv)
                ->select('film.id_filma','film.trajanje','film.godina_proizvodnje','film.naziv_filma','student.ime_prezime'
                ,'osnovne_informacije.sinopsis')
                ->get();
            
            return response()->json($film);


        } else {
            //ako naziv nije unesen,trazi se po ostalim parametrima

            //dodaje se tabela reziser zbog prikaza u rezultatima
            //left join se koristi zato sto nema svaki film unesenog rezisera
            $film = $film->leftJoin('reziser', 'reziser.Film_id_filma', '=', 'film.id_filma')
                ->leftJoin('student','student.id_studenta','=','reziser.Student_id_studenta')
                ->leftJoin('osnovne_informacije','osnovne_informacije.film_id_filma','=','film.id_filma');

            /***************************************OSNOVNE INF***************************************/
            //pretraga po osnovnim informacijama

            $glumci = $request->input("glumci");
            if(strcmp('0',$glumci) != 0){
                //ako je unesen podatak o glumcu gledamo da li smo dobili ime_prezime ili ime_prezime indeks
                $arr = explode(' ',$glumci);
                $duzina =count($arr);
                if($duzina === 1){
                    //ako smo dobili ime_prezime spaja se sa tabelom GLUMAC
                    $film = $film->join('glumac','film.id_filma','=','glumac.Film_id_filma')
                        ->where('glumac.ime_prezime',$arr[0]);

                }
                elseif($duzina === 2){
                    //inace se trazi u tabeli GLUMAC_STUDENT
                    $film = $film->join('glumac_student','film.id_filma','=','glumac_student.Film_id_filma')
                        ->where('student.indeks',$arr[1]);
                }

            }

            $godina_proizvodnje = $request->input('godina_proizvodnje');
            if (strcmp('0', $godina_proizvodnje) != 0) {
                $film = $film->where('godina_proizvodnje', $godina_proizvodnje);
            }

            $trajanje = $request->input('trajanje');
            if (strcmp('0', $trajanje) != 0) {
                $film = $film->where('trajanje', $trajanje);
            }

            $vezbe = $request->input('vezbe');
            if (strcmp('0', $vezbe) != 0){

                //ako nije spojena tabela vezba,ona se dodaje u upit
                if ($vezba_ind === 0) {
                    $film = $film
                        ->join('vezba', 'vezba.id_vezbe', '=', 'Vezba_id_vezbe');
                    $vezba_ind = 1;
                }
            //pretrazuje se po unetoj vezbi
            $film = $film->where('vezba.id_vezbe', $vezbe);
            }

            $god_studija = $request->input('godina_studija');
            if(strcmp('0', $god_studija) != 0){

                if($vezba_ind === 0){
                    $film = $film->join('vezba', 'vezba.id_vezbe', '=', 'film.Vezba_id_vezbe');
                    $vezba_ind = 1;
                }
                if($vezba_katedra_ind === 0){
                    $film = $film->join('vezba_katedra','vezba.id_vezbe','=','vezba_katedra.Vezba_id_vezbe');
                    $vezba_katedra_ind=1;
                }
                if($katedra_ind === 0){
                    $film = $film->join('katedra','vezba_katedra.Katedra_id_katedre','=','id_katedre');
                    $katedra_ind=1;
                }

                $film = $film->where('katedra.godina_studija',$god_studija);

            }

            $profesor = $request->input('profesor');
            if (strcmp('0', $profesor) != 0){
                if($vezba_ind === 0){
                    $film = $film->join('vezba', 'vezba.id_vezbe', '=', 'film.Vezba_id_vezbe');
                    $vezba_ind = 1;
                }
                if($vezba_katedra_ind === 0){
                    $film = $film->join('vezba_katedra','vezba.id_vezbe','=','vezba_katedra.Vezba_id_vezbe');
                    $vezba_katedra_ind=1;
                }
                if($katedra_ind === 0){
                    $film = $film->join('katedra','vezba_katedra.Katedra_id_katedre','=','id_katedre');
                    $katedra_ind=1;
                }
                if($profesor_ind === 0){
                    $film = $film->join('profesor','katedra.Profesor_id_profesora','=','profesor.id_profesora');
                    $profesor_ind=1;
                }

                $film = $film->where('id_profesora',$profesor);
            }

            $predmet = $request->input('predmet');
            if (strcmp('0', $predmet) != 0) {

                if ($vezba_ind === 0) {
                    $film = $film
                        ->join('vezba', 'vezba.id_vezbe', '=', 'Vezba_id_vezbe');
                    $vezba_ind = 1;
                }
                if ($predmet_ind === 0) {
                    $film = $film->join('predmet', 'vezba.Predmet_id_predmeta', '=', 'predmet.id_predmeta');
                    $predmet_ind = 1;
                }

                $film = $film->where('predmet.id_predmeta', $predmet);

            }

            $reziser = $request->input('reziser');
            if (strcmp('0', $reziser) != 0) {

                $film = $film
                    ->where('reziser.Student_id_studenta', $reziser);

            }

            $montazer = $request->input('montazer');
            if (strcmp('0', $montazer) != 0) {
                $film = $film
                    ->join('montazer', 'montazer.Film_id_filma', '=', 'film.id_filma')
                    ->where('montazer.Student_id_studenta', $montazer);
            }

            $producent = $request->input('producent');
            if (strcmp('0', $producent) != 0) {
                $film = $film
                    ->join('producent', 'producent.Film_id_filma', '=', 'film.id_filma')
                    ->where('producent.Student_id_studenta', $producent);
            }

            $scenarista = $request->input('scenarista');
            if (strcmp('0', $scenarista) != 0) {
                $film = $film
                    ->join('scenarista', 'scenarista.Film_id_filma', '=', 'film.id_filma')
                    ->where('scenarista.Student_id_studenta', $scenarista);

            }

            $snimatelj = $request->input('snimatelj');
            if (strcmp('0', $snimatelj) != 0) {
                $film = $film
                    ->join('snimatelj', 'snimatelj.Film_id_filma', '=', 'film.id_filma')
                    ->where('snimatelj.Student_id_studenta', $snimatelj);
            }

            $kompozitor=$request->input("kompozitor");
            if(strcmp('0',$kompozitor) != 0){
                //ako je unesen kompozitor,gleda se da li smo dobili ime_prezime ili ime_prezime_indeks
                $arr = explode(' ',$kompozitor);
                $duzina =count($arr);

                if($duzina === 1){
                    //ako smo dobili ime_prezime,pretrazuje se po tabeli PODRSKA
                    if($podrska_ind === 0){
                        $film = $film->join('podrska','film.id_filma','=','podrska.Film_id_filma');
                        $podrska_ind = 1;
                    }

                    $film = $film->where('podrska.ime_prezime',$arr[0])
                        ->where('podrska.tip_podrske',"kompozitor");
                }
                elseif($duzina === 2){
                    //inace se pretrazuje po tabeli PODRSKA_STUDENT
                    if($podrska_student_ind === 0){
                        $film = $film->join('podrska_student','film.id_filma','=','podrska_student.Film_id_filma');

                        $podrska_student_ind = 1;
                    }

                    $film = $film
                        ->where('student.indeks',$arr[1])
                        ->where('podrska_student.tip_podrske',"kompozitor");
                }
            }

            $dizajner_zvuka=$request->input("dizajner_zvuka");
            if(strcmp('0',$dizajner_zvuka) != 0){

                $arr = explode(' ',$dizajner_zvuka);
                $duzina =count($arr);

                if($duzina === 1){

                    if($podrska_ind === 0){
                        $film = $film->join('podrska','film.id_filma','=','podrska.Film_id_filma');
                        $podrska_ind = 1;
                    }

                    $film = $film->where('podrska.ime_prezime',$arr[0])
                        ->where('podrska.tip_podrske',"dizajner zvuka");
                }
                elseif($duzina === 2){
                    if($podrska_student_ind === 0){
                        $film = $film->join('podrska_student','film.id_filma','=','podrska_student.Film_id_filma');

                        $podrska_student_ind = 1;
                    }

                    $film = $film
                        ->where('student.indeks',$arr[1])
                        ->where('podrska_student.tip_podrske',"dizajner zvuka");
                }
            }

            $snimatelj_zvuka=$request->input("snimatelj_zvuka");
            if(strcmp('0',$snimatelj_zvuka) != 0){
                $arr = explode(' ',$snimatelj_zvuka);
                $duzina =count($arr);

                if($duzina === 1){

                    if($podrska_ind === 0){
                        $film = $film->join('podrska','film.id_filma','=','podrska.Film_id_filma');
                        $podrska_ind = 1;
                    }

                    $film = $film->where('podrska.ime_prezime',$arr[0])
                        ->where('podrska.tip_podrske',"snimatelj zvuka");
                }
                elseif($duzina === 2){
                    if($podrska_student_ind === 0){
                        $film = $film->join('podrska_student','film.id_filma','=','podrska_student.Film_id_filma');

                        $podrska_student_ind = 1;
                    }

                    $film = $film
                        ->where('student.indeks',$arr[1])
                        ->where('podrska_student.tip_podrske',"snimatelj zvuka");
                }
            }

            $scenograf=$request->input("scenograf");
            if(strcmp('0',$scenograf) != 0){
                $arr = explode(' ',$scenograf);
                $duzina =count($arr);

                if($duzina === 1){

                    if($podrska_ind === 0){
                        $film = $film->join('podrska','film.id_filma','=','podrska.Film_id_filma');
                        $podrska_ind = 1;
                    }

                    $film = $film->where('podrska.ime_prezime',$arr[0])
                        ->where('podrska.tip_podrske',"scenograf");
                }
                elseif($duzina === 2){
                    if($podrska_student_ind === 0){
                        $film = $film->join('podrska_student','film.id_filma','=','podrska_student.Film_id_filma');

                        $podrska_student_ind = 1;
                    }

                    $film = $film
                        ->where('student.indeks',$arr[1])
                        ->where('podrska_student.tip_podrske',"scenograf");
                }
            }

            $kostimograf=$request->input("kostimograf");
            if(strcmp('0',$kostimograf) != 0){
                $arr = explode(' ',$kostimograf);
                $duzina =count($arr);

                if($duzina === 1){

                    if($podrska_ind === 0){
                        $film = $film->join('podrska','film.id_filma','=','podrska.Film_id_filma');
                        $podrska_ind = 1;
                    }

                    $film = $film->where('podrska.ime_prezime',$arr[0])
                        ->where('podrska.tip_podrske',"kostimograf");
                }
                elseif($duzina === 2){
                    if($podrska_student_ind === 0){
                        $film = $film->join('podrska_student','film.id_filma','=','podrska_student.Film_id_filma');

                        $podrska_student_ind = 1;
                    }

                    $film = $film
                        ->where('student.indeks',$arr[1])
                        ->where('podrska_student.tip_podrske',"kostimograf");
                }
            }

            $animacija=$request->input("animacija");
            if(strcmp('0',$animacija) != 0){
                $arr = explode(' ',$animacija);
                $duzina =count($arr);

                if($duzina === 1){

                    if($podrska_ind === 0){
                        $film = $film->join('podrska','film.id_filma','=','podrska.Film_id_filma');
                        $podrska_ind = 1;
                    }

                    $film = $film->where('podrska.ime_prezime',$arr[0])
                        ->where('podrska.tip_podrske',"animacija");
                }
                elseif($duzina === 2){
                    if($podrska_student_ind === 0){
                        $film = $film->join('podrska_student','film.id_filma','=','podrska_student.Film_id_filma');

                        $podrska_student_ind = 1;
                    }

                    $film = $film
                        ->where('student.indeks',$arr[1])
                        ->where('podrska_student.tip_podrske',"animacija");
                }
            }

            $sminker=$request->input("sminker");
            if(strcmp('0',$sminker) != 0){
                $arr = explode(' ',$sminker);
                $duzina =count($arr);

                if($duzina === 1){

                    if($podrska_ind === 0){
                        $film = $film->join('podrska','film.id_filma','=','podrska.Film_id_filma');
                        $podrska_ind = 1;
                    }

                    $film = $film->where('podrska.ime_prezime',$arr[0])
                        ->where('podrska.tip_podrske',"sminker");
                }
                elseif($duzina === 2){
                    if($podrska_student_ind === 0){
                        $film = $film->join('podrska_student','film.id_filma','=','podrska_student.Film_id_filma');

                        $podrska_student_ind = 1;
                    }

                    $film = $film
                        ->where('student.indeks',$arr[1])
                        ->where('podrska_student.tip_podrske',"sminker");
                }
            }

            $specijani_efekti=$request->input("specijani_efekti");
            if(strcmp('0',$specijani_efekti) != 0){

                $arr = explode(' ',$specijani_efekti);
                $duzina =count($arr);

                if($duzina === 1){

                    if($podrska_ind === 0){
                        $film = $film->join('podrska','film.id_filma','=','podrska.Film_id_filma');
                        $podrska_ind = 1;

                    }

                    $film = $film->where('podrska.ime_prezime',$arr[0])
                        ->where('podrska.tip_podrske',"specijalni efekti");
                }
                elseif($duzina === 2){
                    if($podrska_student_ind === 0){
                        $film = $film->join('podrska_student','film.id_filma','=','podrska_student.Film_id_filma');

                        $podrska_student_ind = 1;
                    }

                    $film = $film
                        ->where('student.indeks',$arr[1])
                        ->where('podrska_student.tip_podrske',"specijani efekti");
                }
            }

            /***************************************TEHNICKA SPEC***************************************/
            //pretraga po tehnickoj specifikaciji

            $osnovni_format = $request->input('osnovni_format');
            if (strcmp('0', $osnovni_format) != 0) {

                if ($tehnicka_ind === 0) {

                    $film = $film
                        ->join('tehnicka_specifikacija', 'tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma');
                    $tehnicka_ind = 1;
                }

                $film = $film->where('tehnicka_specifikacija.osnovni_format', $osnovni_format);


            }

            $filmski_format = $request->input('filmski_format');
            if (strcmp('0', $filmski_format) != 0) {

                if ($tehnicka_ind === 0) {
                    $film = $film
                        ->join('tehnicka_specifikacija', 'tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma');
                    $tehnicka_ind = 1;
                }
                $film = $film->where('tehnicka_specifikacija.filmski_format', $filmski_format);


            }

            $video_format = $request->input('video_format');
            if (strcmp('0', $video_format) != 0) {

                if ($tehnicka_ind === 0) {
                    $film = $film
                        ->join('tehnicka_specifikacija', 'tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma');
                    $tehnicka_ind = 1;
                }

                $film = $film->where('tehnicka_specifikacija.video_format', $video_format);


            }

            $tel_standard = $request->input('tel_standard');
            if (strcmp('0', $tel_standard) != 0) {

                if ($tehnicka_ind === 0) {
                    $film = $film
                        ->join('tehnicka_specifikacija', 'tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma');
                    $tehnicka_ind = 1;
                }

                $film = $film->where('tehnicka_specifikacija.tel_standard', $tel_standard);


            }

            $analiza_slike = $request->input('analiza_slike');
            if (strcmp('0', $analiza_slike) != 0) {

                if ($tehnicka_ind === 0) {
                    $film = $film
                        ->join('tehnicka_specifikacija', 'tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma');

                    $tehnicka_ind = 1;
                }

                $film = $film->where('tehnicka_specifikacija.analiza_slike', $analiza_slike);

            }

            $format_slike = $request->input('format_slike');
            if (strcmp('0', $format_slike) != 0) {

                if ($tehnicka_ind === 0) {
                    $film = $film
                        ->join('tehnicka_specifikacija', 'tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma');
                    $tehnicka_ind = 1;
                }

                $film = $film->where('tehnicka_specifikacija.format_slike', $format_slike);


            }

            $slicice_sekund = $request->input('slicice_sekund');
            if (strcmp('0', $slicice_sekund) != 0) {

                if ($tehnicka_ind === 0) {
                    $film = $film
                        ->join('tehnicka_specifikacija', 'tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma');
                    $tehnicka_ind = 1;
                }

                $film = $film->where('tehnicka_specifikacija.br_sl_sek', $slicice_sekund);


            }

            $video_nosac = $request->input('video_nosac');
            if (strcmp('0', $video_nosac) != 0) {

                if ($tehnicka_ind === 0) {
                    $film = $film
                        ->join('tehnicka_specifikacija', 'tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma');
                    $tehnicka_ind = 1;
                }

                $film = $film->where('tehnicka_specifikacija.video_nosac', $video_nosac);


            }

            $vrsta_fajla = $request->input('vrsta_fajla');
            if (strcmp('0', $vrsta_fajla) != 0) {

                if ($tehnicka_ind === 0) {
                    $film = $film
                        ->join('tehnicka_specifikacija', 'tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma');

                    $tehnicka_ind = 1;
                }
                    $film = $film->where('tehnicka_specifikacija.vrsta_fajla', $vrsta_fajla);


            }

            $vrsta_zvuka = $request->input('vrsta_zvuka');
            if (strcmp('0', $vrsta_zvuka) != 0) {

                if ($tehnicka_ind === 0) {
                    $film = $film
                        ->join('tehnicka_specifikacija', 'tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma');
                    $tehnicka_ind = 1;
                }

                $film = $film->where('tehnicka_specifikacija.zvuk', $vrsta_zvuka);

            }

            $broj_kanala = $request->input('broj_kanala');
            if (strcmp('0', $broj_kanala) != 0) {

                if ($tehnicka_ind === 0) {
                    $film = $film
                        ->join('tehnicka_specifikacija', 'tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma');
                    $tehnicka_ind = 1;
                }

                $film = $film->where('tehnicka_specifikacija.broj_kanala', $broj_kanala);

            }

            $redukcija_suma = $request->input('redukcija_suma');
            if (strcmp('0', $redukcija_suma) != 0) {

                if ($tehnicka_ind === 0) {
                    $film = $film
                        ->join('tehnicka_specifikacija', 'tehnicka_specifikacija.Film_id_filma', '=', 'film.id_filma');

                    $tehnicka_ind = 1;
                }

                $film = $film->where('tehnicka_specifikacija.redukcija_suma', $redukcija_suma);

            }

            //biramo kolone koje zelimo da se salju i izvrsavamo upit
            $film = $film->select('film.id_filma','film.trajanje','film.godina_proizvodnje','film.naziv_filma','student.ime_prezime'
                ,'osnovne_informacije.sinopsis')
                ->get();


            return response()->json($film);


        } //kraj else-a


    } //kraj fje

    /*kupi sve filmove*/
    public function getAll() {
        $film = Film::all();

        return response()->json(['data'=>$film]);
    }

    public function getAllDistinctGodina() {

        $film = Film::query()
            ->select('godina_proizvodnje')
            ->distinct()
            ->get();

        return response()->json(['data'=>$film]);
    }

    public function getAllDistinctTrajanje() {

        $film = Film::query()
            ->select('trajanje')
            ->distinct()
            ->get();

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

    public function downloadPrilog(Request $request, $id) {
        $prilog = Karton_prilog::query()
                    ->where('id_priloga', $id)
                    ->get();

        return response()->download($prilog[0]->putanja);
    }

}
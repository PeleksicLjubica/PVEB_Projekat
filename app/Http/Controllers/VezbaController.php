<?php
/**
 * Created by PhpStorm.
 * User: Ljubica
 * Date: 22.5.2016
 * Time: 22:19
 * kontroler koji se odnosi na uzimanje podataka o vežbama iz baze
 */

namespace App\Http\Controllers;

use App\Models\Vezba;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VezbaController extends Controller{

    //funkcija koja uzima sve vezbe iz baze a zatim se redirektuje na vezbe.php gde se one prikazuju
    public function getAll(){
        $vezbe = Vezba::all();
        return view('vezbe',['vezba' => $vezbe[0], 'admin' => 1]);

    }

}
<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Osnovne_informacije extends Model
{
    protected $table='Osnovne_informacije';
    //ova opcija se koristi da bi se sklonile kolone updated_at i modified_at
    public $timestamps=false;
}
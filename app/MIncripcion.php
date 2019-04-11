<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MIncripcion extends Model{
    public $timestamps=false;
    protected $table='inscripcion';
    protected $primaryKey = 'IdInscripcion';
}

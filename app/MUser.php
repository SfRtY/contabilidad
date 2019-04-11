<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MUser extends Model
{
    public $timestamps=false;
    protected $table='users';
    protected $primaryKey = 'id';
}

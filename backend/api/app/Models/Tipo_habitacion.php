<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Habitacion;

class Tipo_habitacion extends Model
{
    protected $table='tipo_habitaciones';

    public function habitaciones(){
        return $this->hasMany(Habitacion::class);
    }
}

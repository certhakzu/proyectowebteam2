<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cliente extends Model
{
    use Notifiable;

    public $timestamps=false;
    protected $table='clientes';
    protected $primaryKey='doc';
    protected $fillable=['doc','nombre','apellidos','correo','clave','registro'];
    
    public function reservas(){
        return $this->hasMany(Reserva::class);
    }
}

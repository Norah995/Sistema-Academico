<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
    //  
    public function carreras()
    {
        return $this->belongsTo('App\Carrera');
    }

    public function usuarios()
    {
        return $this->belongsTo('App\Usuario');
    }

    public function turnos()
    {
        return $this->belongsToMany('App\Turno','administrativo_turno','administrativo_idAdministrativo','turno_idTurno');
    }
}

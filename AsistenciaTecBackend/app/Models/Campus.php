<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'state_name',
        'municipality',

        'token',
        'estatus',
        'user_reg',
        'user_mod',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $hidden = [
        'user_reg',
        'user_mod',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Este metoodo determina cuantos puertas estan relaciondas a un solo campus
     * Pues es una relacion de uno (Campus) a muchos(puertas)
     * 
     * Lo implemento para el filtrado de campus en la vista donde el guardia 
     * seleccione su campus, para que no pueda elegir campus sin puertas
     * ya que no lo dejaria trabajar, incluso si no hay campus mandar un mensaje de 
     * que contacte al administrador
     * 
     * @author Eduardo Agustin Cervantes Guerrero <23240389@leon.tecnm.mx>
     * @author Manuel Villalobos Infante <23240960@leon.tecnm.mx>
     * @version 1.0
     * @return HasMany
     *
     */
    public function DoorAccess() 
    {
        return $this->hasMany(DoorAccess::class);
    }
}

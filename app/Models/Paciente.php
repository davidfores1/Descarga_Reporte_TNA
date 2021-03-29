<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cod_interno',
        'documento',
        'nombre',
        'edad',
        'fecha_recepcion'
    ];


    public function scopeDocumento($query, $documento){

        if($documento)
        return $query->where('documento',$documento);
    }

    public function scopeNombre($query, $nombre){

        if($nombre)
        return $query->where('nombre','LIKE', "%$nombre%");
    }
}

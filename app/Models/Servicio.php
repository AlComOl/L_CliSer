<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'servicios';
    protected $fillable = ['nombre','descripcion','codigo'];

    public function clientes(){
        return $this-> belongsToMany(Cliente::class);

    }
}

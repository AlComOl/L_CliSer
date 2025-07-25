<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;
    
    protected $table ='clientes';
    protected $fillable =['nombre','edad','email'];

    public function servicios(){
        return $this->belongsToMany(Servicio::class);
    }
}

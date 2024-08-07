<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    use HasFactory;
    protected $table = "imagens";
    //app/Models/
    protected $fillable = [
    "nome",
    "imagem",
    "galeria_id",


    ];

    public function galerias()
    {
        return $this->belongsTo(Galeria::class);
    }
}

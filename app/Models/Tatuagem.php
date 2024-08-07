<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tatuagem extends Model
{
    use HasFactory;

    protected $table = "tatuagens";
    //app/Models/
    protected $fillable = [
        "profissional_id",
        "descricao",
        "local",
        "tamanho",
        "estilo",
        "data",
    ];

    protected $casts = [
        'profissional_id' => 'integer',

    ];

    public function profissionais()
    {
        return $this->belongsTo(Profissional::class);
    }
}



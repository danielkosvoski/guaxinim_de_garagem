<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    use HasFactory;
    protected $table = "profissionais";
    //app/Models/
    protected $fillable = [
        "nome",
        "especialidade_id",
        "contato",
        "descricao",
      ];

    protected $casts = [
        'especialidade_id' => 'integer'
    ];

    public function tatuagens()
    {
        return $this->hasMany(Tatuagem::class);
    }

    public function piercings()
    {
        return $this->hasMany(Piercing::class);
    }


    public function especialidades()
    {

        return $this->belongsTo(Especialidade::class);
    }

    public function galerias()
    {

        return $this->hasOne(Galeria::class);
    }
}

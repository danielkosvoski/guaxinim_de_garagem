<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;
    protected $table = "galerias";
    //app/Models/
    protected $fillable = [
    "nome",
    "profissional_id",


    ];

    public function profissionais()
    {
        return $this->belongsTo(Profissional::class);
    }
}

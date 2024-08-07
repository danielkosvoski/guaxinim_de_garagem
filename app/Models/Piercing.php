<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piercing extends Model
{
    use HasFactory;

    protected $table = "piercings";
    //app/Models/
    protected $fillable = [
        "profissional_id",
        "local",
        "modelo",
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

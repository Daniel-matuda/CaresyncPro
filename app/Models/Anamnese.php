<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anamnese extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function exames()
    {
        return $this->hasMany(Exame::class, 'anamnese_id');
    }
}

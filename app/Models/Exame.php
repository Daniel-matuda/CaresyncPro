<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exame extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function anamnese()
    {
        return $this->BelongsTo(Anamnese::class, 'anamnese_id');
    }

}

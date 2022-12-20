<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'fecha_creacion',
        'team_average',
        'number_of_players',
        'sport_id'
    ];

    public function sport(){
        return $this->belongsTo(Sport::class);
    }
}

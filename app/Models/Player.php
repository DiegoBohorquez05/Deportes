<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model 
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last-name',
        'age',
        'nationality',
        'stars',
        'team_id'
    ];

    public function team(){
        return $this->belongsTo(Team::class);
    }
}

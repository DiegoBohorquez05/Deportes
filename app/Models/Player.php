<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Spatie\Permission\Traits\HasRoles;

class Player extends Model implements JWTSubject
{
    use HasFactory, HasRoles;

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

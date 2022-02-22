<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laptimes extends Model
{
    use HasFactory;

    protected $table = "laptimes";

    protected $fillable = ['player_id', 'laptime'];

    public function racer(){
            return $this->belongsTo('App\Models\User', 'player_id');
    }
}

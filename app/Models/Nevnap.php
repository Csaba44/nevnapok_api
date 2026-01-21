<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nevnap extends Model
{
    protected $table = "nevnapok";
    protected $fillable = [
        "nev1",
        "nev2",
        "ho",
        "nap",
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/* Ity model ity dia efa objet iray
    Tsy voatery hoe anarana ilay table foana no atao anaran'ilay model
*/

class Utilisateur extends Model
{
    use HasFactory;
    /* eto zao no-mentionner-ko teto ilay anaran'ilay table ao @ BDD, 
    raha tsy nisy an'io de le anaran'ilay model no alainy Laravel */
    protected $table = "users";
}

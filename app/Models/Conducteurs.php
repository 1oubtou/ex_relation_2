<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conducteurs extends Model
{
    use HasFactory;
    protected $fillable = [ 'nom', 'prenom', 'lage', 'n_cin', 'telephone', 'adresse' ];
}

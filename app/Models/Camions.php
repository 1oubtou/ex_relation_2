<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camions extends Model
{
    use HasFactory;
    protected $fillable = [ 'number' ];

    public function dashbords()
    {
        return $this->hasMany(Dashboard::class , 'camion_id' , 'id');
    }
    
    public function dashbords_en_cous()
    {
        return $this->hasMany(Dashboard::class , 'camion_id' , 'id')->where('statut','En Cours');
    }
    
    public function dashbords_annuler()
    {
        return $this->hasMany(Dashboard::class , 'camion_id' , 'id');
    }

    public function dashbords_complet()
    {
        return $this->hasMany(Dashboard::class , 'camion_id' , 'id');
    }
}

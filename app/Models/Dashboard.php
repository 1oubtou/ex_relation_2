<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;
    protected $fillable = [ 'destination_id', 'conducteur_id', 'camion_id', 'statut', 'complete' ];

    public function camions()
    {
        return $this->belongsTo(Camions::class, 'camion_id');
    }

    public function destination()
    {
        return $this->belongsTo(Destinations::class, 'destination_id');
    }

    public function conducteurs()
    {
        return $this->belongsTo(Conducteurs::class, 'conducteur_id');
    }
}

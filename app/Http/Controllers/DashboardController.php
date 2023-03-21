<?php

namespace App\Http\Controllers;

use App\Models\Camions;
use App\Models\Conducteurs;
use App\Models\Dashboard;
use App\Models\Destinations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    
    public function index()
    {
        $dashboards = Dashboard::select('camion_id', 'conducteur_id')->where('statut', 'sorti')->get();
        $camions = Camions::whereNotIn('id', $dashboards->pluck('camion_id'))->get();
        $conducteurs = Conducteurs::whereNotIn('id', $dashboards->pluck('conducteur_id'))->get();
        // dd($conducteurs,$dashboards);


        // $dashboards = Dashboard::select('camion_id')->where('statut' , 'sorti')->get();
        // $conducteur = Dashboard::select('conducteur_id')->where('statut' , 'sorti')->get();
        // $camions = Camions::whereNotIn('id' , $dashboards )->get();
        // $conducteurs = Conducteurs::whereNotIn('id' , $conducteur )->get();
        
        $destinations = Destinations::all();
        $dashboard = Dashboard::paginate(8);
        
        $total_camion = Camions::count();
        $total_conducteurs = Conducteurs::count();
        return view('resultat.dashboard', [
            'camion' => $camions,
            'conducteurs' => $conducteurs,
            'destinations' => $destinations,
            'dashboard' => $dashboard,

            'total_camion' => $total_camion,
            'total_conducteurs' => $total_conducteurs,
        ]);
    }

    
    public function store(Request $request)
    {
        $request->validate([ 'camion_id' => 'required|integer', 'conducteur_id' => 'required|integer', 'destination_id' => 'required|integer', ],[
            'camion_id.integer' => 'Veuillez select un numéro de camion',
            'conducteur_id.integer' => 'Veuillez select de conducteur',
            'destination_id.integer' => 'Veuillez select de destination',
        ]);
        Dashboard::create([
            'camion_id' =>$request->camion_id,
            'conducteur_id' =>$request->conducteur_id,
            'destination_id' =>$request->destination_id,
            'statut' => 'sorti',
        ]);
        return redirect()->route('dashboard_index');
    }

    
    public function show($id)
    {
        $dashboard = Dashboard::find($id);
        return view('resultat.view', compact('dashboard'));
    }

    
    public function annule($id)
    {
        $dashboard = Dashboard::find($id);
        $dashboard->statut = 'annule';
        $dashboard->save();
        return redirect()->route('dashboard_index');
    }
    
    public function complete($id)
    {
        $dashboard = Dashboard::find($id);
        $dashboard->statut = 'complete';
        $dashboard->save();
        return redirect()->route('dashboard_index');
    }
}

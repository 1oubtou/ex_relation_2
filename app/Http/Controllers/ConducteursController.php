<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatStoreConducteursRequest;
use App\Models\Camions;
use App\Models\Conducteurs;
use App\Models\Destinations;
use Illuminate\Http\Request;

class ConducteursController extends Controller
{
    
    public function index()
    {
        $conducteurs = Conducteurs::paginate(5);
        return view('conducteurs.index', compact('conducteurs'));
    }

    
    public function create()
    {
        return view('Conducteurs.creat');
    }

    
    public function store(CreatStoreConducteursRequest $request)
    {
        Conducteurs::create([
            'nom' =>$request->nom,
            'prenom' =>$request->prenom,
            'lage' =>$request->lage,
            'n_cin' =>$request->n_cin,
            'adresse' =>$request->adresse,
            'telephone' =>$request->telephone,
        ]);

        return redirect()->route('conducteurs_index');
    }

    
    public function show($id)
    {
        $conducteurs = Conducteurs::find($id);
        return view('conducteurs.view', compact('conducteurs'));
    }

    
    public function edit($id)
    {
        $conducteurs = Conducteurs::find($id);
        return view('Conducteurs.update', compact('conducteurs'));
    }

    
    public function update(CreatStoreConducteursRequest $request, $id)
    {
        $conducteurs_up = Conducteurs::find($id);

        $conducteurs_up->nom = $request->nom;
        $conducteurs_up->prenom = $request->prenom;
        $conducteurs_up->lage = $request->lage;
        $conducteurs_up->n_cin = $request->n_cin;
        $conducteurs_up->adresse = $request->adresse;
        $conducteurs_up->telephone = $request->telephone;

        $conducteurs_up->save();
        return redirect()->route('conducteurs_index');
    }

    
    public function destroy($id)
    {
        Conducteurs::find($id)->delete();
        return redirect()->route('conducteurs_index');
    }
}

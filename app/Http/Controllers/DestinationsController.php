<?php

namespace App\Http\Controllers;

use App\Models\Camions;
use App\Models\Destinations;
use Illuminate\Http\Request;

class DestinationsController extends Controller
{
    
    public function index()
    {
        $destinations = Destinations::paginate(5);
        return view('destinations.index', compact('destinations'));
    }

    
    public function create()
    {
        $camions = Camions::all();
        return view('destinations.creat', compact('camions'));
    }

    
    public function store(Request $request)
    {
        $request->validate([ 'ville' => 'required|string|unique:destinations,ville' ],
        [
            'ville.unique' => 'Ce Destination existe déjà',
        ]);
        Destinations::create([
            'ville' => $request->ville,
        ]);
        return redirect()->route('destinations_index');
    }

    
    public function show($id)
    {
        $destinations = Destinations::find($id);
        return view('destinations.view', compact('destinations'));
    }

    
    public function edit($id)
    {
        $destinations = Destinations::find($id);
        return view('destinations.update', compact('destinations'));
    }

    
    public function update(Request $request, $id)
    {
        $destinations = Destinations::find($id);
        if ( $request->ville != $destinations->ville ) {
            $request->validate([ 'ville' => 'required|string|unique:destinations,ville' ],
            [
                'ville.unique' => 'Ce Destination existe déjà',
            ]);

            $destinations->ville = $request->ville;
            $destinations->save();
            
            return redirect()->route('camions_index');

        }else {
            $request->validate([ 'ville' => 'required|string' ],
            [
                'ville.string' => 'Veuillez entrer un nom ville',
            ]);

            $destinations->ville = $request->ville;
            $destinations->save();
            
            return redirect()->route('destinations_index');
        }
    }

    
    public function destroy($id)
    {
        Destinations::find($id)->delete();
        return redirect()->route('destinations_index');
    }
}

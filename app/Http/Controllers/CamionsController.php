<?php

namespace App\Http\Controllers;

use App\Models\Camions;
use Illuminate\Http\Request;

class CamionsController extends Controller
{
    
    public function index()
    {
        $camions = Camions::paginate(5);
        return view('camions.index', compact('camions'));
    }

    
    public function create()
    {
        return view('camions.creat');
    }

    
    public function store(Request $request)
    {
        $request->validate([ 'number' => 'required|integer|unique:camions,number' ],
        [
            'number.integer' => 'Veuillez entrer un numéro de camion valide',
            'number.unique' => 'Ce numéro existe déjà',
        ]);
        Camions::create([
            'number' => $request->number,
        ]);
        return redirect()->route('camions_index');
    }

    
    public function show($id)
    {
        $gps = Camions::find($id);
        return view('camions.view', compact('gps'));
    }

    
    public function edit($id)
    {
        $gps_edit = Camions::find($id);
        return view('camions.update', compact('gps_edit'));
    }

    
    public function update(Request $request, $id)
    {
        $gps_up = Camions::find($id);
        if ( $request->number != $gps_up->number ) {
            $request->validate([ 'number' => 'required|integer|unique:camions,number' ],
            [
                'number.integer' => 'Veuillez entrer un numéro de camion valide',
                'number.unique' => 'Ce numéro existe déjà',
            ]);

            $gps_up->number = $request->number;
            $gps_up->save();
            
            return redirect()->route('camions_index');

        }else {
            $request->validate([ 'number' => 'required|integer' ],
            [
                'number.integer' => 'Veuillez entrer un numéro de camion valide',
            ]);

            $gps_up->number = $request->number;
            $gps_up->save();
            
            return redirect()->route('camions_index');
        }
    }

    
    public function destroy($id)
    {
        Camions::find($id)->delete();
        return redirect()->route('camions_index');
    }
}

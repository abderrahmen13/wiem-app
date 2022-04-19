<?php

namespace App\Http\Controllers;

use App\Models\Recruteur;
use App\Http\Requests\StoreRecruteurRequest;
use App\Http\Requests\UpdateRecruteurRequest;

class RecruteurController extends Controller
{
    public function index()
    {
        return Recruteur::all();
    }
 
    public function show($id)
    {
        return Recruteur::find($id);
    }

    public function store(Request $request)
    {
        return Recruteur::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $recruteur = Recruteur::findOrFail($id);
        $recruteur->update($request->all());

        return $recruteur;
    }

    public function delete(Request $request, $id)
    {
        $recruteur = Recruteur::findOrFail($id);
        $recruteur->delete();

        return 204;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Profil;

class ProfilController extends Controller
{
    public function index()
    {
        return Profil::all();
    }
 
    public function show($id)
    {
        return Profil::find($id);
    }

    public function store(Request $request)
    {
        return Profil::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);
        $profil->update($request->all());

        return $profil;
    }

    public function delete(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);
        $profil->delete();

        return 204;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\DomaineCompetence;

class DomaineCompetenceController extends Controller
{
    public function index()
    {
        return DomaineCompetence::all();
    }
 
    public function show($id)
    {
        return DomaineCompetence::find($id);
    }

    public function store(Request $request)
    {
        return DomaineCompetence::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $domaineCompetence = DomaineCompetence::findOrFail($id);
        $domaineCompetence->update($request->all());

        return $domaineCompetence;
    }

    public function delete(Request $request, $id)
    {
        $domaineCompetence = DomaineCompetence::findOrFail($id);
        $domaineCompetence->delete();

        return 204;
    }
}

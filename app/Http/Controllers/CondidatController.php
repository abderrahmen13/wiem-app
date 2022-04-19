<?php

namespace App\Http\Controllers;

use App\Models\Condidat;
use App\Http\Requests\StoreCondidatRequest;
use App\Http\Requests\UpdateCondidatRequest;

class CondidatController extends Controller
{
    public function index()
    {
        return Condidat::all();
    }
 
    public function show($id)
    {
        return Condidat::find($id);
    }

    public function store(Request $request)
    {
        return Condidat::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $condidat = Condidat::findOrFail($id);
        $condidat->update($request->all());

        return $condidat;
    }

    public function delete(Request $request, $id)
    {
        $condidat = Condidat::findOrFail($id);
        $condidat->delete();

        return 204;
    }
}

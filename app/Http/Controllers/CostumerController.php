<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    public function index()
    {
        $costumers = Costumer::all()->toArray();
        return array_reverse($costumers);
    }

    public function store(Request $request)
    {
        $costumers = new Costumer([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone')
        ]);
        $costumers->save();
        return response()->json('Costumer created!');
    }

    public function show($id)
    {
        $costumers = Costumer::find($id);
        return response()->json($costumers);
    }

    public function update($id, Request $request)
    {
        $costumers = Costumer::find($id);
        $costumers->update($request->all());
        return response()->json('Costumer updated!');
    }

    public function destroy($id)
    {
        $costumers = Costumer::find($id);
        $costumers->delete();
        return response()->json('Costumer deleted!');
    }
}

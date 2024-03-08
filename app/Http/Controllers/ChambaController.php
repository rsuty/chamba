<?php

namespace App\Http\Controllers;

use App\Models\Chamba;
use App\Models\Trabajo;
use Illuminate\Http\Request;

class ChambaController extends Controller
{
    //
    public function create()
    {
        $trabajos = Trabajo::all();
        return view("chamba.create", ["jobs" => $trabajos]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "title" => "required|max:255",
            "description" => "required",
            "trabajo_id" => "required|numeric",
            "user_id" => "required|numeric"
        ]);
        Chamba::create($validatedData);
        return redirect()->back()->with("success", "Chamba creada con éxito");
    }
}

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
        $chamba = new Chamba();
        $chamba->title = $request->title;
        $chamba->description = $request->description;
        $chamba->trabajo_id = $request->trabajo_id;
        $chamba->user_id = $request->user_id;
        $chamba->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->store('images');
                $chamba->images()->create(['filename' => $filename]);
            }
        }
        return redirect()->route('chamba.create');
    }
}

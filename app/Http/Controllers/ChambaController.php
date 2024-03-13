<?php

namespace App\Http\Controllers;

use App\Models\Chamba;
use App\Models\Trabajo;
use Illuminate\Http\Request;

class ChambaController extends Controller
{
    //
    public function show($id)
    {
        $chamba = Chamba::where('id' , $id)->firstOrFail();
        return view("chamba.show", ["chamba" => $chamba]);
    }

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
        $chamba->worker_id = $request->worker_id;
        $chamba->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->move('images', $image->getClientOriginalName());
                $chamba->images()->create(['filename' => $filename]);
            }
        }
        return redirect()->route('chamba.create');
    }
}

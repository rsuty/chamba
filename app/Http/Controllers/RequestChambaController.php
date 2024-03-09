<?php

namespace App\Http\Controllers;

use App\Models\RequestChamba;
use Illuminate\Http\Request;

class RequestChambaController extends Controller
{
    //
    public function store(Request $request)
    {
        $requestChamba = new RequestChamba();
        $requestChamba->user_id = $request->user_id;
        $requestChamba->chamba_id = $request->chamba_id;
        $requestChamba->save();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\RequestChamba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestChambaController extends Controller
{
    //
    public function index()
    {
        $auth_user_id = Auth::user()->id;
        $requests = RequestChamba::where('worker_id', $auth_user_id)->get();
        return view('requests.index', ["requests" => $requests]);
    }

    public function store(Request $request)
    {
        $client_id = Auth::user()->id;
        $requestChamba = new RequestChamba();
        $requestChamba->client_id = $client_id;
        $requestChamba->worker_id = $request->worker_id;
        $requestChamba->chamba_id = $request->chamba_id;
        $requestChamba->save();
        return redirect()->back();
    }
}

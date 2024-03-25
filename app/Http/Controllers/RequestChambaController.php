<?php

namespace App\Http\Controllers;

use App\Models\RequestChamba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RequestChambaController extends Controller
{
    //
    public function index()
    {
        $auth_user_id = Auth::user()->id;
        $requests = RequestChamba::where('worker_id', $auth_user_id)->get();
        $info = DB::table('request_chambas as rc')
            ->join('users as client', 'rc.client_id', '=', 'client.id')
            ->join('users as worker', 'rc.worker_id', '=', 'worker.id')
            ->join('chambas', 'rc.chamba_id', '=', 'chambas.id')
            ->select('rc.*', 'client.name as client_name', 'worker.name as worker_name', 'chambas.title as chamba_name')
            ->get();
        return view('requests.index', ["requests" => $requests, "info" => $info]);
    }

    public function store(Request $request)
    {
        $client_id = Auth::user()->id;
        $query = RequestChamba::where('client_id', $client_id)->count();
        if ($query > 0) {
            return redirect()->back()->with('error', 'You already have a request');
        } else {
            $requestChamba = new RequestChamba();
            $requestChamba->client_id = $client_id;
            $requestChamba->worker_id = $request->worker_id;
            $requestChamba->chamba_id = $request->chamba_id;
            $requestChamba->save();
            return redirect()->back()->with('success', 'Request sent');
        }
    }

    public function decline($id)
    {
        $request = RequestChamba::find($id);
        $request->status = 'rejected';
        $request->save();
        return redirect("/request")->with('success', 'Rejected');
    }
}

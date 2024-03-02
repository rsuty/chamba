<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $info = User::find($id);
        return view("profile.index", compact("info"));
    }
    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->firstOrFail();
        $validatedData = $request->validate([
            'name' => 'required|max:255|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|max:255',
            'phone_number' => 'max:255',
            'speciality' => 'max:255',
            'street' => 'max:255',
            'postal_code' => 'max:255',
            'city' => 'max:255',
        ]);
        $user->update($validatedData);
        return redirect()->back()->with('success', 'Tu Informacion a sido actualizada');
    }
    public function destroy($id)
    {
        $user = User::where('id', $id)->firstOrFail();
        $user->delete();
        return view('login');
    }
}

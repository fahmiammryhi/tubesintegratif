<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function index()
    {
        $game = DB::table('game')->get();
        return view('user.dashboard', ['game' => $game]);
    }

    public function showDetail($id)
    {
        $game = DB::table('game')
            ->where('id', $id)
            ->first();

        $diamonds = DB::table('diamond')
            ->where('id', $id)
            ->get();

        return view('user.detailgame', compact('game', 'diamonds'));
    }


    public function tentangkami()
    {
        return view('user.about');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'You have been logged out.');
    }
}

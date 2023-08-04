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
    public function profil()
    {
        $users = DB::table('users')->get();
        return view('user.profile', ['users' => $users]);
    }

    public function news()
    {
        return view('user.news');
    }


    public function updateprofile(Request $request, $id)
    {
        // Retrieve the user with the given $id
        $user = DB::table('users')->where('id', $id)->first();

        if (!$user) {
            // User not found, handle the error (e.g., redirect back with an error message)
            return redirect()->back()->with('error', 'User not found.');
        }

        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'nohp' => 'required|string|max:20',
        ]);

        // Update the user information in the database
        DB::table('users')->where('id', $id)->update([
            'name' => $request->input('name'),
            'nohp' => $request->input('nohp'),
        ]);

        // Redirect back to the page showing the users list or return a response as needed.
        // For example:
        return redirect()->back()->with('success', 'User information updated successfully.');
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

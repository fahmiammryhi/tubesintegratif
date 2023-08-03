<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    //

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function index()
    {
        $users = DB::table('users')->get();
        return view('admin.dashboard', ['users' => $users]);
    }


    public function produk()
    {
        $game = DB::table('game')->get();
        return view('admin.product', ['game' => $game]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'You have been logged out.');
    }

    public function deleteuser($id)
    {

        $user = DB::table('users')->where('id', $id)->first();
        if ($user) {
            DB::table('users')->where('id', $id)->delete();
            return redirect()->back()->with('user berhasil dihapus');
        } else {
            return redirect()->back()->with('user tidak ditemukan');
        }

        // Redirect back to the page showing the users list or return a response as needed.
        // For example:
        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    public function updateuser(Request $request, $id)
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
            'role' => 'required|in:admin,user',
        ]);

        // Update the user information in the database
        DB::table('users')->where('id', $id)->update([
            'name' => $request->input('name'),
            'nohp' => $request->input('nohp'),
            'role' => $request->input('role'),
        ]);

        // Redirect back to the page showing the users list or return a response as needed.
        // For example:
        return redirect()->back()->with('success', 'User information updated successfully.');
    }

    public function deletegame($id)
    {

        $game = DB::table('game')->where('id', $id)->first();
        if ($game) {
            DB::table('game')->where('id', $id)->delete();
            return redirect()->back()->with('game berhasil dihapus');
        } else {
            return redirect()->back()->with('game tidak ditemukan');
        }

        // Redirect back to the page showing the game list or return a response as needed.
        // For example:
        return redirect()->back()->with('success', 'game deleted successfully.');
    }

    public function updategame(Request $request, $id)
    {
        // Retrieve the game with the given $id
        $game = DB::table('game')->where('id', $id)->first();

        if (!$game) {
            // game not found, handle the error (e.g., redirect back with an error message)
            return redirect()->back()->with('error', 'game not found.');
        }

        // Validate the form data
        $request->validate([
            'name_game' => 'required|string|max:255',
            'gambar' => 'required|string',
            'platform' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        // Update the game information in the database
        DB::table('game')->where('id', $id)->update([
            'name_game' => $request->input('name_game'),
            'gambar' => $request->input('gambar'),
            'platform' => $request->input('platform'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        // Redirect back to the page showing the game list or return a response as needed.
        // For example:
        return redirect()->back()->with('success', 'game information updated successfully.');
    }
}

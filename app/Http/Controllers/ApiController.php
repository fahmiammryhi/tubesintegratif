<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class ApiController extends Controller
{
    //
    public function getFreeGames(Request $request)
    {
        $client = new Client();
        $response = $client->get('https://www.freetogame.com/api/games');

        $freeGamesData = $response->getBody()->getContents();
        // return response()->json($freeGamesData);
        $data = json_decode($freeGamesData, true);

        $search = $request->input('search');

        if ($search) {
            $filteredData = array_filter($data, function ($game) use ($search) {
                return strpos(strtolower($game['title']), strtolower($search)) !== false;
            });

            $data = $filteredData;
        }


        return view('user.news', ['freeGamesData' => $data]);
    }

    // public function search(Request $request)
    // {
    //     $client = new Client();
    //     $response = $client->get('https://www.freetogame.com/api/games');

    //     $freeGamesData = $response->getBody()->getContents();
    //     $data = json_decode($freeGamesData, true);

    //     return view('user.news', ['freeGamesData' => $data]);
    // }


    public function getCharacterList()
    {
        //
        $client = new Client();
        $response = $client->get('https://www.freetogame.com/api/games');
        // $response = $client->get('https://video-game-news.p.rapidapi.com/resident_evil', [
        //     'headers' => [
        //         'X-RapidAPI-Host' => 'video-game-news.p.rapidapi.com',
        //         'X-RapidAPI-Key' => '8d520bb3f7msh9a6b3513eb3d5dbp137732jsn612a551e63b4',
        //     ],
        // ]);
        $pokemonData = json_decode($response->getBody(), true);
        return response()->json($pokemonData);
        // return view('user.about', ['pokemonData' => $pokemonData]);



        //yg bener
        // $client = new Client();
        // $response = $client->get('https://pokeapi.co/api/v2/pokemon');
        // $pokemonData = json_decode($response->getBody(), true);
        // return response()->json($pokemonData);
    }

    // public function store(Request $request)
    // {
    //     $validate = Validator::make($request->all(),[
    //         'name' => 'required|string|max:200',
    //         'url' => 'required|string|max:200',
    //         'platform' => 'required|string|max:200',
    //         'deskripsi' => 'required|string|max:200',

    //     ]);

    //     if($validate->fails()){
    //         return response()->json([
    //             'status' => 422,
    //             'errors' => $validate->messages()
    //         ], 422);
    //     }else{
    //         $game = DB::table('game')->insert([
    //             'name_game' => $request->name_game,
    //             'gambar' => $request->gambar,
    //             'platform' => $request->platform,
    //             'deskripsi' => $request->deskripsi,

    //         ]);
    //     }

    //     if($game){
    //         return response()->json([
    //             'status' => 200,
    //             'message' => 'Data sukses dibuat'
    //         ], 200);
    //     }else{
    //         return response()->json([
    //             'status' => 500,
    //             'message' => 'Ada yang salah'
    //         ], 500);
    //     }
    // }

    public function show($name)
    {
        $client = new Client();
        $response = $client->get("https://pokeapi.co/api/v2/pokemon/{$name}");

        if ($response->getStatusCode() === 200) {
            $pokemonData = json_decode($response->getBody(), true);
            return response()->json([
                'status' => 200,
                'data' => $pokemonData,
            ], 200);
        } else {
            return response()->json([
                'status' => $response->getStatusCode(),
                'message' => 'Tidak ada data atau kesalahan dalam permintaan',
            ], $response->getStatusCode());
        }
    }

    public function edit($id)
    {
        $game = DB::table('game')->where('id', $id)->first();
        if ($game) {
            return response()->json([
                'status' => 200,
                'message' => $game
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Tidak ada data'
            ], 404);
        }
    }

    // public function update(Request $request, int $id)
    // {
    //     $validate = Validator::make($request->all(), [
    //         'name_game' => 'required|string|max:200',
    //         'gambar' => 'required|string|max:200',
    //         'platform' => 'required|string|max:200',
    //         'deskripsi' => 'required',
    //     ]);

    //     if ($validate->fails()) {
    //         return response()->json([
    //             'status' => 422,
    //             'errors' => $validate->messages()
    //         ], 422);
    //     } else {
    //         $game = DB::table('game')->where('id', $id)->first();
    //     }

    //     if ($game) {
    //         DB::table('game')->where('id', $id)->update([
    //             'name_game' => $request->name_game,
    //             'gambar' => $request->gambar,
    //             'platform' => $request->platform,
    //             'deskripsi' => $request->deskripsi,
    //         ]);

    //         return response()->json([
    //             'status' => 200,
    //             'message' => 'Data sukses diupdate'
    //         ], 200);
    //     } else {
    //         return response()->json([
    //             'status' => 404,
    //             'message' => 'Data tidak ditemukan'
    //         ], 404);
    //     }
    // }

    // public function destroy($id)
    // {
    //     $game = DB::table('game')->where('id', $id)->first();
    //     if($game){
    //         DB::table('game')->where('id', $id)->delete();
    //         return response()->json([
    //             'status' => 200,
    //             'message' => 'Data Berhasil Dihapus'
    //         ], 200);
    //     }else{
    //         return response()->json([
    //             'status' => 404,
    //             'message' => 'Data tidak ditemukan'
    //         ], 404);
    //     }
    // }

}

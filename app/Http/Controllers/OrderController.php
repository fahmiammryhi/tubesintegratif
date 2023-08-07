<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    //
    public function checkout(Request $request)
    {
        $request->request->add([
            'total_price' => $request->harga,
            'status' => 'Unpaid'
        ]);

        $transaksiId = DB::table('transaksi')->insertGetId([
            'nickname' => $request->input('nickname'),
            'email' => $request->input('email'),
            'nohp' => $request->input('nohp'),
            'qty' => $request->input('qty'),
            'game' => $request->input('game'),
            'total_price' => $request->input('qty'),
        ]);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // ... (Pengaturan lain untuk Midtrans)

        $params = [
            'transaction_details' => [
                'order_id' => $transaksiId,
                'gross_amount' => $request->qty,
            ],
            'customer_details' => [
                'nickname' => $request->nickname,
                'email' => $request->email,
                'nohp' => $request->nohp,
                'qty' => $request->total_price,
                'total_price' => $request->total_price,
                'game' => $request->game,
            ],
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // Ambil data transaksi berdasarkan ID
        $transaksi = DB::table('transaksi')->where('id', $transaksiId)->first();

        return view('user.checkout', compact('snapToken', 'transaksi'));
    }
    

    public function callback(Request $request){
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if ($hashed === $request->signature_key) {
            if ($request->transaction_status === 'capture') {
                DB::table('transaksi')
                    ->where('id', $request->order_id)
                    ->update(['status' => 'Paid']);
            }
        }
    }

    public function invoice($id){
        $transaksi = DB::table('transaksi')->find($id);
        return view('user.invoice', compact('transaksi'));
    }
}

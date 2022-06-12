<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\{transaksi,customer,harga};
=======
use App\Models\{Transaksi,Customer,Harga};
>>>>>>> 0b01095557514509b8f2d95287fddc904f1f3236
use Auth;

class LaporanController extends Controller
{
    //Halaman Laporan
    public function laporan()
    {
<<<<<<< HEAD
      $laporan = transaksi::where('user_id', Auth::id())->whereIn('status_order',['Done','Delivery'])->get();
=======
      $laporan = Transaksi::where('user_id', Auth::id())->whereIn('status_order',['Done','Delivery'])->get();
>>>>>>> 0b01095557514509b8f2d95287fddc904f1f3236
      return view('karyawan.laporan.index', compact('laporan'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pemesanan_index()
    {
        $tiket = Tiket::all();
        return view('admin.pemesanan.index', compact('tiket'));
    }

    public function pemesanan_edit(Tiket $tiket)
    {
        return view('admin.pemesanan.edit', compact('tiket'));
    }
    public function pemesanan_update(Request $request, Tiket $tiket)
    {

        $rules = [
            'status' => 'required',
            'name' => 'required|min:5',
            'no_hp' => 'required|min:5',
        ];

        $validatedData = $request->validate($rules);

        Tiket::where('id_tiket', $tiket->id_tiket)->update($validatedData);

        return redirect('/daftar-pemesan')->with('success', 'Tiket berhasil di Update !');
    }

    public function pemesanan_destroy(Tiket $tiket)
    {
        Tiket::destroy($tiket->id);
        return redirect('/daftar-pemesan')->with('success', 'Tiket berhasil dihapus !');;
    }

    public function checkin_index()
    {
        return view('admin.checkin.index');
    }

    public function checkin_cek()
    {
        $tiket = Tiket::where('id_tiket', request()->id_tiket)->get();

        if (isset(request()->id_tiket) && $tiket->count() > 0) {
            return redirect('/check-in/' . request()->id_tiket);
        } else if (isset(request()->id_tiket) && $tiket->count() == 0) {
            return redirect('/check-in')->with('error', 'ID Tiket tidak ditemukan !');
        } else {
            return view('admin.checkin.index');
        }
    }

    public function checkin_show(Tiket $tiket)
    {
        return view('admin.checkin.show', compact('tiket'));
    }

    public function checkin_checkin(Tiket $tiket)
    {
        Tiket::where('id_tiket', $tiket->id_tiket)->update(['status' => '1']);
        return redirect('/check-in/' . $tiket->id_tiket)->with('success', 'Berhasil Checkin !');
    }

    public function laporan_index()
    {
        $tiket = Tiket::all();
        return view('admin.laporan.index', compact('tiket'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Tiket;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreTiketRequest;
use App\Http\Requests\UpdateTiketRequest;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.tiket');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTiketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTiketRequest $request)
    {
        $rules = [
            'name' => 'required|min:5',
            'no_hp' => 'required|min:10',
        ];
        $validatedData = $request->validate($rules);

        $validatedData['harga'] = 200000;
        $validatedData['tampilkan'] = 1;
        $validatedData['id_tiket'] = 'TCKT-' . strtoupper(substr($validatedData['name'], 0, 3)) . substr($validatedData['no_hp'], 7, 3) . (rand(10, 99));


        $name = Tiket::where('name', $request->name)->get();
        if ($name->count() > 0) {
            return redirect('/tiket')->with('error', 'nama sudah ada');
        } else {
            $tiket = Tiket::create($validatedData);
            // create logs
            Log::create(['user' => Session::getId(), 'aksi' => 'pesan tiket ' . $validatedData['id_tiket']]);
            return redirect('/tiket/' . $tiket->id_tiket);
        }


        $tiket = Tiket::create($validatedData);

        // create logs
        Log::create(['user' => Session::getId(), 'aksi' => 'pesan tiket ' . $validatedData['id_tiket']]);

        return redirect('/tiket/' . $tiket->id_tiket);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function show(Tiket $tiket)
    {
        return view('public.show', [
            'tiket' => $tiket,
        ]);
    }

    public function cetak(Tiket $tiket)
    {
        $pdf = Pdf::loadView('public.cetak', compact('tiket'));
        return $pdf->download($tiket->id_tiket . '.pdf');
    }

    public function cek()
    {
        $tiket = Tiket::where('id_tiket', request()->id_tiket)->get();

        if (isset(request()->id_tiket) && $tiket->count() > 0) {
            // create logs
            Log::create(['user' => Session::getId(), 'aksi' => 'Cek Tiket ' . request()->id_tiket . ' Berhasil']);
            return redirect('/tiket/' . request()->id_tiket);
        } else if (isset(request()->id_tiket) && $tiket->count() == 0) {
            // create logs
            Log::create(['user' => Session::getId(), 'aksi' => 'Cek Tiket ' . request()->id_tiket . ' Gagal']);
            return redirect('/cek')->with('error', 'ID Tiket tidak ditemukan !');
        } else {
            return view('public.cek');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function edit(Tiket $tiket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTiketRequest  $request
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTiketRequest $request, Tiket $tiket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tiket $tiket)
    {
        //
    }
}

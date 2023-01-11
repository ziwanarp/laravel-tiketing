@extends('template.main')
@section('content')

<div class="container">
    <div class="row col-lg-12">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6 my-5">
            <div class="text-center">
                <h3>Tiket Anda</h3>
            </div>
            <form action="/cetak-tiket/{{ $tiket->id_tiket }}" method="post">
                <div class="mb-3">
                  <label class="form-label">Status Tiket</label>
                  @if ($tiket->status == 0)
                    <input class="form-control bg-success text-white text-center" value="Belum Dipakai" disabled>
                  @else
                    <input class="form-control bg-danger text-white text-center" value="Sudah Terpakai" disabled>
                  @endif
                  
                </div>
                <div class="mb-3">
                  <label class="form-label">ID Tiket</label>
                  <input class="form-control" value="{{ $tiket->id_tiket }}" disabled>
                </div>
                <div class="mb-3">
                  <label class="form-label">Nama Pemesan</label>
                  <input class="form-control" value="{{ $tiket->name }}" disabled>
                </div>
                <div class="mb-3">
                  <label class="form-label">No Telepon</label>
                  <input class="form-control" value="{{ $tiket->no_hp }}" disabled>
                </div>
                <div class="mb-3">
                  <label class="form-label">Harga</label>
                  <input class="form-control" value="Rp. {{ number_format($tiket->harga, 0, ".", ".") }},-" disabled>
                </div>
                <div class="mb-3">
                  <label class="form-label">Pesanan Dibuat</label>
                  <input class="form-control" value="{{ $tiket->created_at }}" disabled>
                </div>
                    @csrf
                    <a class="btn btn-primary" href="/tiket">Kembali</a>
                    @if ($tiket->status == 0)
                      <button type="submit" class="btn btn-danger">Download Tiket <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                        <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                        <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                        </svg>
                      </button>
                    @endif
              </form>
        </div>
        <div class="col-lg-3">
        </div>
    </div>
</div>
    
@endsection
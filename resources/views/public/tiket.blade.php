@extends('template.main')
@section('content')

<div class="container">
    <div class="row col-lg-12">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6 my-5">
            <div class="text-center">
                <h3>Pemesanan Tiket Konser</h3>
                <p>Untuk melakukan pemesanan, lengkapi data dibawah.</p>
            </div>
            <form action="/tiket" method="post">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Nama Lengkap</label>
                  <input type="name" name="name" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                  <label for="no_hp" class="form-label">Nomor Telepon</label>
                  <input type="string" class="form-control" id="no_hp" name="no_hp" minlength="10" required>
                </div>
                <div class="mb-3">
                  <label for="no_hp" class="form-label">Harga <small>(pembayaran di lokasi)</small></label>
                  <input class="form-control" value="Rp.200.000,-" disabled>
                </div>
                <button type="submit" class="btn btn-primary">Pesan</button>
              </form>
        </div>
        <div class="col-lg-3">
        </div>
    </div>
</div>
    
@endsection
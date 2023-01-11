@extends('admin.template.main')
@section('content')

<div class="container">
    <div class="row col-lg-12">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6 my-5">
            <div class="text-center">
                <h3>Check In</h3>
                <p>Untuk cek tiket, silahkan masukan ID Tiket.</p>
                @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                @endif
            </div>
            <form action="/check-in/cek" method="get">
                <div class="mb-3">
                  <label for="id_tiket" class="form-label">Masukan ID Tiket</label>
                  <input type="text" name="id_tiket" class="form-control" id="id_tiket" required>
                </div>
                <button type="submit" class="btn btn-primary">Cek Tiket</button>
              </form>
        </div>
        <div class="col-lg-3">
        </div>
    </div>
</div>
    
@endsection
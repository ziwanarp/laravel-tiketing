@extends('admin.template.main')
@section('content')

<div class="container">
    <div class="row col-lg-12">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6 my-5">
            <div class="text-center">
                <h3>Update Tiket</h3>
            </div>
            <form action="/daftar-pemesan/{{ $tiket->id_tiket }}" method="post">
                @method('put')
                <div class="mb-3">
                  <label class="form-label">Status Tiket</label>
                  <select class="form-select" name="status" aria-label="Default select example" required>
                    <option value="">Edit Status</option>
                    <option value="0">Belum Terpakai</option>
                    <option value="1">Sudah Terpakai</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">ID Tiket</label>
                  <input class="form-control" value="{{ $tiket->id_tiket }}" disabled>
                </div>
                <div class="mb-3">
                  <label class="form-label">Nama Pemesan</label>
                  <input class="form-control" name="name" value="{{ $tiket->name }}" >
                </div>
                <div class="mb-3">
                  <label class="form-label">No Telepon</label>
                  <input class="form-control" name="no_hp" value="{{ $tiket->no_hp }}" >
                </div>
                    @csrf
                    <a class="btn btn-primary" href="/daftar-pemesan">Kembali</a>
                      <button type="submit" class="btn btn-danger">Update</button>
              </form>
        </div>
        <div class="col-lg-3">
        </div>
    </div>
</div>
    
@endsection
@extends('admin.template.main')
@section('content')

<div class="container">
    <div class="row col-lg-12">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10 my-5">
            <div class="text-center">
                <h3>Daftar Pemesan</h3>

                @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                @endif

            </div>
            <table class="mt-3 table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">no</th>
                    <th scope="col">ID Tiket</th>
                    <th scope="col">Status</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Pesanan Dibuat</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                @foreach ($tiket as $item)
                    <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->id_tiket }}</td>
                        @if ($item->status == 0)
                            <td><p class=" btn btn-success btn-sm text-white">Belum Terpakai</p></td>
                        @else
                            <td><p class=" btn btn-danger btn-sm text-white">Sudah Terpakai</p></td>
                        @endif
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="/daftar-pemesan/{{ $item->id_tiket }}/edit">Edit</a>
                            <form class="d-inline" action="/daftar-pemesan/{{ $item->id_tiket }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    
                    </tr>
                    </tbody>
                @endforeach
              </table>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
</div>
    
@endsection
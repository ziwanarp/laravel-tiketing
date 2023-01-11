@extends('admin.template.main')
@section('content')

<div class="container">
    <div class="row col-lg-12">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10 my-5">
            <div class="text-center">
                <h3>Tiket Ditemukan</h3>
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
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ $tiket->id_tiket }}</td>
                        @if ($tiket->status == 0)
                            <td><p class=" btn btn-success btn-sm text-white">Belum Terpakai</p></td>
                        @else
                            <td><p class=" btn btn-danger btn-sm text-white">Sudah Terpakai</p></td>
                        @endif
                        <td>{{ $tiket->name }}</td>
                        <td>{{ $tiket->no_hp }}</td>
                        <td>{{ $tiket->created_at }}</td>
                        @if ($tiket->status == 0)
                            <td>
                                <form action="/check-in/{{ $tiket->id_tiket }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Check-In</button>
                                </form>
                            </td>
                        @else
                        <td>
                            <p>Sudah Checkin</p>
                        </td>
                        @endif
                    
                    </tr>
                    </tbody>
              </table>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
</div>
    
@endsection
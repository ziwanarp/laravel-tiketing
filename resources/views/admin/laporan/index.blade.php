@extends('admin.template.main')
@section('content')

<div class="container">
    <div class="row col-lg-12">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10 my-5">
            <div class="text-center">
                <h3>Daftar Belum Check-in</h3>
            </div>
            <table class="mt-3 table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">ID Tiket</th>
                    <th scope="col">Status</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Pesanan Dibuat</th>
                  </tr>
                </thead>
                @foreach ($tiket as $item)
                @if ($item->status == 0)
                    <tbody>
                    <tr>
                        <td>{{ $item->id_tiket }}</td>
                        @if ($item->status == 0)
                            <td><p class=" btn btn-success btn-sm text-white">Belum Terpakai</p></td>
                        @else
                            <td><p class=" btn btn-danger btn-sm text-white">Sudah Terpakai</p></td>
                        @endif
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                    </tbody>
                @endif
                @endforeach
              </table>
        </div>
        <div class="col-lg-1">
        </div>
    </div>

    <div class="row col-lg-12">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10 my-5">
            <div class="text-center">
                <h3>Daftar Sudah Check-in</h3>
            </div>
            <table class="mt-3 table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">ID Tiket</th>
                    <th scope="col">Status</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Pesanan Dibuat</th>
                  </tr>
                </thead>
                @foreach ($tiket as $item)
                @if ($item->status == 1)
                
                    <tbody>
                    <tr>
                        <td>{{ $item->id_tiket }}</td>
                        @if ($item->status == 0)
                            <td><p class=" btn btn-success btn-sm text-white">Belum Terpakai</p></td>
                        @else
                            <td><p class=" btn btn-danger btn-sm text-white">Sudah Terpakai</p></td>
                        @endif
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                    </tbody>
                @endif
                @endforeach
              </table>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
</div>
    
@endsection
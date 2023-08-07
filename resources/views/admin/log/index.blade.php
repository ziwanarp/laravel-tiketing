@extends('admin.template.main')
@section('content')

<div class="container">
    <div class="row col-lg-12">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10 my-5">
            <div class="text-center">
                <h3>Logs</h3>
            </div>
            <table class="mt-3 table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">User</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Waktu</th>
                  </tr>
                </thead>
                @foreach ($logs as $item)
                @if ($item->status == 0)
                    <tbody>
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->user }}</td>
                        <td>{{ $item->aksi }}</td>
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
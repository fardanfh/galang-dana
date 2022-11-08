@extends('template.master')
@section('judul_konten')
    Data Akun
@endsection
@section('main_konten')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
        <a href="/akun/create" class="btn btn-primary float-right">Tambah Data Akun</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($akun as $akuns)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $akuns->username }}</td>
                <td>{{ $akuns->email }}</td>
                <td>{{ $akuns->created_at }}</td>
                <td>
                    <div class="row d-flex justify-content-around align-items-center">
                        <form action="akun/{{ $akuns->id }}" method="POST" wire:submit.prevent="delete">  
                            <a href="{{ route('akun.show', $akuns->id) }}" class="btn btn-success">Detail</a>
                            <a href="{{ route('akun.edit', $akuns->id) }}" class="btn btn-warning">Edit</a>
                            @csrf
                            @method('DELETE')
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                        </form>
                    </div>
                </td>
            </tr>         
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection

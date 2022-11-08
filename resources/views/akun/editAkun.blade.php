@extends('template.master')
@section('judul_konten')
    Edit Data Akun
@endsection

@section('main_konten')
<form action="/akun/{{ $edit->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
      <div class="form-group">
        <label for="usernames">Username</label>
        <input type="text" name="username" value="{{ $edit->username }}" class="form-control" id="usernames" placeholder="Username">
        @error('username')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" value="{{ $edit->email }}" class="form-control" id="exampleInputEmail1" placeholder="Email">
        @error('email')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" value="{{ $edit->password }}" class="form-control" id="exampleInputPassword1" placeholder="Password">
        @error('password')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection
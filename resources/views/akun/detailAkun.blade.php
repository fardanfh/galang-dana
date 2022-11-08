@extends('template.master')
@section('judul_konten')
    Detail Akun
@endsection
@section('main_konten')
<div class="card">
    <div class="jumbotron">
        <h1 class="display-4">{{ $detail->username }}</h1>
        <p class="lead">{{ $detail->email }}</p>
        <hr class="my-4">
        <p>{{ $detail->created_at }}</p>
    </div>
</div>
@endsection
@extends('layout.v_templatelogin')
@section('judul', 'Masuk')
@section('konten')
<head>    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<div class="login-box">
<div class="login-logo">
    <b>Masuk</b>
</div>
<!-- /.login-logo -->
<div class="login-box-body">
    <p class="login-box-msg"> </p>

    <form method="post" action="{{ route('login') }}">
        @csrf
        <div class="card-body">
            @if(session('errors'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Perhatikan:
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
            <div class="form-group">
                <label for=""><strong>User</strong></label>
                <input type="text" name="user" class="form-control" placeholder="User">
            </div>
            <div class="form-group">
                <label for=""><strong>Password</strong></label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
        </div>
        
            <div class="card">
                <button type="submit" class="btn btn-primary">Masuk</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
    @endsection
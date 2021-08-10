@extends('layout.v_templatelogin')
@section('judul', 'Masuk')
@section('konten')

<div class="login-box">
<div class="login-logo">
    <b>Masuk</b>
</div>
<!-- /.login-logo -->
<div class="login-box-body">
    <p class="login-box-msg"> </p>

    <form action="../../index2.html" method="post">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Id">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
    @endsection
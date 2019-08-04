@extends('layouts.default')
@section('title') Đăng ký @endsection
@section('content')
<div class="card-body">
  {!! Form::open(['method' => 'POST']) !!}
  <div class="input-group form-group">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-user"></i></span>
    </div>
    {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Họ và tên']) !!}
  </div>
  <div class="input-group form-group">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
    </div>
    {!! Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email']) !!}
  </div>
  <div class="input-group form-group">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-key"></i></span>
    </div>
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mật khẩu']) !!}
  </div>
  <div class="input-group form-group">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-key"></i></span>
    </div>
    {!! Form::password('re-assword', ['class' => 'form-control', 'placeholder' => 'Nhập lại mật khẩu']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Đăng ký', ['class' => 'btn float-right login_btn']) !!}
  </div>
  {!! Form::close() !!}
</div>
<div class="card-footer">
  <div class="d-flex justify-content-center links">
    Bạn đã có tài khoản?<a href="#">Đăng nhập</a>
  </div>
</div>
@endsection
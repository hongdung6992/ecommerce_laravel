@extends('layouts.default')
@section('title') Đăng nhập @endsection
@section('content')
<div class="card-body">
  {!! Form::open(['method' => 'POST']) !!}
  <div class="input-group form-group">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
    </div>
    {!! Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email']) !!}
    @if($errors->has('email'))
    <ul class="parsley-errors-list filled" id="parsley-id-5">
      <li class="parsley-required">{{ $errors->first('email') }}</li>
    </ul>
    @endif
  </div>
  <div class="input-group form-group">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-key"></i></span>
    </div>
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mật khẩu']) !!}
    @if($errors->has('password'))
    <ul class="parsley-errors-list filled" id="parsley-id-5">
      <li class="parsley-required">{{ $errors->first('password') }}</li>
    </ul>
    @endif
  </div>
  <div class="row align-items-center remember">
    {!! Form::checkbox('remember_me') !!} Ghi nhớ mật khẩu
  </div>
  <div class="form-group">
    {!! Form::submit('Đăng nhập', ['class' => 'btn float-right login_btn']) !!}
  </div>
  {!! Form::close() !!}
</div>
@include('admin.partials.message');
<div class="card-footer">
  <div class="d-flex justify-content-center links">
    Chưa có tài khoản?<a href="#">Đăng ký</a>
  </div>
  <div class="d-flex justify-content-center">
    <a href="#">Quên mật khẩu?</a>
  </div>
</div>
@endsection
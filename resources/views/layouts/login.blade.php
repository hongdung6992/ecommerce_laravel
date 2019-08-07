@extends('layouts.default')
@section('title') {{ t('auth.login') }} @endsection
@section('content')
<div class="card-body">
  {!! Form::open(['method' => 'POST']) !!}
  <div class="input-group form-group">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
    </div>
    {!! Form::text('email', '', ['class' => 'form-control', 'placeholder' => t('auth.email')]) !!}
    @include('admin.shared._validate_error', ['fillable' => 'email'])
  </div>
  <div class="input-group form-group">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-key"></i></span>
    </div>
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => t('auth.password')]) !!}
    @include('admin.shared._validate_error', ['fillable' => 'password'])
  </div>
  <div class="row align-items-center remember">
    {!! Form::checkbox('remember_me'), t('auth.remember_password') !!}
  </div>
  <div class="form-group">
    {!! Form::submit(t('auth.login'), ['class' => 'btn float-right login_btn']) !!}
  </div>
  {!! Form::close() !!}
</div>
@include('admin.shared._message');
<div class="card-footer">
  <div class="d-flex justify-content-center links">
    {{ t('auth.have_account') }}<a href="#">{{ t('auth.register') }}</a>
  </div>
  <div class="d-flex justify-content-center">
    <a href="#">{{ t('auth.forget_password') }}</a>
  </div>
</div>
@endsection
@extends('admin.default')
@section('title') {{ t('user.manage') }} @endsection
@section('content')
<div class="content">
  <div class="container-fluid">
    @include('admin.shared._breadcrumb')
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-9 col-xl-9">
        <div class="card mb-3">
          <div class="card-header">
            <h3><i class="fa fa-hand-pointer-o"></i> {{ t('user.create') }}</h3>
          </div>
          <div class="card-body">
            @include('admin.shared._message')
            {!! Form::open(['method' => 'POST', 'route' => ['user.store']]) !!}
            @include('admin.users._form')
            {!! Form::close() !!}
          </div>
        </div><!-- end card-->
      </div>
    </div>
  </div>
</div>
@endsection
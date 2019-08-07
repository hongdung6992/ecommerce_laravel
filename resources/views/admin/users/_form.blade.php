<div class="form-group">
  {!! Form::label('name', t('user.name'), ['class' => 'required']) !!}
  {!! Form::text('name', isset($user) ? $user->name : '', ['class' => "form-control ($errors->has('name')) ? 'parsley-error' : ''", 'placeholder' => t('user.placeholder.name')]) !!}
  @include('admin.shared._validate_error', ['fillable' => 'name'])
</div>
<div class="form-group">
  {!! Form::label('email', t('user.email'), ['class' => 'required']) !!}
  {!! Form::text('email', isset($user) ? $user->email : '', ['class' => "form-control ($errors->has('email')) ? 'parsley-error' : ''",'placeholder' => t('user.placeholder.email'), isset($disabled) ? 'disabled' : '']) !!}
  @include('admin.shared._validate_error', ['fillable' => 'email'])
</div>
<div class="form-group">
  {!! Form::label('phone', t('user.phone')) !!}
  {!! Form::text('phone', isset($user) ? $user->phone : '', ['class' => "form-control ($errors->has('phone')) ? 'parsley-error' : ''", 'placeholder' => t('user.placeholder.phone')]) !!}
  @include('admin.shared._validate_error', ['fillable' => 'phone'])
</div>
<div class="form-group">
  {!! Form::label('role', t('user.role')) !!}
  {!! Form::select('role_id',[0 => 'User', 1 => 'Admin', 2 => 'Editor'], isset($user) ? $user->role_id : '', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('status', t('status.activated')) !!}
  {!! Form::select('status',config('enum.boolean'), isset($user) ? $user->status : 1 , ['class' => 'form-control']) !!}
</div>
<div class="form-group text-right m-b-0">
  {!! Form::submit(t('shared.save'), ['class' => 'btn btn-primary']) !!}
  <a href="#" class="btn btn-secondary m-l-5">{{ t('shared.back') }}</a>
</div>

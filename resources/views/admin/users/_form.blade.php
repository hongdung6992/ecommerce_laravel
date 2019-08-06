<div class="form-group">
  {!! Form::label('name', t('user.name'), ['class' => 'required']) !!}
  {!! Form::text('name', isset($user) ? $user->name : '', ['class' => ($errors->has('name')) ? 'form-control parsley-error' : 'form-control', 'placeholder' => t('user.placeholder.name')]) !!}
  @if ($errors->has('name'))
  <ul class="parsley-errors-list filled" id="parsley-id-5">
    <li class="parsley-required">{{ $errors->first('name') }}</li>
  </ul>
  @endif
</div>
<div class="form-group">
  {!! Form::label('email', t('user.email'), ['class' => 'required']) !!}
  {!! Form::text('email', isset($user) ? $user->email : '', ['class' => ($errors->has('email')) ? 'form-control parsley-error' : 'form-control','placeholder' => t('user.placeholder.email'), isset($disabled) ? 'disabled' : '']) !!}
  @if ($errors->has('email'))
  <ul class="parsley-errors-list filled" id="parsley-id-5">
    <li class="parsley-required">{{ $errors->first('email') }}</li>
  </ul>
  @endif
</div>
<div class="form-group">
  {!! Form::label('phone', t('user.phone')) !!}
  {!! Form::text('phone', isset($user) ? $user->phone : '', ['class' => ($errors->has('phone')) ? 'form-control parsley-error' : 'form-control', 'placeholder' => t('user.placeholder.phone')]) !!}
  @if ($errors->has('phone'))
  <ul class="parsley-errors-list filled" id="parsley-id-5">
    <li class="parsley-required">{{ $errors->first('phone') }}</li>
  </ul>
  @endif
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
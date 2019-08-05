<div class="form-group">
  {!! Form::label('name', t('user.name'), ['class' => 'required']) !!}
  {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => t('user.placeholder.name')]) !!}
</div>
<div class="form-group">
  {!! Form::label('email', t('user.email'), ['class' => 'required']) !!}
  {!! Form::text('email', '', ['class' => 'form-control', 'placeholder' => t('user.placeholder.email')]) !!}
</div>
<div class="form-group">
  {!! Form::label('phone', t('user.phone')) !!}
  {!! Form::text('phone', '', ['class' => 'form-control', 'placeholder' => t('user.placeholder.phone')]) !!}
</div>
<div class="form-group">
  {!! Form::label('role', t('user.role')) !!}
  {!! Form::select('role',[1 => 'Admin', 2 => 'Editor'], '', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('status', t('status.active')) !!}
  {!! Form::select('status',[0 => t('status.no'), 1 => t('status.yes')], 1 , ['class' => 'form-control']) !!}
</div>
<div class="form-group text-right m-b-0">
  {!! Form::submit(t('shared.save'), ['class' => 'btn btn-primary']) !!}
  <a href="#" class="btn btn-secondary m-l-5">{{ t('shared.back') }}</a>
</div>
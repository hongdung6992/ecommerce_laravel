<div class="modal-body">
  <div class="row">
    <div class="col-lg-12">
      <div class="form-group">
        {!! Form::label('name', t('category.name'), ['class' => 'required']) !!}
        {!! Form::text('name', '', ['class' => 'form-control', 'placholder' => t('category.placholder.name')]) !!}
        {!! Form::hidden('slug') !!}
        {!! Form::hidden('parent_id', '', ['id' => 'parent_id']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('status', t('status.activated')) !!}
        {!! Form::select('status',config('enum.boolean'), 1, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
</div>
<div class="modal-footer">
  {!! Form::submit(t('shared.save'), ['class' => 'btn btn-primary test-form']) !!}
</div>
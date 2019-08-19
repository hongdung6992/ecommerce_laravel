<div class="modal-body">
  <div class="row">
    {!! Form::hidden('category_id') !!}
    <div class="col-lg-6">
      <div class="form-group">
        {!! Form::label('name', t('product.name'), ['class' => 'required']) !!}
        {!! Form::text('name', '', ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
        {!! Form::label('code', t('product.code'))!!}
        {!! Form::text('code', '', ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
        {!! Form::label('color', t('product.color')) !!}
        {!! Form::text('color', '', ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
        {!! Form::label('price', t('product.price')) !!}
        {!! Form::text('price', '', ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-lg-12">
      <div class="form-group">
        {!! Form::label('description', t('product.description')) !!}
        {!! Form::textarea('description', '', ['class' => 'form-control', 'rows' => '4']) !!}
      </div>
    </div>
    <div class="col-lg-12">
      <div class="form-group">
        {!! Form::label('image', t('product.image')) !!}
        {!! Form::file('image', ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
</div>
<div class="modal-footer">
  {!! Form::submit(t('button.save'), ['class' => 'btn btn-primary test-form']) !!}
</div>
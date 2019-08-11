<div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_move_category">
  <div class="modal-dialog">
    <div class="modal-content">
      {!! Form::open(['method' => 'POST', 'route' => ['category.store'], 'id' => 'category-move-form', 'data-url' => route('category.move')]) !!}
      <div class="modal-header">
        <h5 class="modal-title">{{ t('category.move') }}</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              {!! Form::label('parent_id', t('category.move_to')) !!}
              <select name="parent_id" class="form-control">
                <option value="">{{ t('category.root') }}</option>
                {{ categorySelect($categories) }}
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        {!! Form::submit(t('shared.save'), ['class' => 'btn btn-primary test-form']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
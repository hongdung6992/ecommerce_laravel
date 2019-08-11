<div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_edit_category">
  <div class="modal-dialog">
    <div class="modal-content">
      {!! Form::open(['method' => 'PUT', 'route' => ['category.update'], 'id' => 'category-edit-form', 'data-url' => route('category.edit')]) !!}
      {!! Form::hidden('id') !!}
      <div class="modal-header">
        <h5 class="modal-title">{{ t('category.edit') }}</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        </button>
      </div>

      @include('admin.category._form')

      {!! Form::close() !!}
    </div>
  </div>
</div>
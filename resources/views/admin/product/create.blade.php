<div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_add_product">
  <div class="modal-dialog">
    <div class="modal-content">
      {!! Form::open(['method' => 'POST', 'route' => ['product.store'], 'id' => 'product-create-form']) !!}
      <div class="modal-header">
        <h5 class="modal-title">{{ t('product.create') }}</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        </button>
      </div>

      @include('admin.product._form')

      {!! Form::close() !!}
    </div>
  </div>
</div>
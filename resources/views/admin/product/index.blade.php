<div class="col-xs-9 col-sm-9 col-md-9">
  <div class="card mb-3">
    <div class="card-header">
      <span class="pull-right">
        <button class="btn btn-primary btn-sm" data-target="#modal_add_product" data-toggle="modal"><i class="fa fa-plus"></i> {{ t('button.add') }}</button>
      </span>
      <h3><i class="fa fa-table"></i> {{ t('product.title') }}</h3>
    </div>
    <div class="card-body">
      <div class="table-responsive data-product" data-url="{{ route('product.index') }}">
        <table id="example1" class="table table-bordered">
          <thead>
            <tr>
              <th>{{ t('th.index') }}</th>
              <th>{{ t('th.product.name') }}</th>
              <th>{{ t('th.product.code') }}</th>
              <th>{{ t('th.product.color') }}</th>
              <th>{{ t('th.product.price') }}</th>
              <th>{{ t('th.product.image') }}</th>
              <th>{{ t('th.action') }}</th>
            </tr>
          </thead>
          <tbody>
            @include('admin.product._tbody')
          </tbody>
        </table>
      </div>
    </div>
  </div><!-- end card-->
</div>
@include('admin.product.create')
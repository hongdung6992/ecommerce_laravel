@extends('admin.default')
@section('title') {{ t('user.manage') }} @endsection
@section('content')
<div class="content">
	<div class="container-fluid">
		@include('admin.shared._breadcrumb')
		@include('admin.shared._message')
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3">
				<div class="card mb-3">
					<div class="card-header">
						<button type="button" class="btn pull-right btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="{{ t('category.guide') }}">
							<i class="fa fa-question-circle"></i>
						</button>
						<h3 class="pull-left"><i class="fa fa-vcard-o"></i> {{ t('category.title') }}</h3>
					</div>
					<div class="card-body">
						<div id="dragdropTree" class="jstree-category" data-url="{{ route('category.delete') }}">
							{{ categoryTree($categories) }}
						</div>
					</div>
				</div><!-- end card-->
			</div>
			@include('admin.product.index')
		</div>
		@include('admin.category.create')
		@include('admin.category.edit')
		@include('admin.category.move')
		@include('admin.shared._modal_confirm_delete')
	</div>
	<!-- END container-fluid -->
</div>
@endsection
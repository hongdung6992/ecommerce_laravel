@extends('admin.default')
@section('title') {{ t('user.manage') }} @endsection
@section('content')
<div class="content">
	<div class="container-fluid">
		@include('admin.shared._breadcrumb')
		@include('admin.shared._message')
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4">
				<div class="card mb-3">
					<div class="card-header">
						<h3><i class="fa fa-vcard-o"></i> {{ t('category.category') }}</h3>
					</div>
					<div class="card-body">
						@include('admin.category._category_tree')
					</div>
				</div><!-- end card-->
			</div>
		</div>
		@include('admin.category.create')
		@include('admin.category.edit')
		@include('admin.category.move')
		@include('admin.shared._modal_confirm_delete')
	</div>
	<!-- END container-fluid -->
</div>
@endsection

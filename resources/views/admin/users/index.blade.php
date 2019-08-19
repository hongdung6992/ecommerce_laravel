@extends('admin.default')
@section('title') {{ t('user.manage') }} @endsection
@section('content')
<div class="content">
	<div class="container-fluid">
		@include('admin.shared._breadcrumb')
		@include('admin.shared._message')
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="card mb-3">
					<div class="card-header">
						<span class="pull-right">
							<a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">
								<i class="fa fa-user-plus" aria-hidden="true"></i> {{ t('button.add') }}
							</a>
							<button class="btn btn-danger btn-sm btn-multiple" data-target="#multipleDelete" data-toggle="modal">
								<i class="fa fa-trash"></i> {{ t('button.delete') }}
							</button>
						</span>

						<h3><i class="fa fa-vcard-o"></i> {{ t('user.list') }}</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="example1" class="table table-bordered table-hover display">
								<thead>
									<tr>
										<th class="text-center"><input type="checkbox" name="check_all" id="check-all"></th>
										<th>{{ t('th.index') }}</th>
										<th>{{ t('th.user.name') }}</th>
										<th>{{ t('th.user.email') }}</th>
										<th>{{ t('th.user.phone') }}</th>
										<th>{{ t('th.user.role') }}</th>
										<th>{{ t('th.status') }}</th>
										<th>{{ t('th.action') }}</th>
									</tr>
								</thead>
								<tbody>
									@include('admin.users._tbody')
								</tbody>
							</table>
						</div>
					</div>
				</div><!-- end card-->
			</div>
		</div>
		@include('admin.shared._modal_confirm_delete')
		@include('admin.shared._modal_confirm_multiple_delete')
	</div>
	<!-- END container-fluid -->
</div>
@endsection
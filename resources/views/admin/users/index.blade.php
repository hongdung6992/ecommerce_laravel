@extends('admin.default')
@section('title') {{ t('user.manage') }} @endsection
@section('content')
<div class="content">
	<div class="container-fluid">
		@include('admin.partials.breadcrumb')
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="card mb-3">
					<div class="card-header">
						<span class="pull-right">
							<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_add_user">
								<i class="fa fa-user-plus" aria-hidden="true"></i> {{ t('user.add') }}
							</button>
						</span>
						<h3><i class="fa fa-table"></i> {{ t('user.list') }}</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="example1" class="table table-bordered table-hover display">
								<thead>
									<tr>
										<th><input type="checkbox" name="check_all" id="check-all"></th>
										<th>{{ t('shared.stt') }}</th>
										<th>{{ t('user.th.name') }}</th>
										<th>{{ t('user.th.email') }}</th>
										<th>{{ t('user.th.role') }}</th>
										<th>{{ t('user.th.status') }}</th>
										<th>{{ t('user.th.action') }}</th>
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
	</div>
	<!-- END container-fluid -->
</div>
@endsection
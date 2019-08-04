@if (Session::has('flash_message'))
<div class="alert {{ session('flash_level') }} alert-dismissible fade show" role="alert">
  {{ session('flash_message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
@endif
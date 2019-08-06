@if (!empty($users))
<?php $index = 1 ?>
@foreach ($users as $user)
<tr>
  <td><input type="checkbox" name="check[]"></td>
  <td>{{ $index }}</td>
  <td>{{ $user->name }}</td>
  <td>{{ $user->email }}</td>
  <td>{{ $user->phone }}</td>
  <td>{{ $user->role_id }}</td>
  <td>
    {{ ($user->status == 1)? t('status.active') : t('status.inactive') }}
  </td>
  <td>
    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
    <a href="#" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
  </td>
</tr>
<?php $index++ ?>
@endforeach
@endif
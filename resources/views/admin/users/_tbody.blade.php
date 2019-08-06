@if (!empty($users))
<?php $index = 1 ?>
@foreach ($users as $user)
<tr>
  <td><input type="checkbox" name="check[]"></td>
  <td class="text-center">{{ $index }}</td>
  <td>{{ $user->name }}</td>
  <td>{{ $user->email }}</td>
  <td>{{ $user->phone }}</td>
  <td>{{ $user->role_id }}</td>
  <td class="text-center">
    <span class="status status-{{ ($user->status == 1) ? 'active' : 'inactive' }}">{{ ($user->status == 1)? t('status.active') : t('status.inactive') }}</span>
  </td>
  <td class="text-center">
    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
  </td>
</tr>
<?php $index++ ?>
@endforeach
@endif
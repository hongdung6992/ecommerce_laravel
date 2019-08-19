@if (!$products->isEmpty())
<?php $index = 1 ?>
@foreach ($products as $product)
<tr>
  <td>{{ $index }}</td>
  <td>{{ $product->name }}</td>
  <td>{{ $product->code }}</td>
  <td>{{ $product->color }}</td>
  <td>{{ $product->price }}</td>
  <td>
    <img alt="image" style="max-width:90px; height:auto;" src="{{ asset('images/uploads/default.jpg') }}">
  </td>
  <td>
    <button class="btn btn-secondary btn-sm"><i class="fa fa-info-circle"></i></button>
    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
  </td>
</tr>
<?php $index++ ?>
@endforeach
@endif
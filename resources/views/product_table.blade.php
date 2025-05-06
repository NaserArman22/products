@extends('dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/general.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
  
</head>
<body>

<div class="dashboard">
  
  <div class="header">
    <div class="user-info">
      <img src="{{ $user['image'] }}" alt="User Image">
      <h2>Welcome, <strong>{{$user['name']}}</strong></h2>
    </div>
    <div class="search-bar">
      <input type="text" placeholder="Search products...">
    </div>
  </div>

  <form action="{{ route('products.bulk-action') }}" method="POST">
  @csrf
  <div class="table-container">
  <table>
    <thead>
      <tr>
        <th><input type="checkbox" class="select-all"></th>
        <th>Image</th>
        <th>SKU</th>
        <th>Product</th>
        <th>Brand</th>
        <th>Category</th>
        <th>Region</th>
        <th>UOM</th>
        <th>Qty</th>
        <th>Cost</th>
        <th>RRP</th>
        <th>Stock</th>
        <th>Type</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($products as $index => $product)
      <tr>
     
<tr>
<td><input type="checkbox" name="selected[]" value="{{ $index }}"></td>
  <td><div class="image-cell">Image</div></td>
  <td>{{ $product['sku'] }}</td>
  <td>{{ $product['product'] }}</td>
  <td>{{ $product['brand'] }}</td>
  <td>{{ $product['category'] }}</td>
  <td>{{ $product['region'] }}</td>
  <td>{{ $product['uom'] }}</td>
  <td>{{ $product['qty'] }}</td>
  <td>${{ number_format($product['cost'], 2) }}</td>
  <td>${{ number_format($product['rrp'], 2) }}</td>
  <td>{{ $product['stock'] }}</td>
  <td>{{ $product['type'] }}</td>
</tr>

      </tr>
      @endforeach

      
    </tbody>
  </table>
</div>


  

  
  <div class="bulk-actions">
  <button type="submit" name="action" value="edit">Edit</button>
  <button type="submit" name="action" value="delete" class="delete">Delete</button>
  </div>
</form>
  
  <div class="pagination">
    <button>&laquo;</button>
    <button class="active">1</button>
    <button>2</button>
    <button>3</button>
    <button>&raquo;</button>
  </div>
</div>

</body>
</html>
@endsection
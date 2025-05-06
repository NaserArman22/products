<head>
  <meta charset="UTF-8">
  <title>Product Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/general.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
  
</head>
<div class="dashboard">
<h2>Edit Selected Products</h2>
<form action="{{ route('products.updateProduct') }}" method="POST">
    @csrf
    <div class="table-container">
    <table>
    <thead>
      <tr>
      
        <th>Product</th>
        <th>Brand</th>
        <th>Cost</th>
        </thead>
    <tbody>
    @foreach ($products as $index => $product)
    <tr>
    
           <input type="hidden" name="products[{{ $index }}][sku]" value="{{ $product['sku'] }}">
           <td> Product: <input type="text" name="products[{{ $index }}][product]" value="{{ $product['product'] }}"><br></td>
           <td>Brand: <input type="text" name="products[{{ $index }}][brand]" value="{{ $product['brand'] }}"><br></td>
           <td>  Cost: <input type="number" step="0.01" name="products[{{ $index }}][cost]" value="{{ $product['cost'] }}"><br></td>
            
        
            </tr>

      </tr>
    @endforeach
    
    </tbody>
    
  </table>
  <button type="submit">Save Changes</button>
</div>
    
</form>
</div>

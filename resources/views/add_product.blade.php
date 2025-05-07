@extends('dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
    
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/add_product.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
 
  <title>Add Product</title>
  
</head>
<body>

  <div class="form-container">
    <h2>Add New Product</h2>

    <form action="" method="POST" enctype="multipart/form-data">
      @csrf

   
      <div class="section">
        <h3>Product Details</h3>
        <div class="form-group">
          <div class="field">
            <label for="product">Product Name</label>
            <input type="text" id="product" name="product" required>
          </div>
          <div class="field">
            <label for="type">Type</label>
            <input type="text" id="type" name="type" required>
          </div>
          <div class="field" style="flex: 1 1 100%;">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="3"></textarea>
          </div>
        </div>
      </div>

     
      <div class="section">
        <h3>Product Inventory</h3>
        <div class="form-group">
          <div class="field">
            <label for="sku">SKU</label>
            <input type="text" id="sku" name="sku" required>
          </div>
          <div class="field">
            <label for="stock">Stock Quantity</label>
            <input type="number" id="stock" name="stock" required>
          </div>
        </div>
      </div>

      
      <div class="section">
        <h3>Origin</h3>
        <div class="form-group">
          <div class="field">
            <label for="region">Region</label>
            <input type="text" id="region" name="region">
          </div>
          <div class="field">
            <label for="brand">Brand</label>
            <input type="text" id="brand" name="brand">
          </div>
          <div class="field">
            <label for="category">Category</label>
            <input type="text" id="category" name="category">
          </div>
        </div>
      </div>

      
      <div class="section">
        <h3>Pricing</h3>
        <div class="form-group">
          <div class="field">
            <label for="cost">Cost Price</label>
            <input type="number" id="cost" name="cost" step="0.01" required>
          </div>
          <div class="field">
            <label for="rrp">RRP</label>
            <input type="number" id="rrp" name="rrp" step="0.01" required>
          </div>
        </div>
      </div>

      
      <div class="section">
        <h3>Scale</h3>
        <div class="form-group">
          <div class="field">
            <label for="unit_quantity">Unit Quantity</label>
            <input type="text" id="unit_quantity" name="unit_quantity">
          </div>
          <div class="field">
            <label for="package_type">Package Type</label>
            <input type="text" id="package_type" name="package_type">
          </div>
        </div>
      </div>

      
      <div class="section image-upload">
        <h3>Product Image</h3>
        <div class="form-group">
          <div class="field" style="flex: 1 1 100%;">
            <label for="product_image">Upload Image</label>
            <input type="file" id="product_image" name="product_image">
          </div>
        </div>
      </div>

      <button type="submit">Add Product</button>
    </form>
  </div>

</body>

</html>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/general.css') }}" />
  
</head>
<body>

<div class="dashboard">
  <!-- Header -->
  <div class="header">
    <div class="user-info">
      <img src="{{ asset('images/Picture1.png') }}" alt="User Image">
      <h2>Welcome, <strong>Arman</strong></h2>
    </div>
    <div class="search-bar">
      <input type="text" placeholder="Search products...">
    </div>
  </div>

 
  <table>
    <thead>
      <tr>
        <th><input type="checkbox" class="checkbox"></th>
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
      <tr>
        <td><input type="checkbox" class="checkbox"></td>
        <td><div class="image-cell">Image</div></td>
        <td>FL-00421</td>
        <td>Product 1</td>
        <td>Brand A</td>
        <td>Category A</td>
        <td>USA</td>
        <td>kg</td>
        <td>10</td>
        <td>$12.00</td>
        <td>$15.00</td>
        <td>120</td>
        <td>Type A</td>
      </tr>

      <tr>
        <td><input type="checkbox" class="checkbox"></td>
        <td><div class="image-cell">Image</div></td>
        <td>FL-00422</td>
        <td>Product 2</td>
        <td>Brand B</td>
        <td>Category B</td>
        <td>Canada</td>
        <td>ltr</td>
        <td>20</td>
        <td>$18.00</td>
        <td>$22.00</td>
        <td>80</td>
        <td>Type B</td>
      </tr>
    </tbody>
  </table>

  
  <div class="bulk-actions">
    <button>Edit</button>
    <button class="delete">Delete</button>
  </div>

  
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

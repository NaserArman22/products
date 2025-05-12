<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

use App\Http\Requests\PostProductRequest;

class ProductController extends Controller
{



     public function product() {
       $products = Product::select(
    'id',
    'name',
    'description',
    'type',
    'region',
    'brand',
    'category',
    'cost_price',
    'rrp',
    'sku',
    'stock_quantity',
    'unit_quantity',
    'package_type',
    'uom',
    'image_path'
)->get();
        return view('add_product',compact('products'));
    }

    
 public function postProduct(PostProductRequest $request) {
        $data = new Product;
        $data->name = $request->name;
       $data->description = $request->description;
      $data->type = $request->type;

     $data->region = $request->region;
       $data->brand = $request->brand;
     $data->category = $request->category;

    $data->cost_price = $request->cost_price;
    $data->rrp = $request->rrp;

     $data->sku = $request->sku;
    $data->stock_quantity = $request->stock_quantity;

     $data->unit_quantity = $request->unit_quantity;
     $data->package_type = $request->package_type;
     $data->uom = $request->uom;


     if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('front/images'), $filename);
            $data->image = $request->file('image')->getClientOriginalName();
        }
  
        $data->save();
        return redirect()->route('products.updateProduct')->with(['alert-type'=>'success','message'=>'New Product Created successfully']);
    }




    public function bulkAction(Request $request)
{
    $selectedIndexes = $request->input('selected', []);
    $action = $request->input('action');

    if (empty($selectedIndexes)) {
        return back()->with('error', 'No products selected.');
    }

    if ($action === 'delete') {
       
        return back()->with('success', 'Selected products deleted: ' . implode(', ', $selectedIndexes));
    }

    if ($action === 'edit') {




        $allProducts = [
            [
                'sku' => 'FL-00421',
                'product' => 'Product 1',
                'brand' => 'Brand A',
                'category' => 'Category A',
                'region' => 'USA',
                'uom' => 'kg',
                'qty' => 10,
                'cost' => 112.00,
                'rrp' => 15.00,
                'stock' => 120,
                'type' => 'Type A',
            ],
            [
                'sku' => 'FL-00422',
                'product' => 'Product 2',
                'brand' => 'Brand B',
                'category' => 'Category B',
                'region' => 'Canada',
                'uom' => 'ltr',
                'qty' => 20,
                'cost' => 18.005,
                'rrp' => 22.00,
                'stock' => 80,
                'type' => 'Type B',
            ]
        ];
        
        $productsToEdit = [];
        foreach ($selectedIndexes as $index) {
            if (isset($allProducts[$index])) {
                $productsToEdit[$index] = $allProducts[$index];
            }
        }
        
        return view('editProduct', ['products' => $productsToEdit]);


       
       
    }

    return back();
}

public function updateProduct(UpdateProductRequest $urequest,$id){
    $data=Product::find($id);//assume there is a Product  model for product
       $data->sku=$urequest->sku;
       $data->product=$urequest->product;
       $data->brand=$urequest->brand;
       $data->category=$urequest->category;
       $data->region=$urequest->region;
       $data->uom=$urequest->uom;
       $data->qty=$urequest->qty;
       $data->cost=$urequest->cost;
       $data->rrp=$urequest->rrp;
       $data->stock=$urequest->stock;
       $data->type=$urequest->type;
       if ($urequest->hasFile('product_image')) {
        $image = $urequest->file('product_image');
        $filename = $image->getClientOriginalName();
        $image->move(public_path('front/images'), $filename);
        $data->product_image = $request->file('product_image')->getClientOriginalName();
    }
    $data->update();
    return redirect()->route('get.product')->with(['alert-type'=>'success','message'=>'Product section updated successfully']);

}

}

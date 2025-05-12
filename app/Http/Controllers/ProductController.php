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
        return view('product_table',compact('products'));
    }


    public function getProduct() {
       $getProducts = Product::select(
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
        return view('add_product',compact('getProducts'));
    }
    
 public function store(PostProductRequest $request) {
    //dd($request->all());
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

   if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('front/images'), $filename);
            $data->image_path = $request->file('image_path')->getClientOriginalName();
        }

    $data->save();

    return redirect()->route('get.product')->with('message', 'Product added successfully!');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Product()
    {
        
        $products = [
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

        $user = [
            'name' => 'Arman',
            'image' => asset('images/Picture1.png'),
        ];

        return view('product_table', compact('products', 'user'));
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
       
        return back()->with('info', 'Redirecting to edit form for: ' . implode(', ', $selectedIndexes));
    }

    return back();
}

}

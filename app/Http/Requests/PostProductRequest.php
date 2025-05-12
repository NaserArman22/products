<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     *      
     */
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'sku' => 'required|string|max:100',
            'name' => 'required|string|max:255',
            'description'=>'required|string|max:1000',
            'type'=>'required|string|max:255',
            
            'brand' => 'required|string|max:100',
            'category' => 'required|string|max:100',
            'region' => 'required|string|max:100',


            'cost_price' => 'required|numeric|min:0',
            'rrp' => 'required|numeric|min:0',

            
           
            'stock_quantity' => 'required|numeric|min:0',
          

            'unit_quantity' => 'required|numeric|min:0',
            'package_type' => 'required|string|max:100',
            'uom' => 'required|string|max:10',

            
            
            
            
            'image_path' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048'
        ];
    }
}

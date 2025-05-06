<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'product' => 'required|string|max:255',
            'brand' => 'required|string|max:100',
            'category' => 'required|string|max:100',
            'region' => 'required|string|max:100',
            'uom' => 'required|string|max:10',
            'qty' => 'required|numeric|min:0',
            'cost' => 'required|numeric|min:0',
            'rrp' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'type' => 'required|string|max:100',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048'
        ];
    }
}

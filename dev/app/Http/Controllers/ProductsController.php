<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\ProductCategory;
use Illuminate\Support\Facades\Http;

class ProductsController extends Controller
{
    public function getProducts(){
        
        $data = Http::get('https://fws-api.app/api/v1.0/getAllProducts');
        
        $products = collect($data->json());
       
        $categories = $products->unique('id_categoria');
        $categories->values()->all();

        foreach($categories as $category)
        {
            ProductCategory::create([
                'category_id'   => $category['id_categoria'],
                'name'          => $category['categoria']
            ]);
        }

       
        foreach($products as $product)
        {
            Products::create([
                'category_id'  => $product['id_categoria'],
                'codigo_producto'  => $product['codigo_producto'],
                'color'  => $product['color'],
                'nombre_producto'  => $product['nombre_producto'],
                'peso'  => $product['peso'],
                'precio'  => $product['precio'],
                'stock'  => $product['stock'],
                'tamano'  => $product['tamano'],
            ]);
        }

    }

    public function updateProduct()
    {
        $data = Http::get('https://fws-api.app/api/v1.0/getAllProducts');
        $products = collect($data->json());

        foreach($products as $product)
        {
            Products::where('codigo_producto',$product['codigo_producto'])
                        ->update([
                                    'category_id'=>$product['id_categoria'],
                                    'codigo_producto'  => $product['codigo_producto'],
                                    'color'  => $product['color'],
                                    'nombre_producto'  => $product['nombre_producto'],
                                    'peso'  => $product['peso'],
                                    'precio'  => $product['precio'],
                                    'stock'  => $product['stock'],
                                    'tamano'  => $product['tamano'],
                                ]);
        }
    }
}

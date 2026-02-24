<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function categories()
    {
        require app_path('data/data.php');

        return view('categories', [
            'categories' => $categories
        ]);
    }

    public function produits($category)
    {
        require app_path('data/data.php');

        $productsCategory = $products[$category] ?? [];

        return view('products', [
            'products' => $productsCategory,
            'category' => $category
        ]);
    }

    public function detail($id)
    {
        require app_path('data/data.php');

        $product = getProductById($id);

        return view('produit-detail', [
            'product' => $product
        ]);
    }
}
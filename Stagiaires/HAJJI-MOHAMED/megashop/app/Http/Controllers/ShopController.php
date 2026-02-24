<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
 public function index()
{
    require_once app_path('data/data.php');

    global $categories, $config; // <--- هاد السطر مهم

    return view('index', [
        'categories' => $categories,
        'config' => $config
    ]);
}
    public function contact()
    {
        return view('contact');
    }

    public function cgv()
    {
        require app_path('data/data.php');

        global $categories, $config; 

        return view('cgv', [
            'cgv' => $cgv
        ]);
    }
}
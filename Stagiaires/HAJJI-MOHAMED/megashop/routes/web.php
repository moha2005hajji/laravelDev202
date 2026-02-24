<?php
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;

Route::get('/', [ShopController::class,'index'])->name('home');

Route::get('/categories',[ProductController::class,'categories'])->name('categories');

Route::get('/categorie/{id}',[ProductController::class,'produits'])->name('categorie.produits');

Route::get('/produit/{id}',[ProductController::class,'detail'])->name('produit.detail');

Route::get('/contact',[ShopController::class,'contact'])->name('contact');

Route::get('/cgv',[ShopController::class,'cgv'])->name('cgv');
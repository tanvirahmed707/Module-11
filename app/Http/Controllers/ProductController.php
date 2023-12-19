<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        
        $todaySales = Product::whereDate('created_at', today())->sum('price');
       $yesterdaySales = Product::whereDate('created_at', today()->subDay())->sum('price');
        $thisMonthSales = Product::whereMonth('created_at', now()->month)->sum('price');
        $lastMonthSales = Product::whereMonth('created_at', now()->subMonth()->month)->sum('price');

        return view('dashboard', compact('todaySales', 'yesterdaySales', 'thisMonthSales', 'lastMonthSales'));
    }

    public function showAll()
    {
        
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function showSales()
    {
        
        $sales = Product::whereNotNull('sold_at')->get();
        return view('sales.index', compact('sales'));
    }



    // public function saleDetails(Product $product)
    // {
    //     $sales = $product->sales()->get();
    //     return view('products.saleDetails', compact('product', 'sales'));
    // }
    






    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);

        $product = new Product([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
        ]);



        $product->save();

        return redirect('/products')->with('success', 'Product added successfully!');





        
    



    }
} 




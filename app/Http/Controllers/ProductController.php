<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $product =Product::take(3)->inRandomOrder()->get();
        return view('welcome',["products"=>$product]);
    }


    public function get($product)
    {
         
        return view('product',["product"=>Product::find($product)]);
    
    }
   
    
    public function getByCategory(Request $category)
    {
            if ($category->query('category')=="all") {
              
                return view('products',["category"=>Category::all(),"c"=>$category->query("category"),"products"=>Product::all()]);

            }
            else{
                $products = Product::all();
                     
              dd( $products->categories);
                return view('products',["category"=>Category::all(),"c"=>$category->query("category"),"products"=>  $products]);

            }
    
    }



}

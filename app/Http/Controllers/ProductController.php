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
        $product = Product::find($product);
        
          $products=$product->category->products->where("id","!=",$product->id);

        return view('product',["product"=>$product,"products"=>$products]);
    
    }
   
    
    public function getByCategory(Request $category)
    {
            if ($category->query('category')=="all") {
              
                return view('products',["category"=>Category::all(),"c"=>$category->query("category"),"products"=>Product::all()]);

            }
            else{
                $category = Category::find($category);
                return view('products',["category"=>Category::all(),"c"=>$category[0]->name,"products"=>  $category[0]->products]);

            }
    
    }



}

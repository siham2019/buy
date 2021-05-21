<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{


    public function index()
    {
        return view("cart",['cart'=>Cart::content()]);
    }

    public function remove($id)
    {
        Cart::remove($id);
        return back()->with("success","product deleted from  the cart");

    }


    public function store(Request $request)
    {
        $duplicata = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id == $request->id;
        });

        if ($duplicata->isNotEmpty()) {
            return back()->with('error', 'product is already added');
        }

        $product=Product::find($request->id);
         Cart::add($product->id,$product->name,1,$product->getAttributes()["price"])
         ->associate('App\Models\Product');
         return back()->with("success","product added to the cart");

    }




}

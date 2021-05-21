<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view("cart.cart",['cart'=>Cart::content()]);
    }
    public function store(Request $request)
    {
        $duplicata = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id == $request->id;
        });

        if ($duplicata->isNotEmpty()) {
            return back()->with('success', 'product is already added');
        }

        $product=Product::find($request->id);
         

         Cart::add($product->id,$product->title,1,$product->price)
         ->associate('App\Models\Product');
         return back()->with("success","product added to the cart");

    }

    public function destroy(Request $request)
    {
        Cart::remove($request->rowId);
        return back()->with("success","product deleted from  the cart");

    }
}

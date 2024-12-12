<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // app/Http/Controllers/CartController.php
// app/Http/Controllers/CartController.php

public function addToCart(Request $request)
{
    $productId = $request->product_id;
    $product = Product::find($productId);

    if (!$product) {
        return response()->json(['success' => false, 'message' => 'Product not found!']);
    }

    $cart = session()->get('cart', []);

    // Add product to cart or update quantity if it already exists
    if (isset($cart[$productId])) {
        $cart[$productId]['quantity']++;
    } else {
        $cart[$productId] = [
            'name' => $product->title, // Store the title of the product
            'price' => $product->price,
            'quantity' => 1,
            'image' => $product->image // Assuming you have an 'image' field in the product table
        ];
    }

    // Save the updated cart back to session
    session()->put('cart', $cart);

    // Calculate the total cart count and total price
    $cartCount = count($cart);
    $total = array_reduce($cart, function ($carry, $item) {
        return $carry + ($item['price'] * $item['quantity']);
    }, 0);

    // Return the updated cart count, total, and the cart contents
    return response()->json([
        'success' => true,
        'message' => 'Product added to cart!',
        'cartCount' => $cartCount, // Updated cart count
        'total' => $total, // Updated total price
        'cart' => $cart // Updated cart contents
    ]);
}


}
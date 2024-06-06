<?php

namespace App\Http\Controllers;

use App\Models\Backend\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * ini adalah function untuk home halaman 
     * depan dari webiste toko online yang buat
     */
    public function index()
    {
        // membuat variabel baru dengan nama data
        $data = Product::all();

        // untuk melihat semua data gunakan dd($data)
        // untuk melihat jumlah data gunakan dd($data->count())

        // dd($data->count());
        return view('frontend.home.index', compact('data'));
    }

    /**
     * ini adalah function untuk seluruh product
     * webiste toko online yang buat
     */
    public function product()
    {
        //
        return view('frontend.product.index');
    }

    /**
     * ini adalah function untuk halaman detail
     * dari product yang kita buat pada crud product
     */
    public function detail($id)
    {
        // 
        $data = Product::findOrFail($id);
        return view('frontend.product.detail', compact('data'));
    }

    /**
     * ini adalah function untuk melihat product 
     * yang sudah dimasukan dalam database cart / keranjang
     */
    public function cart()
    {
        //
        $data = Cart::where('user_id', auth()->user()->id)->get();
        return view('frontend.cart.index', compact('data'));
    }

    /**
     * ini adalah function memasukan product ke dalam
     * keranjang belanja kita, atau add to cart
     */
    public function keranjang(Request $request, $id)
    {
        $data = Product::find($id);
        
        $order = [
            'user_id' => auth()->user()->id,
            'product_id' => $data->id,
            'jumlah' => $request->jumlah
        ];
        
        $test = Cart::create($order);
        // dd($test);
        return redirect()->route('cart');
    }

    /**
     * ini adalah function menghapus salah satu product
     * yang ada dalam keranjang belanja
     */
    public function destroy_cart_product($id)
    {
        //
    }

    public function gallery()
    {
        return view('layouts.frontend.gallery');
    }

    public function about()
    {
        return view('layouts.frontend.about');
    }
}

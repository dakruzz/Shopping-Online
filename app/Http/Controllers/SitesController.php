<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Carbon\Carbon;

class SitesController extends Controller
{

    public function index()
    {
        $product = new Product();
        $product = $product->get();

        return view('shop.index', ['products' => $product]);
    }

    public function addToCart(Request $request, $id)
    {
        if(Auth::check()) {
            $product = new Product();
            $product = $product->getById($id);
            if ($request->session()->has('item')) {
                $item = $request->session()->get('item');
            } else {
                $item = null;
            }

            $cart = new Cart($item);
            $cart->add($product, $id);

            $request->session()->put('item', $cart);
            return redirect()->route('sites.index');
        }
        return redirect()->route('login');
    }

    public function cart(Request $request)
    {
        if(Auth::check()) {
            $products = $request->session()->get('item');
            return view('shop.basket', ['products' => $products]);
        }
        return redirect()->route('login');
    }

    public function getAddProduct()
    {
        if(Auth::check()) {
            return view('shop.addProduct');
        }
        return redirect()->route('shop.index');
    }

    public function postAddProduct(Request $request)
    {
        if(Auth::check()) {
            $input['title'] = $request->input('title');
            $input['imagePath'] = $request->input('imagePath');
            $input['description'] = $request->input('description');
            $input['price'] = $request->input('price');
            $input['category'] = $request->input('category');

            DB::table('product')->insert([
                'title' => $input['title'],
                'imagePath' => $input['imagePath'],
                'description' => $input['description'],
                'price' => $input['price'],
                'category' => $input['category'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]);
            return redirect()->route('sites.getAddProduct');
        }
        return redirect()->route('shop.index');
    }


}

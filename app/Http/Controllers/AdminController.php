<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class AdminController extends Controller
{
    public function add_product()
    {
        return view('Admin.Menu.add_product');
    }
    public function store_add_product(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'image' => 'required'
        ]);
        $file = $request->file('image');
        $path = time().'_'.$request->name.'.'.$file->getClientOriginalExtension();
        Storage::disk('local')->put('public/'.$path, file_get_contents($file));

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $path
        ]);
        if($product){
            return redirect()->route('add_product')->with('message', 'Produk berhasil di tambahkan');
        }else{
            return redirect()->route('add_product')->with('message', 'Produk gagal di tambahkan');
        }
    }
    public function product()
    {
        $products = Product::all();
        return view('Admin.Menu.product', compact('products'));
    }
    public function edit(Product $product)
    {
        return view('Admin.menu.edit', compact('product'));
    }

    public function prd()
    {
            return view('Admin.Menu.prd',[
            "produk" => Product::all(),

        ]);
    }

    public function show($id)
    {
        return view('Admin.Menu.show',[

            "item" => Product::find($id),
        ]);
    }

    public function addToCart($id)
    {

        $produck = Product::findOrFail($id);

        $cart = session()->get('cart',[]);

        if(isset($cart[$id])) {
            $cart[$id]['stock']++;
        } else {
            $cart[$id] = [
                "name" => $produck->name,
                "image"=> $produck->image,
                "price"=> $produck->price,
                "stock"=>1,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id && $request->stock){
            $cart = session()->get('cart');
            $cart[$request->id]["stock"] = $request->stock;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }

    }
    public function post()
    {
        return view('Admin.Menu.post');
    }
    public function add_post()
    {
        return view('Admin.Menu.addpost');
    }
 }

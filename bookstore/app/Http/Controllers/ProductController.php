<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = Product::with('category')->get();

        return view('products/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['categories'] = Category::all();
        return view('products/add', $data);
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * 
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'product_judul' => 'required',
        //     'Product_pengarang' => 'required',
        //     'product_penerbit' => 'required',
        //     'product_tahunterbit' => 'required|numeric',
        //     'product_harga' => 'required|numeric',
        //     'category_id' => 'required',
        // ]);

        // // dd($request->all());
        // Product::create([
        //     'judul'=>$validated('product_judul'),
        //     'pengarang'=>$validated('product_pengarang'),
        //     'penerbit'=>$validated('product_penerbit'),
        //     'tahunterbit'=>$validated('product_tahunterbit'),
        //     'harga'=>$validated('product_harga'),
        //     'category_id'=>$validated('category_id'),
        // ]);

        Product::create([
            'judul'=>$request->input('product_judul'),
            'pengarang'=>$request->input('product_pengarang'),
            'penerbit'=>$request->input('product_penerbit'),
            'tahunterbit'=>$request->input('product_tahunterbit'),
            'harga'=>$request->input('product_harga'),
            'category_id'=>$request->input('category_id'),
        ]);
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @
     * 
     */
    public function edit($id)
    {
        $data['categories'] = Category::all();
        $data['product'] = Product::find($id);
        return view('/products/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'product_judul' => 'required',
        //     'Product_pengarang' => 'required',
        //     'product_penerbit' => 'required',
        //     'product_tahunterbit' => 'required|numeric',
        //     'product_harga' => 'required|numeric',
        //     'category_id' => 'required',
        // ]);

        Product::where('id', $id)->update([
            'judul'=>$request->input('product_judul'),
            'pengarang'=>$request->input('product_pengarang'),
            'penerbit'=>$request->input('product_penerbit'),
            'tahunterbit'=>$request->input('product_tahunterbit'),
            'harga'=>$request->input('product_harga'),
            'category_id'=>$request->input('category_id')
        ]);
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        product::destroy($id);
        return redirect('/product');
    }
}

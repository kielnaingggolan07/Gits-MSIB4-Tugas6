<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['categories'] = Category::all();
        return view('categories/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['categories'] = Category::all();
        return view('categories/add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'category_genre' => 'required',
        //     'category_description' => 'required',
        // ]);

        // Category::create([
        //     'genre'=>$validated('category_genre'),
        //     'description'=>$validated('category_description'),
        // ]);
        // dd($request->all());
        Category::create([
            'genre'=>$request->input('category_genre'),
            'description'=>$request->input('category_description'),
        ]);
        return redirect('/category');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $data['categories'] = Category::where('id',$id )->get();
        // $data['categories'] = Category::all();
        return view('/categories/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //   $validated = $request->validate([
        //     'category_genre' => 'required',
        //     'category_description' => 'required',
        // ]);

        // Category::create([
        //     'genre'=>$validated('category_genre'),
        //     'description'=>$validated('category_description'),
        // ]);

        // Category::where('id', $id)->update([
        //     'genre'=>$validated('category_genre'),
        //     'description'=>$validated('category_description')
        // ]);

        Category::where('id', $id)->update([
            'genre'=>$request->input('category_genre'),
            'description'=>$request->input('category_description')
        ]);

        return redirect('/category');
        // $data['categories'] = Category::all();
        // return view('/categories/edit', $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('/category');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        return view ('admin.categories',compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()                       //to open addCategory blade only to add new category
    {
        return view ('admin.addCategory'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)              //to save insert Categorydata
    {
        $new_category = new category();
        $new_category->category_name = $request->categoryName;      
        $new_category->save();
    
        return redirect('/admin/allCartegories');
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
    public function edit(string $id)                      //to open editcategory bladw with selecte id and data for this id
    {
        $category = Category::findOrFail($id);
        return view ('admin.editCategory',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */ 
    public function update(Request $request, string $id):RedirectResponse         //to save update category data
    {
        $category = Category::findOrFail($id);
        $category->category_name = $request->categoryName;
        $category->save();
        return redirect('/admin/allCartegories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}

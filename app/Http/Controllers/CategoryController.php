<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Car;
use App\Models\Message;
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
        $unreadMsges= Message::where('isRead',false)->get();
        $noUnreadMsges= Message::where('isRead',false)->count();
        return view ('admin.categories',compact('categories','unreadMsges','noUnreadMsges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()                       //to open addCategory blade only to add new category
    {
        $unreadMsges= Message::where('isRead',false)->get();
        $noUnreadMsges= Message::where('isRead',false)->count();
        return view ('admin.addCategory',compact('unreadMsges','noUnreadMsges')); 
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
        $unreadMsges= Message::where('isRead',false)->get();
        $noUnreadMsges= Message::where('isRead',false)->count();
        return view ('admin.editCategory',compact('category','unreadMsges','noUnreadMsges'));
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
    public function destroy(string $id):RedirectResponse
    {
        $cars = Car::get();
        foreach($cars as $car){           
            if($car->category_id == $id){      //if category contain cars dont delete and redirect the same page
               
                return redirect('/admin/allCartegories');
            }
        }
        Category::where('id',$id)->delete();       //if category empty->delete it
        return redirect('/admin/allCartegories');   
    }
}

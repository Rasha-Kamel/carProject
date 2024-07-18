<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()         //select or show all cars
    {
        $cars = Car::get();
        return view ('admin.cars',compact("cars"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()                  //to open addCar blade only to add new Car
    {
        $categories = Category::get();
        return view ('admin.addCar',compact("categories")); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = Category::find($request->category);

        $new_car = new car();
        $new_car->category_id = $category->id ;
        $new_car->title = $request->title ;
        $new_car->content = $request->content;
        $new_car->luggage = $request->luggage;
        $new_car->doors = $request->doors;
        $new_car->passengers = $request->passengers;
        $new_car->price = $request->price;
        $new_car->active = $request->active??"No";
        $new_car->image = $request->image;
        $new_car->category = $category->category_name;
        $new_car->save();
        return redirect('/admin/allCars');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::get();
        $car = Car::findOrFail($id);
        return view('admin.editCar',compact('car','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse 
    {
        $category = Category::find($request->category);

        Car::where('id',$id)->update([
        'category_id' => $category->id,
        'title' => $request->title ,
        'content' => $request->content,
        'luggage' => $request->luggage,
        'doors' => $request->doors,
        'passengers' => $request->passengers,
        'price' => $request->price,
        'active' => $request->active??"No",
        'image' => $request->image,
        'category' => $category->category_name,
           
        ]);
        return redirect('/admin/allCars');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Car::where('id',$id)->delete();
        return redirect('/admin/allCars');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;
use App\Models\Testimonial;

class RentcarController extends Controller
{
    public function index()            //select or show all users
    {
        $cars = Car::orderBy('created_at','DESC')->get();
        $testimonials = Testimonial::get();
        return view ('index.index',compact('cars','testimonials'));
    }

    public function single(string $id)            //select or show all users
    {
        $car = Car::findOrFail($id);
        $categories = Category::get();
        $testimonials = Testimonial::get();
        return view('index.single',compact('car','categories','testimonials'));

        // $category_cars = Car::where('category_id',$car->category_id)->count();
        // return view('index.single',compact('car','categories','category_cars'));
        // return "the ..". $category_cars;

    }

}

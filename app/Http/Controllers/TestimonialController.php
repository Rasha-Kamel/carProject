<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::get();
        return view('admin.testimonials',compact("testimonials"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addTestimonials'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse 
    {
        $new_test = new testimonial();
        $new_test->name = $request->name;
        $new_test->position = $request->position;
        $new_test->content = $request->content;
        $new_test->published = $request->published??"No";
        $new_test->image = $request->image;
        $new_test->save();
    
        return redirect('/admin/allTestimonials');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.editTestimonials',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse 
    {

        Testimonial::where('id',$id)->update([
        'name' => $request->name ,
        'position' => $request->position,
        'content' => $request->content,
        'published' => $request->published??"No",
        'image' => $request->image,
        ]);
        return redirect('/admin/allTestimonials');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Testimonial::where('id',$id)->delete();
        return redirect('/admin/allTestimonials');
    }
}

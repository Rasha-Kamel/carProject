<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
// use Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        $messages = Message::get();
        return view('admin.messages',compact("messages"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_message = new message();
        $new_message->first_name = $request->first_name;
        $new_message->last_name = $request->last_name;
        $new_message->email = $request->email;
        $new_message->content = $request->content;
        $new_message->save();
    
        return redirect(route('contact'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = Message::findOrFail($id);
        return view ('admin.showMessage',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
       Message::where('id',$id)->delete();
        return redirect('/admin/allMessages');
    }

    public function send_mail()
    {
        $msg = Message::find(1);
        Mail::to('admin@gmail.com')->send(new ContactMail($msg));
        return "Email has been sent";
    }



}

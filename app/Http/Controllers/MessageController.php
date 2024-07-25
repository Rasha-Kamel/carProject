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
        $unreadMsges= Message::where('isRead',false)->get();
        $noUnreadMsges= Message::where('isRead',false)->count();
        return view('admin.messages',compact('messages','unreadMsges','noUnreadMsges'));
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
    public function store(Request $request):RedirectResponse
    {
        $message = [
            'first_name.required'=>'First Name is required',
            'first_name.string'=>'First Name should be string',
            'last_name.required'=>'Last Name is required',
            'last_name.string'=>'Last Name should be string',
            'email.required'=>'Email is required',
            'content.required'=>'Content Message is required',
        ];
        $data =$request->validate([
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'email'=>'required|max:255',
            'content'=>'required|string'
        ],$message);
       
        $msg = Message::create([
            'first_name' =>$data['first_name'],
            'last_name' =>$data['last_name'],
            'email' =>$data['email'],
            'content' =>$data['content'],
            'isRead'=>false,
        ]);
        $data = $msg->toArray();
        Mail::to('admin@gmail.com')->send(new ContactMail($data));
        return redirect(route('contact'))->with('success','Your Message Has Been Sent !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = Message::findOrFail($id);
        if ($message) {
            $message->isRead = true;
            $message->save();
        }

        $unreadMsges= Message::where('isRead',false)->get();
        $noUnreadMsges= Message::where('isRead',false)->count();
        return view ('admin.showMessage',compact('message','unreadMsges','noUnreadMsges'));
       
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



}

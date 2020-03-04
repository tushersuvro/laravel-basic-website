<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    //
	public function submit(Request $request){
		
		$this->validate($request,[
			'name' => 'required',
			'email' => 'required'
		]);
		
		//return 'Success';
		//return $request->input('name');
		$message = new Message;

		$message->name = $request->input('name');
		$message->email = $request->input('email');
		$message->message = $request->input('message');

		//save
		$message->save();

		//redirect
		return redirect('/messages')->with('success','Message Sent');
    }
    
	public function getMessages(){
		$messages = Message::all();
		return view('messages.list')->with('messages',$messages);
	}    

}

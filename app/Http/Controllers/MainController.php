<?php

namespace App\Http\Controllers;


use App\Models\ContactsModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function review(){
        $reviews = new ContactsModel();

        return view('review', ['reviews' => $reviews->all()]);
    }

    public function news(){
        return view('news');
    }

    public function review_check(Request $request){
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:10|max:100',
            'message' => 'required|min:15|max:500',
        ]);

        $review = new ContactsModel();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }
}

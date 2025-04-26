<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function review()
    {
        $reviews = new Reviews();

        return view('review', ['reviews'=>$reviews->all()]);
    }
    public function review_check(Request $request)
    {
        $valid = $request->validate(
            [
                'email' => 'required|email:rfc',
                'subject' => 'required|min:5|max:100',
                'message' => 'required|min:5|max:500',
            ]
        );
        $review = new Reviews();
        $review -> email =$request->input('email');
        $review -> subject =$request->input('subject');
        $review -> message =$request->input('message');

        $review -> save();

        return redirect('/review');
    }
}

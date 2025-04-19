@extends('layout')

@section('title')Reviews @endsection

@section('main_content')
    <h1>Review form</h1>
    <form method="post" action="/review/check">
        <input type="email" name="email" id="email" placeholder="Input your email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Input your review" class="form-control"><br>
        <textarea name="message" id="message" placeholder="Input your message" class="form-control"></textarea><br>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection

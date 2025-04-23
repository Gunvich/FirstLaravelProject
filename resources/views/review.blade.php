@extends('layout')

@section('title')Reviews @endsection

@section('main_content')
    <h1>Review form</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
    @endif

    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Input your email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Input your review theme" class="form-control"><br>
        <textarea name="message" id="message" placeholder="Input your message" class="form-control"></textarea><br>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection

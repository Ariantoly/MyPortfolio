@extends('layouts.layout')

@section('title', 'About')

@section('content')
    <link rel="stylesheet" href="css/aboutStyle.css">
    <div class="d-flex">
        <div class="pp flex-shrink-0">
            <img src="images/pp.jpg" class="img-fluid rounded" alt="Profile Picture">
        </div>

        <div class="bio flex-grow-1 ms-4">
            <p>Name: Ariantoly</p>
            <p>DoB: Pekanbaru, 15 November 2001</p>
            <p></p>
        </div>
    </div>

    <div class="contact mt-5">
        <h4>Contact</h4>
        <div class="my-2"><img src="icons/gmail.png" alt="Gmail" class="me-2"> ariantoly.lee@gmail.com</div>
        <div class="my-2"><img src="icons/phone.png" alt="Phone" class="me-2"> +62-823-8776-6215</div>
        <div class="my-2"></div>
        <div></div>
    </div>

    <div class="contact mt-5">
        <h4>Social Media</h4>
        <a href="https://www.linkedin.com/in/ariantoly" target="_blank" class="me-2"><img src="icons/linkedin.png" alt="LinkedIn"></a>
        <a href="https://www.instagram.com/ariantoly/" target="_blank" class="me-2"><img src="icons/instagram.png" alt="Instagram"></a>
        <a href="https://www.facebook.com/ariantoly" target="_blank" class="me-2"><img src="icons/facebook.png" alt="Facebook"></a>
    </div>
@endsection
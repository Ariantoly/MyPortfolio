@extends('layouts.layout')

@section('title', 'About')

@section('content')
    <div class="d-flex">
        <div class="pp flex-shrink-0">
            <img src="images/pp.jpg" class="img-fluid rounded" alt="Profile Picture">
        </div>

        <div class="bio ms-4 col-8">
            <p>Hello, my name is Ariantoly. I was born in Pekanbaru, November 15th, 2001. I am from Selatpanjang,
                Kepulauan Meranti, Riau. Now, I am a student in Bina Nusantara University, majoring 
                in Computer Science and takes Software Engineering as my streaming. 
            </p>
        </div>
    </div>

    <div class="experience mt-5">
        <h4 class="fs-3 fw-bold">Experience</h4>
        <div class="mb-3">
            <span class="fs-5 fw-bold">HIMTI Binus University</span>
            <br>
            <span>Activist of Creative and Design Division</span>
            <br>
            <span>2020 - now</span>
        </div>
        <div class="mb-3">
            <span class="fs-5 fw-bold">BINUS University</span>
            <br>
            <span>Scholarship Mentor</span>
            <br>
            <span>2021 - now</span>
        </div>
    </div>

    <div class="contact mt-5">
        <h4 class="fs-3 fw-bold">Contact</h4>
        <div class="my-2"><img src="icon/gmail.png" alt="Gmail" class="me-2"> ariantoly1@gmail.com</div>
        <div class="my-2"><img src="icon/outlook.png" alt="Outlook" class="me-2"> ariantoly@binus.ac.id</div>
        <div class="my-2"><img src="icon/phone.png" alt="Phone" class="me-2"> +62-823-8776-6215</div>
        <div class="my-2"></div>
        <div></div>
    </div>

    <div class="contact mt-5">
        <h4 class="fs-3 fw-bold">Social Media</h4>
        <a href="https://www.linkedin.com/in/ariantoly" target="_blank" class="me-2"><img src="icon/linkedin.png" alt="LinkedIn"></a>
        <a href="https://www.instagram.com/ariantoly/" target="_blank" class="me-2"><img src="icon/instagram.png" alt="Instagram"></a>
        <a href="https://www.facebook.com/ariantoly" target="_blank" class="me-2"><img src="icon/facebook.png" alt="Facebook"></a>
        <a href="https://www.github.com/Ariantoly" target="_blank" class="me-2"><img src="icon/github.png" alt="Github"></a>
    </div>
@endsection
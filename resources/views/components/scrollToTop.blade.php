@if(request()->route()->uri == '/' || request()->route()->uri == 'about')
    <link rel="stylesheet" href="css/style.css">
@else
    <link rel="stylesheet" href="../css/style.css">
@endif

<a href="#" id="toTopBtn" class="bg-primary rounded-circle cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>

@if(request()->route()->uri == '/' || request()->route()->uri == 'about')
    <script src="js/script.js"></script>
@else
    <script src="../js/script.js"></script>
@endif
{{-- © https://bbbootstrap.com/snippets/simple-back-top-smooth-scroll-17111555 --}}
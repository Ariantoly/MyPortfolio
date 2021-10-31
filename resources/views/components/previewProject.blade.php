<div id="carouselExampleInterval" class="carousel slide carousel-dark w-100" data-bs-ride="carousel">
    <div class="carousel-inner">
        @for($i = 1; $i <= 4; $i++)
            <div class="carousel-item @if($i == 1) active @endif" data-bs-interval="3000">
                <img src="/images/frawlsalla-{{$i}}.png" class="d-block w-100" alt="...">
            </div>
        @endfor
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
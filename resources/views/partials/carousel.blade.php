<div class="col-md-5 mt-2">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($carousel->images as $image)
            <div class="text-center carousel-item @if($loop->first) active @endif">
                <img class="d-block mx-auto img-fluid" src="{{ asset('/'. $image->name) }}" alt="{{ $image->name }}">
                <div class="carousel-caption d-none d-lg-block" style="margin-top: 90%;">
                    <h6>{{ $carousel->name }}</h6>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
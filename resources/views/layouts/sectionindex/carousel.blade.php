<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @php
            $nob = 1;
            $pp = 2;
        @endphp
        @foreach ($categories as $c)
            @if ($c->id == 1)
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
            @else
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $nob++ }}"
                    aria-label="Slide {{ $pp++ }}"></button>
            @endif
        @endforeach
    </div>

    <div class="carousel-inner">
        @foreach ($categories as $cp)
            @if ($cp->id == 1)
                <div class="carousel-item active">
                    @if ($cts->image)
                        <img src="{{ asset('storage/' . $cts->image) }}" class="bd-placeholder-img"
                            style="object-fit: cover" alt="{{ $cts->nm_category }}" width="100%" fill="#777"
                            focusable="false" aria-hidden="true" height="225" alt="image-{{ $cts->image }}">
                    @else
                        <img src="https://source.unsplash.com/1000x1000?{{ $cts->nm_category }}"
                            class="bd-placeholder-img" style="object-fit: cover" alt="{{ $cts->nm_category }}"
                            width="100%" fill="#777" focusable="false" aria-hidden="true" height="225"
                            alt="image-{{ $cts->image }}">
                    @endif

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>{{ $cts->nm_category }}</h1>
                            <p>{{ $cts->description }}
                            </p>

                        </div>
                    </div>
                </div>
            @else
                <div class="carousel-item">
                    @if ($cp->image)
                        <img src="{{ asset('storage/' . $cp->image) }}" class="bd-placeholder-img"
                            style="object-fit: cover" alt="{{ $cp->nm_category }}" width="100%" fill="#777"
                            focusable="false" aria-hidden="true" height="225" alt="image-{{ $cts->image }}">
                    @else
                        <img src="https://source.unsplash.com/1000x1000?{{ $cp->nm_category }}"
                            class="bd-placeholder-img" style="object-fit: cover" alt="{{ $cp->nm_category }}"
                            width="100%" fill="#777" focusable="false" aria-hidden="true" height="225"
                            alt="image-{{ $cts->image }}">
                    @endif

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>{{ $cp->nm_category }}</h1>
                            <p>{{ $cts->description }}
                            </p>
                            {{-- <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> --}}
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>


    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

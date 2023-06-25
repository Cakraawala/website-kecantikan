{{-- <div class="container" style="margin-top: 70px"> --}}
<!-- Marketing messaging and featurettes
                                                    <!-- Wrap the rest of the page in another container to center all the content. -->
<section id="marketing1" style="background-color:var(--pinkbg)">
    <div class="container">
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <a style="text-decoration:none;color:black" href="/products/{{ $pts1->slug }}">
                    <h2 class="featurette-heading">{{ $pts1->nm_products }}. <span class="text-muted">Barang pertama
                            dan terlaris!</span></h2>
                </a>
                @if ($pts1->deskripsi)
                    <p class="lead">
                        {{ $pts1->deskripsi }}
                    </p>
                @else
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nihil quia
                        dolorum unde autem perferendis magnam delectus adipisci! Repellendus, ipsum totam quod
                        dolorem rerum unde illum odio quia velit illo..</p>
                @endif
            </div>
            <div class="col-md-5">
                @if ($pts1->image)
                    <img class="bd-placeholder-img overflow-hidden bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        style="padding-bottom: 60px" width="500" height="500"
                        src="{{ asset('storage/' . $pts1->image) }}">
                @else
                    <img class="bd-placeholder-img overflow-hidden bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        style="padding-bottom: 60px" width="500" height="500"
                        src="https://source.unsplash.com/500x500?{{ $pts1->nm_products }}">
                @endif

            </div>
        </div>
    </div>
</section>


<section id="marketing2">
    <div class="container">
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <a style="text-decoration:none;color:black" href="/products/{{ $pts2->slug }}">
                    <h2 class="featurette-heading">{{ $pts2->nm_products }}. <span class="text-muted">Barang
                            terbaru.</span></h2>
                </a>

                @if ($pts2->deskripsi)
                    <p class="lead mt-3">
                        {{ $pts2->deskripsi }}
                    </p>
                @else
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nihil quia
                        dolorum unde autem perferendis magnam delectus adipisci! Repellendus, ipsum totam quod
                        dolorem rerum unde illum odio quia velit illo..</p>
                @endif
            </div>
            <div class="col-md-5 order-md-1">
                @if ($pts2->image)
                    <img class="bd-placeholder-img overflow-hidden bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        style="padding-bottom: 60px" width="500" height="500"
                        src="{{ asset('storage/' . $pts2->image) }}">
                @else
                    <img class="bd-placeholder-img overflow-hidden bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        style="padding-bottom: 60px" width="500" height="500"
                        src="https://source.unsplash.com/500x500?{{ $pts2->nm_products }}">
                @endif
            </div>
        </div>
    </div>
</section>

<section id="marketing3" style="
background-color: var(--pinkbg)">
    <hr class="featurette-divider">
    <div class="container">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Coming soon! <span class="text-muted">Blue Calming Mask
                        Moisturizer</span></h2>
                <p class="lead">Menenangkan kulit, bantu perbaiki skin barrier, mempercepat penyembuhan jerawat
                    dan bekas jerawat. memberikan kelembaban ekstra untuk kulit wajah yang kenyal dan kencang.</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img overflow-hidden bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    style="padding-bottom: 60px" width="500" height="500" src="/img/comingsoon.jpg">

            </div>
        </div>
    </div>
</section>

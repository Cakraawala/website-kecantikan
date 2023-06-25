<div class="col-lg-12">
    <div class="card shadow border-0">
        <div class="card-body">
            <h3 class="card-title">
                Kategori
            </h3>
            <hr>
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-lg-2 col-md-3 col-4 mb-4">
                        <a class="text-decoration-none text-light" href="/categories/{{ $category->slug }}">
                            <div class="card text-dark">
                                @if ($category->image)
                                    <img src="{{ asset('storage/' . $category->image) }}"
                                        alt="{{ $category->nm_category }}" class="card-img-top">
                                @else
                                    <img src="https://source.unsplash.com/1200x1500?{{ $category->nm_category }}"
                                        alt="{{ $category->nm_category }}" class="card-img-top">
                                @endif
                                <div class="card-body">
                                    <h6 class="card-title text-center" style="height: 20px; font-size: 14px;">
                                        {{ $category->nm_category }}
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

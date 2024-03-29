<div class="album py-5 bg-light">
    <div class="container">
        <div class="row  g-3">
            @foreach ($products as $product)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm">
                        <a href="/products/{{ $product->slug }}">

                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}"
                                    class="bd-placeholder-img card-img-top" alt="{{ $product->nm_products }}"
                                    width="300" height=300">
                            @else
                                <img src="https://source.unsplash.com/700x400?{{ $product->nm_products }}"
                                    class="bd-placeholder-img card-img-top" alt="{{ $product->nm_products }}"
                                    width="214" height="225">
                            @endif

                            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" src="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $product->nm_products }}</text></svg> --}}

                            <div class="card-body">
                                <h4 class="card-text" style="height: 52px"><a
                                        style="text-decoration: none; color:#4d4949;"
                                        href="/products/{{ $product->slug }}">{{ $product->nm_products }}</a>
                                </h4>
                                <div class="d-flex justify-content-between align-items-">
                                    <h6 style="color: red">Rp.{{ number_format($product->price) }}</h6>
                                    <h6 class="text-muted mb-3">Stock : {{ $product->quantity }}</h6>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between align-items-">
                                        <h6></h6>
                                        <div class="btn-group">
                                            <form action="/add-to-cart/{{ $product->id }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="quantity" value="1">
                                                <button class="btn btn-sm btn-outline-success fa fa-shopping-cart"
                                                    type="submit"></button>
                                            </form>
                                            {{-- <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-sm btn-outline-secondary mt-3 fa fa-shopping-cart"></a> --}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5 mb-5">

            <h4> <a href="/products" class="btn shadow btn-custom p-2"> See other products</a>
            </h4>
        </div>
    </div>
</div>

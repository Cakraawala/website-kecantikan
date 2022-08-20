@extends('layouts.main')

@section('title')
<title>Cakra | Product {{ $title }}</title>
@endsection
@section('content')

<div class="con" style="margin-top: 100px; margin-bottom:200px;">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('error'))

            <div class="alert alert-danger alert-dismissible fade show" role="alert"> {{session('error')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>

            @endif
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            @if ($product->image)
                            <a href="{{asset('storage/' . $product->image)}}">
                            <img src="{{asset('storage/' . $product->image)}}"
                            class="bd-placeholder-img card-img-top" alt="{{ $product->CategoryProduct->nm_category }}" width="250" height="400">
                        </a>
                                @else
                                <img src="https://source.unsplash.com/700x400?{{ $product->CategoryProduct->nm_category }}"
                                class="bd-placeholder-img card-img-top" alt="{{ $product->CategoryProduct->nm_category }}" width="250" height="400">
                            @endif
                        </div>
                        <div class="col-md-6 mt-5">
                            <h1 style="font-family: Calisto MT">&nbsp;{{ $product->nm_products }}</h1>
                            <h6>&nbsp; in <a href="/categories/{{ $product->CategoryProduct->slug }}" style="text-decoration: none;"> {{ $product->CategoryProduct->nm_category }}</h6></a>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>Price</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($product->price) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Stock</td>
                                        <td>:</td>
                                        <td>{{ number_format($product->quantity) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>:</td>
                                        <td>{{ $product->deskripsi ?? '-' }}</td>
                                    </tr>
                                        <tr>
                                            <td>Quantity</td>
                                            <td>:</td>
                                            <td><form action="/add-to-cart/{{$product->id}}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <input type="number" class="form-control" name="quantity" required value="1">
                                                        <button class="btn btn-primary mt-3" type="submit"><i class="fa fa-shopping-cart"></i>&nbsp; &nbsp;Add To Cart</button>
                                                    </div>
                                                </div>
                                            </form>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>

                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Content Wrapper. Contains page content -->
{{-- <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-atasas mb-5 mt-2">P </div>


        <div class="container">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

                    <div class="container">
                      <div class="carousel-caption text-start">
                        <h1>{{ $product->nm_products}}</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="{{ route('add.to.cart', $product->id) }}"><i class="fa fa-shopping-cart nav-link px-2 me-2" style="font-size:24px;color:white"></i> Add to Cart</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

                    <div class="container">
                      <div class="carousel-caption">
                        <h1>{{ $product->nm_products}}</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="{{ route('add.to.cart', $product->id) }}"><i class="fa fa-shopping-cart nav-link px-2 me-2" style="font-size:24px;color:white"></i> Add to Cart</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

                    <div class="container">
                      <div class="carousel-caption text-end">
                        <h1>{{ $product->nm_products}}</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="{{ route('add.to.cart', $product->id) }}"><i class="fa fa-shopping-cart nav-link px-2 me-2" style="font-size:24px;color:white"></i> Add to Cart</a></p>
                      </div>
                    </div>
                  </div>
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



              <div class="row g-5">
                <div class="col-md-8">
                  <h3 class="pb-4 mb-4 fst-italic border-bottom">
                      <a href="/categories/{{ $product->CategoryProduct->slug }}"> {{ $product->CategoryProduct->nm_category }}
                    </a>
                </h3>

                  <article class="blog-post">
                    <h2 class="blog-post-title">{{ $product->nm_products}}</h2>
                    <p class="blog-post-meta">January 1, 2021 by <a href="{{ route('add.to.cart', $product->id) }}">Mark</a></p>
                    {!! $product->deskripsi !!}
                    <hr>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <h2>Blockquotes</h2>
                    <p>This is an example blockquote in action:</p>
                    <blockquote class="blockquote">
                      <p>Quoted text goes here.</p>
                    </blockquote>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <h3>Example lists</h3>
                    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout. This is an example unordered list:</p>
                    <ul>
                      <li>First list item</li>
                      <li>Second list item with a longer description</li>
                      <li>Third list item to close it out</li>
                    </ul>
                    <p>And this is an ordered list:</p>
                    <ol>
                      <li>First list item</li>
                      <li>Second list item with a longer description</li>
                      <li>Third list item to close it out</li>
                    </ol>
                    <p>And this is a definition list:</p>
                    <dl>
                      <dt>HyperText Markup Language (HTML)</dt>
                      <dd>The language used to describe and define the content of a Web page</dd>
                      <dt>Cascading Style Sheets (CSS)</dt>
                      <dd>Used to describe the appearance of Web content</dd>
                      <dt>JavaScript (JS)</dt>
                      <dd>The programming language used to build advanced Web sites and applications</dd>
                    </dl>
                    <h2>Inline HTML elements</h2>
                    <p>HTML defines a long list of available inline tags, a complete list of which can be found on the <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer Network</a>.</p>
                    <ul>
                      <li><strong>To bold text</strong>, use <code class="language-plaintext highlighter-rouge">&lt;strong&gt;</code>.</li>
                      <li><em>To italicize text</em>, use <code class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.</li>
                      <li>Abbreviations, like <abbr title="HyperText Markup Langage">HTML</abbr> should use <code class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, with an optional <code class="language-plaintext highlighter-rouge">title</code> attribute for the full phrase.</li>
                      <li>Citations, like <cite>— Mark Otto</cite>, should use <code class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.</li>
                      <li><del>Deleted</del> text should use <code class="language-plaintext highlighter-rouge">&lt;del&gt;</code> and <ins>inserted</ins> text should use <code class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.</li>
                      <li>Superscript <sup>text</sup> uses <code class="language-plaintext highlighter-rouge">&lt;sup&gt;</code> and subscript <sub>text</sub> uses <code class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.</li>
                    </ul>
                    <p>Most of these elements are styled by browsers with few modifications on our part.</p>
                    <h2>Heading</h2>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <h3>Sub-heading</h3>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <pre><code>Example code block</code></pre>
                    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
                  </article>

                  <article class="blog-post">
                    <h2 class="blog-post-title">Another blog post</h2>
                    <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>

                    <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <blockquote>
                      <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
                    </blockquote>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <h3>Example table</h3>
                    <p>And don't forget about tables in these posts:</p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Upvotes</th>
                          <th>Downvotes</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Alice</td>
                          <td>10</td>
                          <td>11</td>
                        </tr>
                        <tr>
                          <td>Bob</td>
                          <td>4</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Charlie</td>
                          <td>7</td>
                          <td>9</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td>Totals</td>
                          <td>21</td>
                          <td>23</td>
                        </tr>
                      </tfoot>
                    </table>

                    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
                  </article>

                  <article class="blog-post">
                    <h2 class="blog-post-title">New feature</h2>
                    <p class="blog-post-meta">December 14, 2020 by <a href="#">Chris</a></p>

                    <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <ul>
                      <li>First list item</li>
                      <li>Second list item with a longer description</li>
                      <li>Third list item to close it out</li>
                    </ul>
                    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
                  </article>

                  <nav class="blog-pagination mb-5" aria-label="Pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled">Newer</a>
                  </nav>

                </div>

                <div class="col-md-4 mt-5">
                  <div class="position-sticky" style="top: 10rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                      <h4 class="fst-italic">About</h4>
                      <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                    </div>

                    <div class="p-4">
                      <h4 class="fst-italic">Archives</h4>
                      <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">February 2021</a></li>
                        <li><a href="#">January 2021</a></li>
                        <li><a href="#">December 2020</a></li>
                        <li><a href="#">November 2020</a></li>
                        <li><a href="#">October 2020</a></li>
                        <li><a href="#">September 2020</a></li>
                        <li><a href="#">August 2020</a></li>
                        <li><a href="#">July 2020</a></li>
                        <li><a href="#">June 2020</a></li>
                        <li><a href="#">May 2020</a></li>
                        <li><a href="#">April 2020</a></li>
                      </ol>
                    </div>

                    <div class="p-4">
                      <h4 class="fst-italic">Elsewhere</h4>
                      <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>

            {{-- </main>

        </div>
    </section>
  </div> --}}
  <!-- /.content-wrapper -->
@endsection

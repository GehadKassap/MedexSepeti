@extends('layouts.main')
@section('title')
  MedexSepeti
@endsection
@section('content')
    {{-- SLIDER --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ setting("slider_1") ?  asset(setting("slider_1")->value) : asset("defaults/slider1.jpg")  }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ setting("slider_2") ?  asset(setting("slider_2")->value) : asset("defaults/slider2.jpg")  }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ setting("slider_3") ?  asset(setting("slider_3")->value) : asset("defaults/slider3.jpg")  }}" class="d-block w-100" alt="...">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{--Special Offers  --}}
    <section class="special-offers container my-5">
        <h2 class="text-center my-2">special offers</h2>
        <div class="owl-carousel owl-theme" id="special-offers">
            @foreach ($specialOffers as $specialOffer)
              <div class="item">
                <div class="card custom-card">
                    <img
                    height="200"
                    src="{{ $specialOffer->image ? asset("$specialOffer->image") : asset("defaults/product.png")  }}"
                    class="card-img-top" alt="{{ $specialOffer->name }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $specialOffer->name }}</h5>
                      <p class="card-text">{{ substr($specialOffer->short_desc,0,80)  }}..</p>
                      <h6 class="card-text">
                        <span class="badge search-bg p-2">{{ $specialOffer->price  }}  T.L </span>
                        <span class="fw-bolder">offer </span>
                         <span class="badge search-bg p-2"> {{ $specialOffer->discount }} % </span>
                      </h6>
                      <a href="{{ url("/") }}" class="btn btn-primary main-bg">Show More</a>
                    </div>
                  </div>
              </div>
            @endforeach
        </div>
    </section>

    {{--Brands  --}}
    <section class="brands main-bg mb-5 py-5">
      <div class="container">
        <h2 class="text-center mb-4 text-light">Brands</h2>
        <div class="owl-carousel owl-theme" id="brands">
            @foreach ($brands as $brand)
              <div class="item">
                <div class="card custom-card">
                    <img
                    height="200"
                    src="{{ $brand->image ? asset("$brand->image") : asset("defaults/product.png")  }}"
                    class="card-img-top" alt="{{ $brand->name }}">
                    <div class="card-body">
                      <h5 class="card-title text-center">{{ $brand->name }}</h5>
                      <p class="card-text">{{ substr($brand->desc,0,80)  }}..</p>
                    </div>
                  </div>
              </div>
            @endforeach
        </div>
      </div>
    </section>

    {{--The most viewed products --}}
    <section class="most-viewed container mb-5">
        <h2 class="text-center my-4">The most viewed products</h2>
        <div class="owl-carousel owl-theme" id="most-viewed">
            @foreach ($mostViewedProds as $mostViewedProd)
              <div class="item">
                <div class="card custom-card">
                    <img
                    height="200"
                    src="{{ asset("$mostViewedProd->image")}}"
                    class="card-img-top" alt="{{ $mostViewedProd->name }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $mostViewedProd->name }}</h5>
                      <p class="card-text">{{ substr($mostViewedProd->short_desc,0,80)  }}..</p>
                      <a href="#" class="btn btn-primary main-bg">Show More</a>
                    </div>
                  </div>
              </div>
            @endforeach
        </div>
    </section>

    {{--Products Just Arrived  --}}
    <section class="just-arrived container mb-5">
        <h2 class="text-center my-4">Products that just arrived</h2>
        <div class="owl-carousel owl-theme" id="just-arrived">
            @foreach ($justArivedProds as $justArivedProd)
              <div class="item">
                <div class="card custom-card">
                    <img
                    height="200"
                    src="{{ asset("$justArivedProd->image")}}"
                    class="card-img-top" alt="{{ $justArivedProd->name }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $justArivedProd->name }}</h5>
                      <p class="card-text">{{ substr($justArivedProd->short_desc,0,90)  }}..</p>
                      <a href="#" class="btn btn-primary main-bg">Show More</a>
                    </div>
                  </div>
              </div>
            @endforeach
        </div>
    </section>
@endsection

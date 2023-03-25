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
    <section class="special-offers container mb-5">
        <h2 class="text-center my-2">special offers</h2>
        <div class="owl-carousel owl-theme">
            @foreach ($specialOffers as $specialOffer)
              <div class="item">
                <div class="card">
                    <img
                    height="200"
                    src="{{ $specialOffer->image ? asset("$specialOffer->image") : asset("defaults/product.png")  }}"
                    class="card-img-top" alt="{{ $specialOffer->name }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $specialOffer->name }}</h5>
                      <p class="card-text">{{ $specialOffer->short_desc  }}</p>
                      <p class="card-text">{{ $specialOffer->price  }}
                        offer {{ $specialOffer->discount }} %
                      </p>
                      <a href="#" class="btn btn-primary">Show More</a>
                    </div>
                  </div>
              </div>
            @endforeach
        </div>
    </section>
    {{--The most viewed products --}}
    <section class="special-offers container mb-5">
        <h2 class="text-center my-2">The most viewed products</h2>
        <div class="owl-carousel owl-theme">
            @foreach ($mostViewedProds as $mostViewedProd)
              <div class="item">
                <div class="card">
                    <img
                    height="200"
                    src="{{ asset("$mostViewedProd->image")}}"
                    class="card-img-top" alt="{{ $mostViewedProd->name }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $mostViewedProd->name }}</h5>
                      <p class="card-text">{{ $mostViewedProd->short_desc  }}</p>
                      <a href="#" class="btn btn-primary">Show More</a>
                    </div>
                  </div>
              </div>
            @endforeach
        </div>
    </section>
    {{--Products Just Arrived  --}}
    <section class="special-offers container mb-5">
        <h2 class="text-center my-2">Products that just arrived</h2>
        <div class="owl-carousel owl-theme">
            @foreach ($justArivedProds as $justArivedProd)
              <div class="item">
                <div class="card">
                    <img
                    height="200"
                    src="{{ asset("$justArivedProd->image")}}"
                    class="card-img-top" alt="{{ $justArivedProd->name }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $justArivedProd->name }}</h5>
                      <p class="card-text">{{ $justArivedProd->short_desc  }}</p>
                      <a href="#" class="btn btn-primary">Show More</a>
                    </div>
                  </div>
              </div>
            @endforeach
        </div>
    </section>
@endsection

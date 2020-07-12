@extends('layouts.app')
@section('content')

<!-- ################### ไฮไลท์ ################## --> 
<div id="carouselExampleControls" class="carousel slide position-relative mt-5 line-green" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($hilights as $key=>$item)
        <li data-target="#carouselExampleControls" data-slide-to="{{ $key }}" {{ $key == 0 ? 'class="active"' : '' }}></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach ($hilights as $key=>$item)
        <div class="carousel-item bg-hilight {{ $key == 0 ? 'active' : '' }}">
        <img class="d-block w-100" src="{{ asset('storage/'.$item->image) }}" alt="First slide">
            <div class="col-lg-12 mx-auto text-center title-hilight" data-aos="fade-up">
            <h1><span class="bg-title-hilight">{{ $item->title }}</span></h1>
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
<!-- ################### ไฮไลท์ ################## --> 




<!-- ################### ไอคอนหมวดสินค้า ################## --> 
<div class="site-section mb-5 mt-4">
    <div class="container">
        <div id="slide-icon" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                @foreach($product_categories->chunk(6) as $key => $chunk)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    @foreach($chunk->chunk(3) as $key => $subchunk)
                    <div class="row mt-5">
                        @foreach($subchunk as $product_category)
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <a href="#"><img src="{{ asset('storage/'.$product_category->image) }}" alt=""><span class="cat pl-2">{{ $product_category->title }}</span></a>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev prev-icon-slide" href="#slide-icon" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next next-icon-slide" href="#slide-icon" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</div>
<!-- ################### ไอคอนหมวดสินค้า ################## --> 




<!-- ################### บริการของเรา ################## --> 
<div class="section-bg-service bg-green">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h2 class="section-title-underline2">
                    <span>บริการของเรา</span>
                </h2>
            </div>
            <div class="col-lg-9">
                <div class="tech-slideshow">
                    <div class="mover-1">
                        <div class="row">
                            <div class="col-md-9">
                                <p>{{ $service->body2 }}</p>
                                <p class="pb-2"><a href="{{ url('service') }}" class="more-intro">อ่านต่อ</a></p>
                            </div>
                            <div class="col-md-3">
                                <img src="{{ asset('storage/'.$service->image) }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ################### บริการของเรา ################## --> 




<!-- ################### สินค้า ################## --> 
<div class="site-section">
    <div class="container">
        <div class="row mb-2 justify-content-center text-center position-relative">
            <div class="col-lg-6 mb-5">
                <h2 class="section-title-underline mb-3">
                    <span>สินค้าของเรา</span>
                </h2>
            </div>
            <a href="{{ url('product') }}" class="viewall-cat">ดูทั้งหมด</a>
        </div>
        <div class="row">
            @foreach ($products as $product)
                @include('inc.product', ['product' => $product])
            @endforeach
        </div>
    </div>
</div>
<!-- ################### สินค้า ################## --> 

@endsection

@extends('layouts.app')
@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4 pt-5"
    style="background-image: url('{{ asset('site-html/images/shop_1.jpg') }}');background-position: 0 32%;">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">สินค้า</h2>
                <p>ต.เจริญนครการไฟฟ้า ร้านขายอุปกรณ์อิเล็กทรอนิกส์</p>
            </div>
        </div>
    </div>
</div>

@php
    // dd($product)
@endphp
<!-- ################### breadcrumns ################## -->
<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="{{ url('') }}">หน้าแรก</a> <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="{{ url('product') }}">สินค้า</a> <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="{{ url('product/category/'.$product->productCategory->id) }}">{{ $product->productCategory->title }}</a> <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">{{ $product->title }}</span>
    </div>
</div>
<!-- ################### breadcrumns ################## -->

<!-- ################### contents ################## -->
<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 mb-4">
                <h3>{{ $product->title2 }}</h3>
                <div class="mb-5 mt-5 single2">
                    <img src="{{ asset('storage/'.$product->image) }}" alt="Image" class="img-fluid">
                    <div class="price2">{{ $product->price }}.-</div>
                </div>

                <p>{!! $product->body !!}</p>
            </div>
        </div>
    </div>
</div>
<!-- ################### contents ################## -->

@endsection

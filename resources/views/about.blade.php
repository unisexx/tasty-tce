@extends('layouts.app')
@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4 pt-5" style="background-image: url('{{ asset('site-html/images/shop_1.jpg') }}');background-position: 0 32%;">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">{{ $about->title }}</h2>
                <p>{{ $about->title2 }}</p>
            </div>
        </div>
    </div>
</div>

<!-- ################### breadcrumns ################## -->
<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="{{ url('') }}">หน้าแรก</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">เกี่ยวกับเรา</span>
    </div>
</div>
<!-- ################### breadcrumns ################## -->

<!-- ################### contents ################## -->
<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            {!! $about->body !!}
        </div>
    </div>
</div>
<!-- ################### contents ################## -->


@endsection

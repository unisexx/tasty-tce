@extends('layouts.app')
@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4 pt-5" style="background-image: url('{{ asset('site-html/images/bg_1.jpg') }}')">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">{{ $service->title }}</h2>
                <p>{{ $service->title2 }}</p>
            </div>
        </div>
    </div>
</div>

<!-- ################### breadcrumns ################## -->
<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="{{ url('') }}">หน้าแรก</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">งานบริการ</span>
    </div>
</div>
<!-- ################### breadcrumns ################## -->

<!-- ################### contents ################## -->
<div class="site-section">
    <div class="container">
        {!! $service->body !!}
    </div>
</div>
<!-- ################### contents ################## -->


@endsection

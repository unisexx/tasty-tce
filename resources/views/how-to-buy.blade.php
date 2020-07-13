@extends('layouts.app')
@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4 pt-5"
    style="background-image: url('{{ asset('site-html/images/bg_5.jpg') }}');background-position: 0 32%;">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">{{ $how->title }}</h2>
                <p>{{ $how->title2 }}</p>
            </div>
        </div>
    </div>
</div>

<!-- ################### breadcrumns ################## -->
<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="index.html">หน้าแรก</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">{{ $how->title }}</span>
    </div>
</div>
<!-- ################### breadcrumns ################## -->

<!-- ################### contents ################## -->
<div class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-12 mb-5">
                <h2 class="section-title-underline mb-5">
                    <span>วิธีการสั่งซื้อ</span>
                </h2>
                <p>สอบถามวิธีการสั่งซื้อสินค้าและการชำระเงินผ่านช่องทางได้ดังนี้</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="feature-1 border">
                    <div class="icon-wrapper">
                        <img src="{{ asset('site-html/images/icon-line.png') }}" alt="">
                    </div>
                    <div class="feature-1-content">
                        <h2><span class="text-green">Line:</span> <a href="https://line.me/ti/p/~{{ $how->line }}" target="_blank">{{ $how->line }}</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="feature-1 border">
                    <div class="icon-wrapper">
                        <img src="{{ asset('site-html/images/icon-facebook.png') }}" alt="">
                    </div>
                    <div class="feature-1-content">
                        <span class="text-green">Facebook:</span> <a
                            href="{{ $how->facebook }}"
                            class="text-black" target="_blank"> {{ $how->facebook }}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="feature-1 border">
                    <div class="icon-wrapper">
                        <img src="{{ asset('site-html/images/icon-call.png') }}" alt="">
                    </div>
                    <div class="feature-1-content">
                        <h2><span class="text-green">โทร:</span> {{ $how->tel }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-5">
        <div class="row mt-5 mb-5 justify-content-center text-center">
            <div class="col-lg-12 mb-5">
                <h2 class="section-title-underline mb-5">
                    <span>วิธีการชำระเงิน</span>
                </h2>
                <p>สามารถโอนเงินเช้าบัญชีบริษัท</p>
                <div class="col-md-12 bg-gray mx-auto p-5">
                    <h4>{{ $how->bank_account }}</h4>
                    <div class="row col-md-12 mx-auto p-5">
                        <div class="col-md-6">
                            <img src="{{ asset('site-html/images/icon-scb.png') }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <h3>{{ $how->bank_number }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ################### contents ################## -->


@endsection

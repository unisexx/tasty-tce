@extends('layouts.app')
@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4 pt-5" style="background-image: url('{{ asset('site-html/images/bg_3.jpg') }}')">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
            <h2 class="mb-0">{{ $contact->title }}</h2>
                <p>{{ $contact->title2 }}</p>
            </div>
        </div>
    </div>
</div>

<!-- ################### breadcrumns ################## -->
<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="index.html">หน้าแรก</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">{{ $contact->title }}</span>
    </div>
</div>
<!-- ################### breadcrumns ################## -->

<!-- ################### ติดต่อเรา ################## -->
<div class="site-section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h4><strong>{{ $contact->name }}</strong></h4>
                <ul class="icon-contact mt-4">
                    <i class="icon-map-marker text-green"></i>
                    <li>{{ $contact->address }}</li>
                </ul>
                <ul class="icon-contact mt-4">
                    <i class="icon-phone text-green"></i>
                    <li>โทรศัพท์: {{ $contact->tel }}</li>
                </ul>
                <ul class="icon-contact mt-4">
                    <i class="icon-contact_mail text-green"></i>
                    <li>อีเมล: <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-6">
                {!! $contact->map !!}
            </div>
        </div>
        <hr class="mt-5 mb-5">
        <form method="post" action="{{ url('contact/save') }}">
        {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="fname">ชื่อ</label>
                    <input name="fname" type="text" id="fname" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="lname">นามสกุล</label>
                    <input name="lname" type="text" id="lname" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="eaddress">อีเมล</label>
                    <input name="email" type="text" id="eaddress" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="tel">เบอร์โทรศัพท์</label>
                    <input name="tel" type="text" id="tel" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="message">ข้อความ</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="submit" value="ส่งข้อความ" class="btn btn-success text-white btn-lg px-5">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ################### ติดต่อเรา ################## -->

@endsection

@push('js2')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\ContactRequest') !!}
@endpush
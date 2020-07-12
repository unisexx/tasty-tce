@php
    $product_categories = \App\ProductCategory::active()->orderBy('order', 'asc')->get();
@endphp

<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<div class="py-2 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 d-none d-lg-block fontsize01">
                <a href="#" class="small mr-3">{{ $contact->name }}</a>
                <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> {{ $contact->tel }}</a>
                <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> {{ $contact->email }}</a>
            </div>
        </div>
    </div>
</div>

<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="site-logo">
                <a href="{{ url('') }}" class="d-block">
                <img src="{{ asset('site-html/images/logo.png') }}" alt="Image" class="img-fluid">
                </a>
            </div>
            <div class="mr-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li class="active">
                            <a href="{{ url('') }}" class="nav-link text-left">หน้าแรก</a>
                        <li>
                            <a href="{{ url('about') }}" class="nav-link text-left">เกี่ยวกับเรา</a>
                        </li>
                        <li class="has-children">
                            <a href="{{ url('product') }}" class="nav-link text-left">สินค้า</a>
                            <ul class="dropdown">
                                @foreach ($product_categories as $item)
                                    <li><a href="{{ url('product/category/'.$item->id) }}">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('service') }}" class="nav-link text-left">งานบริการ</a>
                        </li>
                        <li>
                            <a href="{{ url('how-to-pay') }}" class="nav-link text-left">วิธีการซื้อและชำระเงิน</a>
                        </li>
                        <li>
                            <a href="{{ url('contact') }}" class="nav-link text-left">ติดต่อเรา</a>
                        </li>
                    </ul>
                    </ul>
                </nav>
            </div>
            <div class="ml-auto">
                <div class="social-wrap">
                    <a href="{{ $contact->facebook }}" target="_blank" class="text-center pt-1 icon-fb"><img src="{{ asset('site-html/images/icon_facebook.png') }}" alt=""></a>
                    <a href="https://line.me/ti/p/~{{ $contact->line }}" target="_blank" class="text-center pt-1 icon-line"><img src="{{ asset('site-html/images/icon_Line.png') }}" alt=""></a>
                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="clearfix mt-5 pt-5"></div>

@extends('layouts.app')
@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4 pt-5" style="background-image: url('{{ asset('site-html/images/bg_3.jpg') }}')">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">{{ $product_category->title }}</h2>
                <p>มีครบจบที่เดียว ทั้งขายสินค้าและบริการด้านรับเหมาไฟฟ้า</p>
            </div>
        </div>
    </div>
</div>

<!-- ################### breadcrumns ################## -->
<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="{{ url('') }}">หน้าแรก</a> <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="{{ url('product') }}">สินค้า</a> <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">{{ $product_category->title }}</span>
    </div>
</div>
<!-- ################### breadcrumns ################## -->

<!-- ################### เครื่องมือ ################## -->
<div class="site-section">
    <div class="container">
        <div class="row mb-2 position-relative">
            <div class="col-lg-6 mb-5">
                <h2 class="section-title-underline mb-3">
                    <span>{{ $product_category->title }}</span>
                </h2>
            </div>
            <div class="col-lg-6">
                <div class="dropdown open float-right">
                    <button class="btn btn-success dropdown-toggle text-white" type="button" id="dropdownMenu5"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="cat-product">ประเภทสินค้า</span>
                    </button>
                    <div class="dropdown-menu">
                        @foreach ($product_categories as $item)
                            <a class="dropdown-item" href="{{ url('product/category/'.$item->id) }}">{{ $item->title }}</a>
                            <div class="dropdown-divider"></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
                @include('inc.product', ['product' => $product])
            @endforeach
        </div>
    </div>
</div>
<!-- ################### เครื่องมือ ################## -->

<!-- ################### pagination ################## -->
<div class="mt-5">
    {{ @$products->appends(@$_GET)->render() }}
</div>
<!-- ################### pagination ################## -->

@endsection

@push('css')
<style>
.pagination {
    justify-content: center;
}
</style>
@endpush
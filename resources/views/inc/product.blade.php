<div class="col-lg-4 col-md-6 mb-4">
    <div class="course-1-item">
        <figure class="thumnail">
            <a href="{{ url('product/detail/'.$product->id) }}"><img src="{{ Voyager::image($product->thumbnail('cropped')) }}" alt="Image" class="img-fluid"></a>
            <div class="price">{{ $product->price }}.-</div>
            <div class="category">
                <h3>{{ $product->title }}</h3>
            </div>
        </figure>
        <div class="course-1-content pb-4">
            <h2>
                <div class="ht">{{ $product->title2 }}</div>
            </h2>
            <p class="desc mb-4 hp">{{ $product->body2 }}</p>
            </p>
            <p><a href="{{ url('product/detail/'.$product->id) }}" class="btn btn-success text-white rounded-0 px-4">อ่านต่อ</a>
            </p>
        </div>
    </div>
</div>

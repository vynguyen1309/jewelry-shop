@extends('index')
@section('title', 'Home')
@section('content')
    <div class="container container-home">
        {{-- banner 1 --}}
        <div class="banner text-center">
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('picture/banner-1.jpg')}}" class="d-block w-100 " alt="banner1.jpg">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('picture/banner-4.jpg')}}" class="d-block w-100 " alt="banner2.jpg">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('picture/Jewellery-Banner.png')}}" class="d-block w-100 " alt="banner3.jpg">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        {{-- sản phẩm nổi bật --}}
        <div class="text-center mt-4">
            <h1>Sản phẩm mới ra mắt</h1>
            <center>
                <hr class="w-25">
            </center>
        </div>
        <div class="row">
            @foreach ($newProducts as $pro)
                <div class="col-md-3 mb-4 pro-hover ">
                    <div class="box-pro text-center">
                        <div class="product-thumb">
                            <a href="" class="link-to-product">
                                <img src="{{ asset('/storage') . '/' . $pro->thumbnail }}" alt="pro-1.jpg" width="200" height="200"
                                    class="product-thumbnail">
                            </a>
                        </div>
                        <div class="info">
                            <h4 class="product-title mt-2">
                                <a href="" class="pr-name">{{ $pro->pr_name }}</a>
                            </h4>
                            <div class="price mt-2">
                                <span class="price-amount">
                                    {{ number_format($pro->price, 0, ',', '.') }}đ

                                </span>
                            </div>
                            <div class="add-to-cart bg-danger mt-2 m-auto w-50">
                                <div class="buttons">
                                    <a href="" class="btn add-to-cart-btn">
                                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row d-flex align-items-center mt-3 bg-light mb-4">
            <div class="banner col-lg-6">
                <img width="100%" src="{{ asset('picture/banner-2.jpg') }}" alt="logo.jpg">
            </div>
            <div class="col-lg-6">
                <p class="fs-5">
                    Mỗi món trang sức của Jewels Puzzle đều được chế tác thủ công bởi người thợ kim hoàn
                    lành nghề, mang trọn tâm huyết và niềm đam mê trong từng nét chạm khắc tỉ mỉ.
                </p>
            </div>
        </div>
        {{-- danh mục --}}
        <div class="text-center mt-4">
            <h1>Danh mục sản phẩm</h1>
            <center>
                <hr class="w-25">
            </center>
            <div class="category">
                @foreach ($categories as $cate)
                <div class="box-cate"><a href="" class="text-uppercase">{{$cate->cate_name}}</a></div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

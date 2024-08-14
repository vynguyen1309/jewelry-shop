@extends('index')
@section('title', 'Home')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-3">
                <h3 class="text-center">Danh mục sản phẩm</h3>
                @foreach ($categories as $cate)
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="box-list-category mt-2 mb-2">
                            <ul class="list-unstyled m-0 p-0">
                                <li class="list-cate"><a href=""
                                        class="text-uppercase text-decoration-none text-dark">{{ $cate->cate_name }}</a></li>
                            </ul>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="col-lg-9 ">

                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-3 mb-4 pro-hover ">
                            <div class="box-pro text-center">
                                <div class="product-thumb">
                                    <a href="{{route('users.detailPro',$product)}}" class="link-to-product">
                                        <img src="{{ asset('/storage') . '/' . $product->thumbnail }}" alt="pro-1.jpg" width="200" height="200"
                                            class="product-thumbnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <h4 class="product-title mt-2">
                                        <a href="" class="pr-name">{{ $product->pr_name }}</a>
                                    </h4>
                                    <div class="price mt-2">
                                        <span class="price-amount">
                                            {{ number_format($product->price, 0, ',', '.') }}đ

                                        </span>
                                    </div>
                                    <div class="add-to-cart bg-danger mt-2 m-auto w-75">
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
                {{ $products->links() }}
            </div>
        </div>
        <div class="banner text-center mt-4">
            <img class="w-100" src="{{ asset('picture/banner-4.jpg') }}" alt="banner.png ">
        </div>
    </div>
@endsection

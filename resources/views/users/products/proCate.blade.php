@extends('index')
@section('title', 'Home')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-3">
                <h3 class="text-center">Danh mục sản phẩm</h3>

                <div class="categories">
                    @foreach ($categories as $cate)
                    <ul>

                            <li>
                                <a href="{{ route('categories','id') }}">{{ $cate->cate_name }}</a>
                            </li>

                        {{-- <li>
                            <a href="">Vòng tay</a>
                        </li>
                        <li>
                            <a href="">Dây chuyền</a>
                        </li>
                        <li>
                            <a href="">Khuyên tai</a>
                        </li> --}}
                    </ul>
                    @endforeach
                </div>

            </div>
            <div class="col-lg-9 ">

                <div class="row">
                    @foreach ($categories as $pro)
                        <div class="col-3 mb-4 contain-product layout-default text-center m-1">
                            <div class="box-pro">
                                <div class="product-thumb">
                                    <a href="{{ route('detail',$pro->id) }}" class="link-to-product">
                                        <img src="{{$pro->thumbnail}}" alt="pro-1.jpg" width="200"
                                            height="200" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    {{-- <b class="categories">{{$cate->name}}</b> --}}
                                    <h4 class="product-title"><a href="#" class="pr-name">{{$pro->pr_name}}</a></h4>
                                    <div class="price ">
                                        <span class="price-amount"><span class="currencySymbol"></span>{{number_format($pro->price,0)}}đ</span>
                                    </div>
                                    <div class="add-to-cart bg-danger ">

                                        <div class="buttons">

                                            <a href="{{ route('detail',$pro->id) }}" class="btn add-to-cart-btn"><i
                                                    class="fa fa-cart-arrow-down" aria-hidden="true"></i> Add to cart </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="banner text-center mt-4">
            <img class="w-100" src="{{ asset('picture/banner-4.jpg') }}" alt="banner.png ">
        </div>
    </div>
@endsection

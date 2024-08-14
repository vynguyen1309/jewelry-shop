@extends('index')
@section('title', 'Detail')
@section('content')
    <div class="container mt-5">

        <div class="detail-product row">
            {{-- image --}}
            <div class="col-lg-6">
                <div class="box-pro">
                    <div class="product-thumb text-center">
                        <a href="" class="link-to-product">
                            <img src="{{ asset('/storage') . '/' . $product->thumbnail }}" alt="detail-img.jpg" width="200"
                                height="200" class="product-thumbnail">
                        </a>
                    </div>
                </div>
            </div>
            {{-- info --}}
            <div class="col-lg-6">
                <div class="info">
                    <p><b>Mô tả</b></p>
                    <h4 class="product-title">{{ $product->pr_name }}</h4>
                    <p><b class="categories">{{ $product->category->cate_name }}</b></p>
                    <div class="price ">
                        <span class="price-amount"><span class="currencySymbol"></span>Giá:
                            {{ number_format($product->price, 0) }}đ</span>
                    </div>
                    {{-- <div class="size mt-4 mb-4">
                        Size: <select name="" id="">
                            <option value="" selected>7</option>
                            <option value="">8</option>
                            <option value="">9</option>
                            <option value="">10</option>

                        </select>
                    </div> --}}
                    <div class="description mt-3 mb-3">
                        <h6>{{ $product->pr_name }}</h6>
                        {{ $product->description }}
                    </div>

                        <form action="" method="POST">
                            @csrf
                            <label for="quantity">Số lượng</label>
                            <input type="number" name="quantity" id="" min="1" value="1">
                            <input type="hidden" name="id" value="{{$product->id}}">

                                <div class="add-to-cart bg-danger w-50 mt-3 text-center">
                            <button type="submit"class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down"
                                    aria-hidden="true"></i> Thêm vào giỏ hàng </button>
                            </div>
                        </form>

                </div>
            </div>

        </div>
        {{-- cac san pham khac --}}
        <div class="mt-4 mb-4">
            <h3>Các sản phẩm khác</h3>
        </div>
        <div class="row">
            {{-- product 1 --}}
            <div class="col-3 contain-product layout-default text-center m-1">
                <div class="box-pro">
                    <div class="product-thumb">
                        <a href="" class="link-to-product">
                            <img src="{{ asset('picture/product-1.jpg') }}" alt="pro-1.jpg" width="200" height="200"
                                class="product-thumnail">
                        </a>
                    </div>
                    <div class="info">
                        <b class="categories">Bracelet</b>
                        <h4 class="product-title"><a href="" class="pr-name">18K Gold
                                Bracelet</a></h4>
                        <div class="price ">
                            <span class="price-amount"><span class="currencySymbol"></span>9.500.000đ</span>
                        </div>
                        <div class="add-to-cart bg-danger ">

                            <div class="buttons">

                                <a href="" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down"
                                        aria-hidden="true"></i> Add to cart </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- product 2 --}}
            <div class="col-3 contain-product layout-default text-center m-1">
                <div class="box-pro">
                    <div class="product-thumb">
                        <a href="" class="link-to-product">
                            <img src="{{ asset('picture/product-1.jpg') }}" alt="pro-1.jpg" width="200" height="200"
                                class="product-thumnail">
                        </a>
                    </div>
                    <div class="info">
                        <b class="categories">Bracelet</b>
                        <h4 class="product-title"><a href="" class="pr-name">18K Gold
                                Bracelet</a></h4>
                        <div class="price ">
                            <span class="price-amount"><span class="currencySymbol"></span>9.500.000đ</span>
                        </div>
                        <div class="add-to-cart bg-danger">

                            <div class="buttons">

                                <a href="" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down"
                                        aria-hidden="true"></i> Add to cart </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('frontend.layouts.master')

@section('content')
    <div class="body__overlay"></div>
    <!-- Start Offset Wrapper -->
    <div class="offset__wrapper">
        <!-- Start Search Popap -->
        <div class="search__area">
            <div class="container" >
                <div class="row" >
                    <div class="col-md-12" >
                        <div class="search__inner">
                            <form action="#" method="get">
                                <input placeholder="Search here... " type="text">
                                <button type="submit"></button>
                            </form>
                            <div class="search__close__btn">
                                <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Popap -->
        <!-- Start Offset MEnu -->
        <div class="offsetmenu">
            <div class="offsetmenu__inner">
                <div class="offsetmenu__close__btn">
                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="off__contact">
                    <div class="logo">
                        <a href="index.html">
                            <img src="images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                <ul class="sidebar__thumd">
                    <li><a href="#"><img src="images/sidebar-img/1.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/2.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/3.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/4.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/5.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/6.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/7.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/8.jpg" alt="sidebar images"></a></li>
                </ul>
                <div class="offset__widget">
                    <div class="offset__single">
                        <h4 class="offset__title">Language</h4>
                        <ul>
                            <li><a href="#"> Engish </a></li>
                            <li><a href="#"> French </a></li>
                            <li><a href="#"> German </a></li>
                        </ul>
                    </div>
                    <div class="offset__single">
                        <h4 class="offset__title">Currencies</h4>
                        <ul>
                            <li><a href="#"> USD : Dollar </a></li>
                            <li><a href="#"> EUR : Euro </a></li>
                            <li><a href="#"> POU : Pound </a></li>
                        </ul>
                    </div>
                </div>
                <div class="offset__sosial__share">
                    <h4 class="offset__title">Follow Us On Social</h4>
                    <ul class="off__soaial__link">
                        <li><a class="bg--twitter" href="#"  title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>

                        <li><a class="bg--instagram" href="#" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>

                        <li><a class="bg--facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>

                        <li><a class="bg--googleplus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>

                        <li><a class="bg--google" href="#" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Offset MEnu -->
        <!-- Start Cart Panel -->
        <div class="shopping__cart">
            <div class="shopping__cart__inner">
                <div class="offsetmenu__close__btn">
                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="shp__cart__wrap">
                    <div class="shp__single__product">
                        <div class="shp__pro__thumb">
                            <a href="#">
                                <img src="images/product/sm-img/1.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="shp__pro__details">
                            <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                            <span class="quantity">QTY: 1</span>
                            <span class="shp__price">$105.00</span>
                        </div>
                        <div class="remove__btn">
                            <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                        </div>
                    </div>
                    <div class="shp__single__product">
                        <div class="shp__pro__thumb">
                            <a href="#">
                                <img src="images/product/sm-img/2.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="shp__pro__details">
                            <h2><a href="product-details.html">Brone Candle</a></h2>
                            <span class="quantity">QTY: 1</span>
                            <span class="shp__price">$25.00</span>
                        </div>
                        <div class="remove__btn">
                            <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="shoping__total">
                    <li class="subtotal">Subtotal:</li>
                    <li class="total__price">$130.00</li>
                </ul>
                <ul class="shopping__btn">
                    <li><a href="cart.html">View Cart</a></li>
                    <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                </ul>
            </div>
        </div>
        <!-- End Cart Panel -->
    </div>
    <!-- End Offset Wrapper -->
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/2.jpg) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Product Details</h2>
                            <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="index.html">Home</a>
                            <span class="brd-separetor">/</span>
                            <span class="breadcrumb-item active">Product Details</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Product Details -->
    <section class="htc__product__details pt--120 pb--100 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="product__details__container">
                        <!-- Start Small images -->
                        <ul class="product__small__images" role="tablist">
                            <li role="presentation" class="pot-small-img active">
                                <a href="#img-tab-1" role="tab" data-toggle="tab">
                                    <img src="{{ asset('assets/frontend/images/product-details/small-img/1.jpg') }}" alt="small-image">
                                </a>
                            </li>
                            <li role="presentation" class="pot-small-img">
                                <a href="#img-tab-2" role="tab" data-toggle="tab">
                                    <img src="{{ asset('assets/frontend/images/product-details/small-img/2.jpg') }}" alt="small-image">
                                </a>
                            </li>
                            <li role="presentation" class="pot-small-img hidden-xs">
                                <a href="#img-tab-3" role="tab" data-toggle="tab">
                                    <img src="{{ asset('assets/frontend/images/product-details/small-img/3.jpg') }}" alt="small-image">
                                </a>
                            </li>
                            <li role="presentation" class="pot-small-img hidden-xs hidden-sm">
                                <a href="#img-tab-4" role="tab" data-toggle="tab">
                                    <img src="{{ asset('assets/frontend/images/product-details/small-img/2.jpg') }}" alt="small-image">
                                </a>
                            </li>
                        </ul>
                        <!-- End Small images -->
                        <div class="product__big__images">
                            <div class="portfolio-full-image tab-content">
                                <div role="tabpanel" class="tab-pane fade in active product-video-position" id="img-tab-1">
                                    <img src="{{ asset('assets/frontend/images/product-details/big-img/10.jpg') }}" alt="full-image">
                                    <div class="product-video">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=cDDWvj_q-o8">
                                            <i class="zmdi zmdi-videocam"></i> View Video
                                        </a>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade product-video-position" id="img-tab-2">
                                    <img src="{{ asset('assets/frontend/images/product-details/big-img/12.jpg') }}" alt="full-image">
                                    <div class="product-video">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=cDDWvj_q-o8">
                                            <i class="zmdi zmdi-videocam"></i> View Video
                                        </a>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade product-video-position" id="img-tab-3">
                                    <img src="{{ asset('assets/frontend/images/product-details/big-img/11.jpg') }}" alt="full-image">
                                    <div class="product-video">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=cDDWvj_q-o8">
                                            <i class="zmdi zmdi-videocam"></i> View Video
                                        </a>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade product-video-position" id="img-tab-4">
                                    <img src="{{ asset('assets/frontend/images/product-details/big-img/12.jpg') }}" alt="full-image">
                                    <div class="product-video">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=cDDWvj_q-o8">
                                            <i class="zmdi zmdi-videocam"></i> View Video
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
                    <div class="htc__product__details__inner">
                        <div class="pro__detl__title">
                            <h2>{{ $product->name }}</h2>
                        </div>
                        <div class="pro__dtl__rating">
                            <ul class="pro__rating">
                                <li><span class="ti-star"></span></li>
                                <li><span class="ti-star"></span></li>
                                <li><span class="ti-star"></span></li>
                                <li><span class="ti-star"></span></li>
                                <li><span class="ti-star"></span></li>
                            </ul>
                            <span class="rat__qun">(Based on 0 Ratings)</span>
                        </div>
                        <div class="pro__details">

                            <p>{{ $product->short_description }}</p>
                        </div>
                        <ul class="pro__dtl__prize">
                            <li class="old__prize">NPR. 15.21</li>
                            <li>NPR. {{ $product->price }}</li>
                        </ul>
                        <div class="pro__dtl__color">
                            <h2 class="title__5">Choose Colour</h2>

                            <ul class="pro__choose__color">
                                @foreach($product->productAttributeDetails->where('attribute.key','color') as $product_attribute_detail)
                                    <li class="{{ $product_attribute_detail->value }}"><a href="#"><i class="zmdi zmdi-circle"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="pro__dtl__size">
                            <h2 class="title__5">Size</h2>
                            <ul class="pro__choose__size">

                                @foreach($product->productAttributeDetails->where('attribute.key','size') as $product_attribute_detail)
                                    <li><a href="#">{{ $product_attribute_detail->value }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <form method="post" action="{{ route('product.add_to_cart') }}">
                            @csrf
                            <div class="product-action-wrap">
                                <div class="prodict-statas"><span>Quantity :</span></div>
                                <div class="product-quantity">
                                    <div class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input class="cart-plus-minus-box" type="text" name="quantity" value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="pro__dtl__btn">
                                <li class="buy__now__btn"><button type="submit">buy now</a></li>
                                <li><a href="#"><span class="ti-heart"></span></a></li>
                                <li><a href="#"><span class="ti-email"></span></a></li>
                            </ul>
                        </form>
                        <div class="pro__social__share">
                            <h2>Share :</h2>
                            <ul class="pro__soaial__link">
                                <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Details -->
    <!-- Start Product tab -->
    <section class="htc__product__details__tab bg__white pb--120">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <ul class="product__deatils__tab mb--60" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#description" role="tab" data-toggle="tab">Description</a>
                        </li>
                        <li role="presentation">
                            <a href="#sheet" role="tab" data-toggle="tab">Data sheet</a>
                        </li>
                        <li role="presentation">
                            <a href="#reviews" role="tab" data-toggle="tab">Reviews</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="product__details__tab__content">
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="description" class="product__tab__content fade in active">
                            <div class="product__description__wrap">
                                <div class="product__desc">
                                    <h2 class="title__6">Details</h2>
                                    <p>{{ $product->description }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="sheet" class="product__tab__content fade">
                            <div class="pro__feature">
                                    <h2 class="title__6">Data sheet</h2>
                                    <ul class="feature__list">
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                                    </ul>
                                </div>
                        </div>
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        $( document ).ready(function() {

            $('#submit_review').click(function(){
                if(!'{{ auth()->user() }}'){
                    $('#loginModal').modal('show');
                }
                else{
                    $('#review_form').submit();
                }
            });


        //form submit
        $('form#review_form').on('submit', function(event) {
            event.preventDefault();

            let route = $(this).attr('action');
            let method = $(this).attr('method');
            let data = new FormData(this);

            $.ajax({
                url: route,
                data: data,
                method: method,
                dataType: "JSON",
                contentType: false,
                cache: false,
                processData: false,
                success: function(res) {
                    let product_review_html = res.product_review_html;
                    $('.review__address__inner').append(product_review_html);
                },
                error: function(err) {
                    $('span.text-danger').remove();
                    if (err.responseJSON.errors) {
                        $.each(err.responseJSON.errors, function(key, value) {
                        let splitted_key = key.split('.');
                        if (splitted_key.length > 1) {
                            $("<span class='text-danger'>" + value + "<br></span>").insertAfter($("[name='" + splitted_key[0] + "[]']")[splitted_key[1]]);
                        }
                        $('#' + key).after("<span class='text-danger'>" + value + "<br></span>");
                        });
                    }
                },
            });
        });


        });
    </script>
@endsection

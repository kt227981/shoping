@extends('layout.footer')

{{--@extends('layout.header')--}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Shopping</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('asset/dist/img/smart1.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>

        body{
            margin: 40px;
        }

        button{
            cursor: pointer;
            outline: 0;
            color: #AAA;

        }

        .btn:focus {
            outline: none;
        }

        #green{
            color: green;
        }

        #red{
            color: red;
        }

    </style>

</head>



<body>
<!-- Topbar Start -->
{{--<div class="container-fluid">--}}
{{--    <div class="row bg-secondary py-2 px-xl-5">--}}
{{--        <div class="col-lg-6 d-none d-lg-block">--}}
{{--            <div class="d-inline-flex align-items-center">--}}
{{--                <a class="text-dark" href="">FAQs</a>--}}
{{--                <span class="text-muted px-2">|</span>--}}
{{--                <a class="text-dark" href="">Help</a>--}}
{{--                <span class="text-muted px-2">|</span>--}}
{{--                <a class="text-dark" href="">Support</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-6 text-center text-lg-right">--}}
{{--            <div class="d-inline-flex align-items-center">--}}
{{--                <a class="text-dark px-2" href="https://www.facebook.com/">--}}
{{--                    <i class="fab fa-facebook-f"></i>--}}
{{--                </a>--}}
{{--                <a class="text-dark px-2" href="https://twitter.com/">--}}
{{--                    <i class="fab fa-twitter"></i>--}}
{{--                </a>--}}
{{--                <a class="text-dark px-2" href="https://www.linkedin.com/">--}}
{{--                    <i class="fab fa-linkedin-in"></i>--}}
{{--                </a>--}}
{{--                <a class="text-dark px-2" href="https://www.instagram.com/">--}}
{{--                    <i class="fab fa-instagram"></i>--}}
{{--                </a>--}}
{{--                <a class="text-dark pl-2" href="https://www.youtube.com/">--}}
{{--                    <i class="fab fa-youtube"></i>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row align-items-center py-3 px-xl-5">--}}
{{--        <div class="col-lg-3 d-none d-lg-block">--}}
{{--            <a href="" class="text-decoration-none">--}}
{{--                <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold  px-3 mr-1">--}}
{{--                          <img src="{{asset('asset/dist/img/smart1.png')}}" alt="No" class="brand-image img-circle elevation-3"--}}
{{--                               style="opacity: 7.8; border-radius: 16px; height: 55px; width: 70px;">--}}
{{--                    </span>𝐒ᴍᴀʀᴛ</h1>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="col-lg-6 col-6 text-left">--}}
{{--            <form action="">--}}
{{--                <div class="input-group">--}}
{{--                    <input type="text" class="form-control" placeholder="Search for products">--}}
{{--                    <div class="input-group-append">--}}
{{--                            <span class="input-group-text bg-transparent text-primary">--}}
{{--                                <i class="fa fa-search"></i>--}}
{{--                            </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-6 text-right">--}}
{{--            <a href="" class="btn border">--}}
{{--                <i class="fas fa-heart text-primary"></i>--}}
{{--                <span class="badge">0</span>--}}
{{--            </a>--}}
{{--            <a href="" class="btn border">--}}
{{--                <i class="fas fa-shopping-cart text-primary"></i>--}}
{{--                <span class="badge">0</span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Topbar End -->




@include('layout.header')
<!-- Navbar Start -->




{{--<form action="{{ route('like.post', $post->id) }}"--}}
{{--      method="post">--}}
{{--    @csrf--}}
{{--    <button--}}
{{--        class="{{ $post->liked() ? 'bg-blue-600' : '' }} px-4 py-2 text-white bg-gray-600">--}}
{{--        like {{ $post->likeCount }}--}}
{{--    </button>--}}
{{--</form>--}}

{{--</td>--}}
{{--<td--}}
{{--    class="px-6 py-4 text-sm text-gray-500 border-b border-gray-200">--}}
{{--    <form action="{{ route('unlike.post', $post->id) }}"--}}
{{--          method="post">--}}
{{--        @csrf--}}
{{--        <button--}}
{{--            class="{{ $post->liked() ? 'block' : 'hidden'  }} px-4 py-2 text-white bg-red-600">--}}
{{--            unlike--}}
{{--        </button>--}}
{{--    </form>--}}

<!-- Featured Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->


<!-- Categories Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right">{{\App\Models\admin\Gents::where('category','Shirts')->count()}}&nbsp; Product</p>
                <a href="{{route('men/dress')}}" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" src="{{asset('storage/admin/gents/image/'.$men_dress->product_image)}}" style="height: 280px; width: 350px"   alt="">
                </a>
                <h5 class="font-weight-semi-bold m-0">Men's dresses</h5>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right">{{\App\Models\admin\Gents::where('category','dress')->count()}}&nbsp; Product</p>
                <a href="{{route('women/dress')}}" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" src="{{asset('storage/admin/gents/image/'.$female_dress->product_image)}}" style="height: 280px; width: 350px" alt="">
                </a>
                <h5 class="font-weight-semi-bold m-0">Women's dresses</h5>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right">{{\App\Models\admin\Gents::where('gender','child')->count()}}&nbsp; Product</p>
                <a href="{{route('child/dress')}}" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" src="{{asset('storage/admin/gents/image/'.$child_dress->product_image)}}" style="height: 280px; width: 350px " alt="">
                </a>
                <h5 class="font-weight-semi-bold m-0">Baby's dresses</h5>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right">{{\App\Models\admin\Gents::where('category','Blazers')->count()}}&nbsp; Products</p>
                <a href="{{route('blazer')}}" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" src="{{asset('storage/admin/gents/image/'.$blazer->product_image)}}" style="height: 280px; width: 350px " alt="">
                </a>
                <h5 class="font-weight-semi-bold m-0">Blazer</h5>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right">{{\App\Models\admin\Gents::where('category','Jackets')->count()}}&nbsp; Products</p>
                <a href="{{route('jacket')}}" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" src="{{asset('storage/admin/gents/image/'.$jacket->product_image)}}" style="height: 280px; width: 350px " alt="">
                </a>
                <h5 class="font-weight-semi-bold m-0">Jacket</h5>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right">{{\App\Models\admin\Gents::where('category','Shoes')->count()}}&nbsp; Products</p>
                <a href="{{route('shoes')}}" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" src="{{asset('storage/admin/gents/image/'.$shoes->product_image)}}" style="height: 280px; width: 350px " alt="">
                </a>
                <h5 class="font-weight-semi-bold m-0">Shoes</h5>
            </div>
        </div>
    </div>
</div>
<!-- Categories End -->


<!-- Offer Start -->
<div class="container-fluid offer pt-5">
    <div class="row px-xl-5">
        <div class="col-md-6 pb-4">
            <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                <img src="img/offer-1.png" alt="">
                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>
                    <h1 class="mb-4 font-weight-semi-bold">Spring Collection</h1>
                    <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 pb-4">
            <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                <img src="img/offer-2.png" alt="">
                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>
                    <h1 class="mb-4 font-weight-semi-bold">Winter Collection</h1>
                    <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->




<!-- Products Start -->
<div class="container-fluid py-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">You May Also Like</span></h2>
    </div>
    <div class="row px-xl-5" >
        <div class="col">
            <div class="owl-carousel related-carousel" >

                @foreach($trandy as $product)

                    <div class="card product-item border-0" style="height: 405px;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="{{asset('storage/admin/gents/image/'.$product->product_image)}}" style="height: 280px; width: 280px"  alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">{{$product->product_name}}</h6>
                            <div class="d-flex justify-content-center">
                                <h6>${{$product->product_price}}.00</h6><h6 class="text-muted ml-2"><del></del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="{{route('shop/detail',$product->id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Products End -->











{{--<!-- Products Start -->--}}
{{--<div class="container-fluid pt-5">--}}
{{--    <div class="text-center mb-4">--}}
{{--        <h2 class="section-title px-5"><span class="px-2">Trandy Products</span></h2>--}}
{{--    </div>--}}
{{--    <div class="row px-xl-5 pb-3">--}}
{{--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--            <div class="card product-item border-0 mb-4">--}}
{{--                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                    <img class="img-fluid w-100" src="img/product-1.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
{{--                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--            <div class="card product-item border-0 mb-4">--}}
{{--                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                    <img class="img-fluid w-100" src="img/product-2.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
{{--                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--            <div class="card product-item border-0 mb-4">--}}
{{--                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                    <img class="img-fluid w-100" src="img/product-3.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
{{--                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--            <div class="card product-item border-0 mb-4">--}}
{{--                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                    <img class="img-fluid w-100" src="img/product-4.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
{{--                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--            <div class="card product-item border-0 mb-4">--}}
{{--                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                    <img class="img-fluid w-100" src="img/product-5.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
{{--                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--            <div class="card product-item border-0 mb-4">--}}
{{--                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                    <img class="img-fluid w-100" src="img/product-6.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
{{--                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--            <div class="card product-item border-0 mb-4">--}}
{{--                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                    <img class="img-fluid w-100" src="img/product-7.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
{{--                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--            <div class="card product-item border-0 mb-4">--}}
{{--                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                    <img class="img-fluid w-100" src="img/product-8.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
{{--                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Products End -->--}}


<!-- Subscribe Start -->
<div class="container-fluid bg-secondary my-5">
    <div class="row justify-content-md-center py-5 px-xl-5">
        <div class="col-md-6 col-12 py-5">
            <div class="text-center mb-2 pb-2">
                <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Stay Updated</span></h2>
                <p>Amet lorem at rebum amet dolores. Elitr lorem dolor sed amet diam labore at justo ipsum eirmod duo labore labore.</p>
            </div>
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control border-white p-4" placeholder="Email Goes Here">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-4">Subscribe</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Subscribe End -->


{{--<!-- Products Start -->--}}
{{--<div class="container-fluid pt-5">--}}
{{--    <div class="text-center mb-4">--}}
{{--        <h2 class="section-title px-5"><span class="px-2">Just Arrived</span></h2>--}}
{{--    </div>--}}
{{--    <div class="row px-xl-5 pb-3">--}}
{{--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--            <div class="card product-item border-0 mb-4">--}}
{{--                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                    <img class="img-fluid w-100" src="img/product-1.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
{{--                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--            <div class="card product-item border-0 mb-4">--}}
{{--                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                    <img class="img-fluid w-100" src="img/product-2.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
{{--                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--            <div class="card product-item border-0 mb-4">--}}
{{--                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                    <img class="img-fluid w-100" src="img/product-3.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
{{--                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--            <div class="card product-item border-0 mb-4">--}}
{{--                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                    <img class="img-fluid w-100" src="img/product-4.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
{{--                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--            <div class="card product-item border-0 mb-4">--}}
{{--                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                    <img class="img-fluid w-100" src="img/product-5.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
{{--                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--            <div class="card product-item border-0 mb-4">--}}
{{--                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                    <img class="img-fluid w-100" src="img/product-6.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
{{--                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--            <div class="card product-item border-0 mb-4">--}}
{{--                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                    <img class="img-fluid w-100" src="img/product-7.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
{{--                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--            <div class="card product-item border-0 mb-4">--}}
{{--                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                    <img class="img-fluid w-100" src="img/product-8.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
{{--                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Products End -->--}}


<!-- Vendor Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                <div class="vendor-item border p-4">
                    <img src="img/vendor-1.jpg" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="img/vendor-2.jpg" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="img/vendor-3.jpg" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="img/vendor-4.jpg" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="img/vendor-5.jpg" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="img/vendor-6.jpg" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="img/vendor-7.jpg" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="img/vendor-8.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->





<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>

@push('script')
{{--    <script type="text/javascript">--}}

{{--        $(document).on('click', '.like', function(e){--}}
{{--            e.preventDefault();--}}
{{--            var token = $('meta[name="csrf-token"]').attr('content');--}}
{{--            var id = $(this).data('id');--}}

{{--            $.ajax({--}}
{{--                url: "{{ route('like-post') }}",--}}
{{--                method: "POST",--}}
{{--                data: {--}}
{{--                    _token: token,--}}
{{--                    id: id,--}}
{{--                },--}}
{{--                dataType: "json",--}}
{{--                success:function(data){--}}

{{--                    $("#all_like_"+data.id).text(data.like);--}}

{{--                }--}}
{{--            });--}}
{{--        });--}}

{{--        $(document).on('click', '.unlike', function(e){--}}
{{--            e.preventDefault();--}}
{{--            var token = $('meta[name="csrf-token"]').attr('content');--}}
{{--            var id = $(this).data('id');--}}

{{--            $.ajax({--}}
{{--                url: "{{ route('unlike-post') }}",--}}
{{--                method: "POST",--}}
{{--                data: {--}}
{{--                    _token: token,--}}
{{--                    id: id,--}}
{{--                },--}}
{{--                dataType: "json",--}}
{{--                success:function(data){--}}
{{--                    $("#all_unlike_"+data.id).text(data.unlike);--}}

{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endpush

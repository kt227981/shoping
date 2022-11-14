@extends('layout.footer')


    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('asset/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
</head>

<body>

<!-- Topbar End -->


<!-- Navbar Start -->

@include('layout.head')

<!-- Navbar End -->


<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Blazer's</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="{{route('home')}}">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shop</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Shop Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <!-- Shop Sidebar Start -->
        <div class="col-lg-3 col-md-12">
            <!-- Price Start -->
            <div class="border-bottom mb-4 pb-4">
                <h5 class="font-weight-semi-bold mb-4">Filter by price</h5>
                <form>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" checked id="price-all">
                        <label class="custom-control-label" for="price-all">All Price</label>
                        <span class="badge border font-weight-normal">1000</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input booking" name="product_price[]" id="price-1"
                               value="0-100">
                        <label class="custom-control-label" for="price-1" id="price_test">$0 - $100</label>
                        <span class="badge border font-weight-normal">150</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input booking" name="product_price[]"  id="price-2"
                               value="100-200">
                        <label class="custom-control-label" for="price-2">$100 - $200</label>
                        <span class="badge border font-weight-normal">295</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input booking" name="product_price[]"  id="price-3"
                               value="200-300">
                        <label class="custom-control-label" for="price-3">$200 - $300</label>
                        <span class="badge border font-weight-normal">246</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input booking" name="product_price[]"  id="price-4"
                               value="300-400">
                        <label class="custom-control-label" for="price-4">$300 - $400</label>
                        <span class="badge border font-weight-normal">145</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-control-input booking" name="product_price[]" id="price-5"
                               value="400-500">
                        <label class="custom-control-label" for="price-5">$400 - $500</label>
                        <span class="badge border font-weight-normal">168</span>
                    </div>
                </form>
            </div>
            <!-- Price End -->

            <!-- Color Start -->
            <div class="border-bottom mb-4 pb-4">
                <h5 class="font-weight-semi-bold mb-4">Filter by color</h5>
                <form>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" checked id="color-all">
                        <label class="custom-control-label" for="price-all">All Color</label>
                        <span class="badge border font-weight-normal">1000</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input color" name="color[]"  id="color-1" value="Black">
                        <label class="custom-control-label" for="color-1">Black</label>
                        <span class="badge border font-weight-normal">150</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input color" name="color[]" id="color-2" value="White">
                        <label class="custom-control-label" for="color-2">White</label>
                        <span class="badge border font-weight-normal">295</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input color" id="color-3" name="color[]" value="Red">
                        <label class="custom-control-label" for="color-3">Red</label>
                        <span class="badge border font-weight-normal">246</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input color" name="color[]" id="color-4" value="Blue">
                        <label class="custom-control-label" for="color-4">Blue</label>
                        <span class="badge border font-weight-normal">145</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-control-input color" name="color[]" id="color-5" value="Green">
                        <label class="custom-control-label" for="color-5">Green</label>
                        <span class="badge border font-weight-normal">168</span>
                    </div>
                </form>
            </div>
            <!-- Color End -->

            <!-- Size Start -->
            <div class="mb-5">
                <h5 class="font-weight-semi-bold mb-4">Filter by size</h5>
                <form>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" checked id="size-all">
                        <label class="custom-control-label" for="size-all">All Size</label>
                        <span class="badge border font-weight-normal">1000</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input size" name="product_size[]" id="size-1" value="XS">
                        <label class="custom-control-label" for="size-1">XS</label>
                        <span class="badge border font-weight-normal">150</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3" >
                        <input type="checkbox" class="custom-control-input size" name="product_size[]" id="size-2" value="S">
                        <label class="custom-control-label" for="size-2">S</label>
                        <span class="badge border font-weight-normal">295</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3" >
                        <input type="checkbox" class="custom-control-input size" name="product_size[]" id="size-3" value="M">
                        <label class="custom-control-label" for="size-3">M</label>
                        <span class="badge border font-weight-normal">246</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3" >
                        <input type="checkbox" class="custom-control-input size" name="product_size[]" id="size-4" value="L">
                        <label class="custom-control-label" for="size-4">L</label>
                        <span class="badge border font-weight-normal">145</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-control-input size" name="product_size[]" id="size-5" value="XL">
                        <label class="custom-control-label" for="size-5">XL</label>
                        <span class="badge border font-weight-normal">168</span>
                    </div>
                </form>
            </div>
            <!-- Size End -->
        </div>
        <!-- Shop Sidebar End -->


        <!-- Shop Product Start -->
        <div class="col-lg-9 col-md-12">
            <div class="row pb-3">
                <div class="col-12 pb-1">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <form action="" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search by name">
                                <div class="input-group-append">
                                        <button type="submit" class="input-group-text bg-transparent text-primary">
                                            <i class="fas fa-search"></i>
                                        </button>
                                </div>
                            </div>
                        </form>
                        <div class="dropdown ml-4">
                            <button class="btn border dropdown-toggle" type="button" id="triggerId"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                Sort by
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                <a class="dropdown-item" href="#">Latest</a>
                                <a class="dropdown-item" href="#">Popularity</a>
                                <a class="dropdown-item" href="#">Best Rating</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row col-md-12 viewRender">
                @foreach($blazer as $data)
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1 ">
                        <div class="card product-item border-0 mb-4">
                            <div
                                class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100"
                                     src="{{asset('storage/admin/gents/image/'.$data->product_image)}}"
                                     style="height: 350px; width: 350px" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">{{$data->product_name}}</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>${{$data->product_price}}.00</h6>
                                    <h6 class="text-muted ml-2">
                                        <del></del>
                                    </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="{{route('shop/detail',$data->id)}}" class="btn btn-sm text-dark p-0"><i
                                        class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="{{route('add/cart',$data->id)}}" class="btn btn-sm text-dark p-0"><i
                                        class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>

            <div class="col-12 pb-1">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mb-3">

                        <li class="page-item">{{$blazer->links()}}</li>
                        <li class="page-item">

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Shop Product End -->
</div>
</div>
<!-- Shop End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('asset/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Contact Javascript File -->
<script src="{{asset('asset/mail/jqBootstrapValidation.min.js')}}"></script>
<script src="{{asset('asset/mail/contact.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('asset/js/main.js')}}"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[live_or_advance="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function () {

        $('.booking').click(function () {
            // alert('hi');
            $(".booking").addClass('checked');
            var arr = $('.booking:checked').map(function () {
                return this.value;
            }).get();
            // alert(arr)
            $.ajax({
                url: "{{url('price_product')}}",
                type: "get",
                data: {
                    arr: arr
                },
                datatype: 'html',
                success: function (data) {
                    console.log(data);
                    $('.viewRender').html(data.html);

                    if (data.resultCount == 0) {
                        $('#loadMore').html('<center><img src="{{asset('admin/images/data_not_found.svg')}}" class="mb-2" height="200px" disable> <h4 class="text-center ml-5 font-weight-bold">Data Not Found</h4></center>');
                        //$('#loadMore').hide();
                    }
                }
            })

        });
    });

</script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[live_or_advance="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function () {

        $('.color').click(function () {
            // alert('hi');
            $(".color").addClass('checked');
            var arr = $('.color:checked').map(function () {
                return this.value;
            }).get();
            // alert('hi')
            $.ajax({
                url: "{{url('color')}}",
                type: "get",
                data: {
                    arr: arr
                },
                datatype: 'html',
                success: function (data) {
                    console.log(data);
                    $('.viewRender').html(data.html);

                    if (data.resultCount == 0) {
                        $('#loadMore').html('<center><img src="{{asset('admin/images/data_not_found.svg')}}" class="mb-2" height="200px" disable> <h4 class="text-center ml-5 font-weight-bold">Data Not Found</h4></center>');
                        //$('#loadMore').hide();
                    }
                }
            })

        });
    });

</script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[live_or_advance="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function () {

        $('.size').click(function () {
            // alert('hi');
            $(".size").addClass('checked');
            var arr = $('.size:checked').map(function () {
                return this.value;
            }).get();
            // alert('hi')
            $.ajax({
                url: "{{url('size')}}",
                type: "get",
                data: {
                    arr: arr
                },
                datatype: 'html',
                success: function (data) {
                    console.log(data);
                    $('.viewRender').html(data.html);

                    if (data.resultCount == 0) {
                        $('#loadMore').html('<center><img src="{{asset('admin/images/data_not_found.svg')}}" class="mb-2" height="200px" disable> <h4 class="text-center ml-5 font-weight-bold">Data Not Found</h4></center>');
                        //$('#loadMore').hide();
                    }
                }
            })

        });
    });

</script>

</body>

</html>

{{--@push('page_scripts')--}}

{{--<script>--}}

{{--    $('.booking').click(function () {--}}
{{--        var start = jQuery('#price_test').html();--}}
{{--        var start1 = jQuery('#price_test1').html();--}}
{{--        alert(start + '  ');--}}
{{--    })--}}
{{--</script>--}}


{{--@endpush--}}

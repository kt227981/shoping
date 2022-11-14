<!-- Footer Start -->
<div class="container-fluid bg-secondary text-dark mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <a href="" class="text-decoration-none">
                <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">
                          <img src="{{asset('asset/dist/img/smart1.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                               style="opacity: 7.8; border-radius: 16px; height: 60px; width: 70px;">
                    </span>𝐒ᴍᴀʀᴛ</h1>
            </a>
            <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum dolore amet erat.</p>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Sadarpur , Palanpur , 385001</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>kiran@gmail.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+91 7945784308</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-6 mb-5" style="padding-left: 103px">
                    <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-dark mb-2" href="{{route('home')}}"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-dark mb-2" href="{{route('shop')}}"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>

                        <a class="text-dark" href="{{route('contact')}}"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
{{--                <div class="col-md-4 mb-5">--}}
{{--                    <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>--}}
{{--                    <div class="d-flex flex-column justify-content-start">--}}
{{--                        <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>--}}
{{--                        <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>--}}
{{--                        <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>--}}
{{--                        <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>--}}
{{--                        <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>--}}
{{--                        <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-md-6 mb-5">
                    <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
{{--                    <div style="width: 265px; padding-left: -3px">--}}
{{--                        @if(session()->has('success'))--}}
{{--                            <div class="alert alert-success">--}}
{{--                                {{ session()->get('success') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    </div>--}}

                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control border-0 py-4" name="name" placeholder="Your Name" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border-0 py-4" name="email" placeholder="Your Email"
                                   required="required" />
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top border-light mx-xl-5 py-4">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-dark">
                &copy; <a class="text-dark font-weight-semi-bold" href="#">MY Shopper</a>. All Rights Reserved. Designed
                by
                <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="img/payments.png" alt="">
        </div>
    </div>
</div>
<!-- Footer End -->

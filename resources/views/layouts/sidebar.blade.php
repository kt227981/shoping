<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-yellow elevation-4">
    <!-- Brand Logo -->
{{--    <a href="index3.html" class="brand-link">--}}
{{--        <img src="{{asset('asset/dist/img/shopping.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"--}}
{{--             style="opacity: .8">--}}
{{--        <span class="brand-text font-weight-light">MY SOPPING</span>--}}
{{--    </a>--}}

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('asset/dist/img/user1-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="color: goldenrod">MY SHOPPING</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">
            <a href="{{url('home')}}" class="nav-link {{ (request()->is('home')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p >
                    Dashboard
                </p>
            </a>
        </li>

                <li class="nav-header">ADD GENTS CLOTHES</li>

                <li class="nav-item @if(Request::is('gents/show*') ||  Request::is('sportswear/show*') ||  Request::is('jumpsuit/show*') ||  Request::is('girls/show*') ||  Request::is('gents/clothes/show*') ||  Request::is('child/show*') ||  Request::is('shoes/show*') ||  Request::is('jacket/show*') ||  Request::is('blazer/show*')) active menu-open @endif">
                    <a href="#" class="nav-link @if(Request::is('gents/show*') ||  Request::is('sportswear/show*') ||  Request::is('jumpsuit/show*') ||  Request::is('girls/show*') ||  Request::is('gents/clothes/show*') ||   Request::is('child/show*') ||  Request::is('shoes/show*') ||  Request::is('jacket/show*') ||  Request::is('blazer/show*')) active @endif">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                          ADD  SHOPPING
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('gents/show')}}"
                               class="nav-link {{ (request()->is('gents/show')) ? 'active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Add All Clothes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('gents/clothes/show')}}"
                               class="nav-link {{ (request()->is('gents/clothes/show')) ? 'active' : '' }}" >
                                <i class="nav-icon far fa-circle"></i>
                                <p>Show Gents Clothes</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('girls/show')}}"
                               class="nav-link {{ (request()->is('girls/show')) ? 'active' : '' }}" >
                                <i class="nav-icon far fa-circle"></i>
                                <p>Show Girls Clothes</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('child/show')}}"
                               class="nav-link {{ (request()->is('child/show')) ? 'active' : '' }}" >
                                <i class="nav-icon far fa-circle"></i>
                                <p>Show Child Clothes</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('shoes/show')}}"
                               class="nav-link {{ (request()->is('shoes/show')) ? 'active' : '' }}" >
                                <i class="nav-icon far fa-circle"></i>
                                <p>Show Shoes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('jacket/show')}}"
                               class="nav-link {{ (request()->is('jacket/show')) ? 'active' : '' }}" >
                                <i class="nav-icon far fa-circle"></i>
                                <p>Show Shoes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('blazer/show')}}"
                               class="nav-link {{ (request()->is('blazer/show')) ? 'active' : '' }}" >
                                <i class="nav-icon far fa-circle"></i>
                                <p>Show Blazers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('jumpsuit/show')}}"
                               class="nav-link {{ (request()->is('jumpsuit/show')) ? 'active' : '' }}" >
                                <i class="nav-icon far fa-circle"></i>
                                <p>Show Jump Suit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('sportswear/show')}}"
                               class="nav-link {{ (request()->is('sportswear/show')) ? 'active' : '' }}" >
                                <i class="nav-icon far fa-circle"></i>
                                <p>Sportswear</p>
                            </a>
                        </li>

                    </ul>
                <li class="nav-header">CHECK MAIL</li>
                <li class="nav-item">
                    <a href="{{route('mail.show')}}"
                       class="nav-link {{ Request::is('mail.show*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Check Mail</p>
                    </a>
                </li>
                </li>
            </ul>
        </nav>

    </div>
</aside>



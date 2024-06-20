<!-- Navigation Bar-->
<header id="topnav" class="boonhome-font">
    <!-- Topbar Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>

                <!-- <li class="dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <img src="{{asset('backend/assets/images/flags/us.jpg')}}" alt="user-image"
                            class="mr-2" height="12"> <span class="align-middle">English <i
                                class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                    
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('backend/assets/images/flags/germany.jpg')}}" alt="user-image"
                                class="mr-2" height="12"> <span class="align-middle">German</span>
                        </a>

                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('backend/assets/images/flags/italy.jpg')}}" alt="user-image"
                                class="mr-2" height="12"> <span class="align-middle">Italian</span>
                        </a>

                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('backend/assets/images/flags/spain.jpg')}}" alt="user-image"
                                class="mr-2" height="12"> <span class="align-middle">Spanish</span>
                        </a>

                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('backend/assets/images/flags/russia.jpg')}}" alt="user-image"
                                class="mr-2" height="12"> <span class="align-middle">Russian</span>
                        </a>
                    </div>
                </li> -->

                @if(auth()->user()->rolename->name == 'vendor')
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-bell noti-icon"></i>
                        @if($count_noti != 0)<span class="badge badge-success rounded-circle noti-icon-badge">{{$count_noti}}</span>@endif
                        <div class="noti-dot">
                            <span class="dot"></span>
                            <span class="pulse"></span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="font-16 m-0">
                                <span class="float-right">
                                    <a href="{{route('bookings')}}" class="text-dark">
                                        <small>ລາຍລະອຽດ</small>
                                    </a>
                                </span>
                            </h5>
                        </div>

                        <div class="slimscroll noti-scroll">

                            <!-- item-->
                            @forelse ($noti as $item)
                            <a href="{{route('bookings')}}" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info">
                                    <i class="mdi mdi-bell-outline"></i>
                                </div>
                                <p class="notify-details">{{$item->code}}
                                    <small class="text-muted">{{date('d/m/Y H:i:s', strtotime($item->created_at))}}</small>
                                </p>
                            </a>
                            @empty
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger">
                                    <i class="mdi mdi-bell-outline"></i>
                                </div>
                                <p class="notify-details">ບໍມີລາຍການລໍຖ້າອະນຸມັດ
                                </p>
                            </a>
                            @endforelse
                            

                        </div>

                        <!-- All-->
                        <a href="{{route('bookings')}}"
                            class="dropdown-item text-center text-primary notify-item notify-all">
                            ເຂົ້າເບິ່ງລາຍລະອຽດທັງໝົດ
                            <i class="fi-arrow-right"></i>
                        </a>

                    </div>
                </li>
            @endif

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">{{auth()->user()->username}}
                        @if (auth()->user()->profile)
                        <img src="{{asset(auth()->user()->profile)}}" alt="user-image" class="rounded-circle">
                        @else
                        <img src="{{asset('backend/assets/images/users/avatar-1.jpg')}}" alt="user-image"
                            class="rounded-circle">
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title text-center">
                            <h6 class="text-overflow m-0"> {{auth()->user()->username}} </h6>
                        </div>

                        <!-- item-->
                        <a href="{{route('profiles')}}" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-outline"></i>
                            <span>ໂປຣຟາຍ</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="{{route('logout')}}" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>ອອກຈາກລະບົບ</span>
                        </a>

                    </div>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index-1.html" class="logo text-center">
                    <span class="logo-lg">
                        <!-- <img src="{{asset('backend/assets/images/logo-light.png')}}" alt="" height="30"> -->
                        <span class="logo-lg-text-light">Booking LPB</span>
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">Z</span> -->
                        <img src="{{asset('fontend/assets/images/logo.svg')}}" alt="" height="22">
                    </span>
                </a>
            </div>


            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <!-- <input type="text" class="form-control" placeholder="Search..."> -->
                                <!-- <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end Topbar -->

    @if (auth()->user()->rolename->name == 'admin')
        @include('components.layouts.backend.navmenu')
    @else
        @include('components.layouts.backend.navmenu-vendor')
    @endif
    
</header>
<!-- End Navigation Bar-->
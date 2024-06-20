<div class="topbar-menu">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <li>
                    <a href="{{route('dashboard')}}"> <i class="mdi mdi-view-dashboard"></i>ໜ້າຫຼັກ</a>
                </li>
                <li>
                    <a href="{{route('districts')}}"> <i class="mdi mdi-google-maps"></i>ຂໍ້ມູນເມືອງ</a>
                </li>
                <li>
                    <a href="{{route('hotels')}}"> <i class="mdi mdi-home-modern"></i>ຂໍ້ມູນໂຮງແຮມ</a>
                </li>
                <li>
                    <a href="{{route('members')}}"> <i class="mdi mdi-account-cash-outline"></i>ຂໍ້ມູນສະມາຊິກ</a>
                </li>
                <li>
                    <a href="{{route('vendors')}}"> <i class="mdi mdi-account-tie-outline"></i>ຂໍ້ມູນຄູ່ຮ່ວມກິດຈະການ</a>
                </li>
                <li class="has-submenu">
                    <a href="#"> <i class="mdi mdi-account-box-multiple-outline"></i>ຂໍ້ມູນໃຊ້ງານລະບົບ
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('roles')}}">ສິດການເຂົ້າເຖິງ</a></li>
                        <li><a href="{{route('users')}}">ຂໍ້ມູນຜູ້ໃຊ້ລະບົບ</a></li>
                    </ul>
                </li>
            </ul>
            <!-- End navigation menu -->

            <div class="clearfix"></div>
        </div>
        <!-- end #navigation -->
    </div>
    <!-- end container -->
</div>
<!-- end navbar-custom -->
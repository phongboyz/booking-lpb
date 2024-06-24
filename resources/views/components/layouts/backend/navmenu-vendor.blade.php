<div class="topbar-menu">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <li>
                    <a href="{{route('dashboard')}}"> <i class="mdi mdi-view-dashboard"></i>ໜ້າຫຼັກ</a>
                </li>
                <li>
                    <a href="{{route('hotels')}}"> <i class="mdi mdi-home-circle-outline"></i>ຈັດການຂໍ້ມູນໂຮງແຮມ</a>
                </li>
                <li>
                    <a href="{{route('buildings')}}"> <i class="mdi mdi-home-modern"></i>ຈັດການຂໍ້ມູນຕຶກ</a>
                </li>
                <li>
                    <a href="{{route('rooms')}}"> <i class="mdi mdi-door"></i>ຈັດການຂໍ້ມູນຫ້ອງພັກ</a>
                </li>
                <li class="has-submenu">
                    <a href="#"> <i class="mdi mdi-window-shutter"></i>ການບໍລິການ
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('bookings')}}"><i class="mdi mdi-file-document-edit-outline"></i> ການຈອງ</a></li>
                        <li><a href="{{route('openrooms')}}"><i class="mdi mdi-door-open"></i> ເປີດຫ້ອງພັກ</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"> <i class="mdi mdi-file-pdf-outline"></i>ລາຍງານ
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('report1')}}"><i class="mdi mdi-file-pdf-outline"></i>ລາຍງານຂໍ້ມູນໂຮງແຮມ</a></li>
                        <li><a href="{{route('report2')}}"><i class="mdi mdi-file-pdf-outline"></i>ລາຍງານຂໍ້ມູນການຈອງ</a></li>
                        <li><a href="{{route('report3')}}"><i class="mdi mdi-file-pdf-outline"></i>ລາຍງານຂໍ້ມູນຫ້ອງ</a></li>
                        <!-- <li><a href="{{route('report4')}}"><i class="mdi mdi-file-pdf-outline"></i>ລາຍງານຂໍ້ມູນປະເພດຫ້ອງ</a></li> -->
                        <!-- <li><a href="{{route('report5')}}"><i class="mdi mdi-file-pdf-outline"></i>ລາຍງານຂໍ້ມູນການຊຳລະເງິນ</a></li> -->
                        <!-- <li><a href="{{route('report6')}}"><i class="mdi mdi-file-pdf-outline"></i>ລາຍງານຂໍ້ມູນລູກຄ້າ</a></li> -->
                        <li><a href="{{route('report7')}}"><i class="mdi mdi-file-pdf-outline"></i>ລາຍງານຂໍ້ມູນລາຍຮັບ</a></li>
                        <!-- <li><a href="{{route('report8')}}"><i class="mdi mdi-file-pdf-outline"></i>ລາຍງານຂໍ້ມູນຂອງຜູ້ໃຊ້</a></li> -->
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
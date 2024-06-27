<div>
 <!-- start page title -->
 <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li> -->
                    </ol>
                </div>
                <!-- <h4 class="page-title">ໜ້າຫຼັກ</h4> -->
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-6 col-xl-3">
            <div class="card widget-box-three">
                <div class="card-body">
                    <div class="float-right mt-2">
                        <i class="mdi mdi-file-document-outline display-3 m-0 text-primary"></i>
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-uppercase font-weight-medium text-truncate mb-2">ຈຳນວນໂຮງແຮມ</p>
                        <h2 class="mb-0"><span data-plugin="counterup">{{$hotel}}</span> <i
                                class="mdi mdi-arrow-up text-success font-24"></i></h2>
                        <p class="text-muted mt-2 m-0"><span class="font-weight-medium">ລວມ:</span>{{$hotel}} ໂຮງແຮມ</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-6 col-xl-3">
            <div class="card widget-box-three">
                <div class="card-body">
                    <div class="float-right mt-2">
                        <i class="mdi mdi-file-document-outline display-3 m-0 text-warning"></i>
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-uppercase font-weight-medium text-truncate mb-2">ຫ້ອງພັກສັງຈອງໃໝ່</p>
                        <h2 class="mb-0"><span data-plugin="counterup">{{$pending}}</span> <i
                                class="mdi mdi-arrow-down text-danger font-24"></i></h2>
                        <p class="text-muted mt-2 m-0"><span class="font-weight-medium">ລວມ:</span>{{$pending}} ຫ້ອງ</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-6 col-xl-3">
            <div class="card widget-box-three">
                <div class="card-body">
                    <div class="float-right mt-2">
                        <i class="mdi mdi-file-document-outline display-3 m-0 text-danger"></i>
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-uppercase font-weight-medium text-truncate mb-2">ຫ້ອງພັກສັງຈອງອານຸມັດ</p>
                        <h2 class="mb-0"><span data-plugin="counterup">{{$new}}</span><i
                                class="mdi mdi-arrow-down text-danger font-24"></i></h2>
                        <p class="text-muted mt-2 m-0"><span class="font-weight-medium">ລວມ:</span>{{$new}} ຫ້ອງ</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-6 col-xl-3">
            <div class="card widget-box-three">
                <div class="card-body">
                    <div class="float-right mt-2">
                        <i class="mdi mdi-file-document-outline display-3 m-0 text-success"></i>
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-uppercase font-weight-medium text-truncate mb-2">ຫ້ອງພັກສັງຈອງຍົກເລີກ</p>
                        <h2 class="mb-0"><span data-plugin="counterup">{{$cancel}}</span> <i
                                class="mdi mdi-arrow-up text-success font-24"></i></h2>
                        <p class="text-muted mt-2 m-0"><span class="font-weight-medium">ລວມ:</span>{{$cancel}} ຫ້ອງ</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

</div>

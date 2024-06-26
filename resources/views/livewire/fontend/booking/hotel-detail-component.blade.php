<div>

    <!-- =======================
Main Banner START -->
    <section class="pt-0">
        <div class="container">
            <!-- Background image -->
            <div class="rounded-3 p-3 p-sm-5"
                style="background-image: url({{asset('fontend/assets/images/bg/05.jpg')}}); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                <!-- Banner title -->
                <div class="row my-2 my-xl-5">
                    <div class="col-md-8 mx-auto">
                        <h1 class="text-center text-white" style="font-family: 'Phetsarath OT'">ທີ່ພັກໃນນະຄອນຫຼວງພະບາງ</h1>
                    </div>
                </div>

                <!-- Booking from START -->
                <form class="bg-mode shadow rounded-3 position-relative p-4 pe-md-5 pb-5 pb-md-4 mb-4">
                    <div class="row g-4 align-items-center">
                        <!-- Location -->
                        <div class="col-lg-3">
                                <div class="form-control-border form-control-transparent form-fs-md d-flex">
                                    <!-- Icon -->
                                    <i class="bi bi-geo-alt fs-3 me-2 mt-2"></i>
                                    <!-- Select input -->
                                    <div class="flex-grow-1">
                                        <label class="form-label">ສະຖານທີ່ / ຕົວເມືອງ</label>
                                        <select class="form-select js-choice" data-search-enabled="true" wire:model="dis_id" required>
                                            <option value="">ເລືອກ ສະຖານທີ່</option>
                                            @foreach ($districts as $item)
                                            <option value="{{$item->id}}" @if($item->id == $dis_ids) selected="selected" @endif>{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('dis_id') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                            </div>

                            <!-- Check in -->
                             <!-- Check in -->
                             <div class="col-lg-3">
                                <div class="d-flex">
                                    <!-- Icon -->
                                    <i class="bi bi-calendar fs-3 me-2" style="margin-top: 25px"></i>
                                    <!-- Date input -->
                                    <div class="form-control-border form-control-transparent form-fs-md">
                                        <label class="form-label">ວັນທີ ເຂົ້າ</label>
                                        <input type="date" class="form-control" data-mode="range"
                                            placeholder="ເລືອກວັນທີເຂົ້າພັກ" wire:model="date" style="margin-bottom: 10px;">
                                            @error('date') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Check out -->
                            <div class="col-lg-3">
                                <div class="d-flex">
                                    <!-- Icon -->
                                    <i class="bi bi-calendar fs-3 me-2" style="margin-top: 25px"></i>
                                    <!-- Date input -->
                                    <div class="form-control-border form-control-transparent form-fs-md">
                                        <label class="form-label">ຫາວັນທີ</label>
                                        <input type="date" class="form-control" data-mode="range"
                                            placeholder="ເລືອກວັນທີເຂົ້າພັກ" wire:model="enddate" style="margin-bottom: 10px;">
                                            @error('date') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Guest -->
                            <div class="col-lg-3">
                                <div class="form-control-border form-control-transparent form-fs-md d-flex">
                                    <!-- Icon -->
                                    <i class="bi bi-person fs-3 me-2 mt-2"></i>
                                    <!-- Dropdown input -->
                                    <div class="w-100">
                                        <label class="form-label">ຈຳນວນຄົນ & ຫ້ອງ</label>
                                        <div class="dropdown guest-selector me-2">
                                            <input type="text" class="form-guest-selector form-control selection-result"
                                                 data-bs-auto-close="outside" value="{{$resualt}}"
                                                data-bs-toggle="dropdown" wire:click="addCusRoom">

                                            <!-- dropdown items -->
                                            <ul class="dropdown-menu guest-selector-dropdown {{$dopdown}}">
                                                <!-- Adult -->
                                                <li class="d-flex justify-content-between">
                                                    <div>
                                                        <h6 class="mb-0" style="font-family: 'Phetsarath OT'">ຈຳນວນຄົນ
                                                        </h6>
                                                        <small>ເລີ່ມຕົ້ນ 1 ຄົນຂຶ້ນໄປ</small>
                                                    </div>

                                                    <div class="hstack gap-1 align-items-center">
                                                        <button type="button"
                                                            class="btn btn-link p-0 mb-0" wire:click="delCus"><i
                                                                class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                                                        <h6 class="guest-selector-count mb-0 adults">{{$cus}}</h6>
                                                        <button type="button" class="btn btn-link p-0 mb-0" wire:click="addCus"><i
                                                                class="bi bi-plus-circle fs-5 fa-fw"></i></button>
                                                    </div>
                                                </li>

                                                <!-- Divider -->
                                                <li class="dropdown-divider"></li>

                                                <!-- Rooms -->
                                                <li class="d-flex justify-content-between">
                                                    <div>
                                                        <h6 class="mb-0" style="font-family: 'Phetsarath OT'">ຈຳນວນຫ້ອງ
                                                        </h6>
                                                        <small>ສູງສຸດ 8</small>
                                                    </div>

                                                    <div class="hstack gap-1 align-items-center">
                                                        <button type="button"
                                                            class="btn btn-link p-0 mb-0" wire:click="delRoom"><i
                                                                class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                                                        <h6 class="guest-selector-count mb-0 rooms">{{$room}}</h6>
                                                        <button type="button" class="btn btn-link p-0 mb-0"><i
                                                                class="bi bi-plus-circle fs-5 fa-fw" wire:click="addRoom"></i></button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- Button -->
                    <div class="btn-position-md-middle">
                        <a class="icon-lg btn btn-round btn-primary mb-0" href="javascript:void(0)"
                    wire:click="search"><i class="bi bi-search fa-fw"></i></a>
                    </div>
                </form>
                <!-- Booking from END -->
            </div>
        </div>
    </section>
    <!-- =======================
Main Banner END -->

    <!-- =======================
Hotel list START -->
    <section class="pt-0">
        <div class="container">
            <!-- Tabs and alert START -->
            <div class="row mb-4">
                <div class="col-12">
                    <!-- Alert box STARTEND -->

                    <!-- Buttons -->
                    <div class="hstack gap-3 justify-content-between justify-content-md-end">
                        <!-- Filter offcanvas button -->
                       
                    </div>
                </div>
            </div>
            <!-- Tabs and alert END -->

            <div class="row">
                <!-- Main content START -->
                <div class="col-xl-12 col-xxl-12">
                    <div class="vstack gap-4">

                    @forelse ($hotels as $item)
                        <!-- Card item START -->
                        <div class="card shadow p-2">
                            <div class="row g-0">
                                <!-- Card img -->
                                <div class="col-md-5 position-relative">

                                    <!-- Overlay item -->
                                    <!-- <div class="position-absolute top-0 start-0 z-index-1 m-2">
                                        <div class="badge text-bg-danger">30% Off</div>
                                    </div> -->

                                    <!-- Slider START -->
                                    <div class="tiny-slider arrow-round arrow-xs arrow-dark overflow-hidden rounded-2">
                                        <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true"
                                            data-dots="false" data-items="1">
                                            <!-- Image item -->
                                            <div><img src="{{asset($item->img1)}}" alt="Card image">
                                            </div>

                                            <!-- Image item -->
                                            <div><img src="{{asset($item->img2)}}" alt="Card image">
                                            </div>

                                            <!-- Image item -->
                                            <div><img src="{{asset($item->img3)}}" alt="Card image">
                                            </div>

                                            <!-- Image item -->
                                            <div><img src="{{asset($item->img4)}}" alt="Card image">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slider END -->
                                </div>

                                <!-- Card body -->
                                <div class="col-md-7">
                                    <div class="card-body py-md-2 d-flex flex-column h-100 position-relative">

                                        <!-- Rating and buttons -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 small"><i
                                                        class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i
                                                        class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i
                                                        class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i
                                                        class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i
                                                        class="fa-solid fa-star-half-alt text-warning"></i></li>
                                            </ul>

                                            <ul class="list-inline mb-0 z-index-2">
                                                <!-- Heart icon -->
                                                <li class="list-inline-item">
                                                    <a href="#" class="btn btn-sm btn-round btn-light"><i
                                                            class="fa-solid fa-fw fa-heart"></i></a>
                                                </li>
                                                <!-- Share icon -->
                                                <li class="list-inline-item dropdown">
                                                    <!-- Share button -->
                                                    <a href="#" class="btn btn-sm btn-round btn-light" role="button"
                                                        id="dropdownShare" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fa-solid fa-fw fa-share-alt"></i>
                                                    </a>
                                                    <!-- dropdown button -->
                                                    <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded"
                                                        aria-labelledby="dropdownShare">
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="fab fa-twitter-square me-2"></i>Twitter</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="fab fa-facebook-square me-2"></i>Facebook</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="fa-solid fa-copy me-2"></i>Copy link</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Title -->
                                        <h5 class="card-title mb-1" style="font-family: 'Phetsarath OT'"><a href="#"> {{$item->name}} </a></h5>
                                        <small><i class="bi bi-geo-alt me-2"></i> {{$item->address}} </small>
                                        <!-- Amenities -->
                                        <ul class="nav nav-divider mt-3">
                                            <li class="nav-item">{{$item->detail}}</li>
                                        </ul>

                                        <!-- List -->
                                        <ul class="list-group list-group-borderless small mb-0 mt-2">
                                            @if($item->promotion1)
                                            <li class="list-group-item d-flex text-success p-0">
                                                <i class="bi bi-patch-check-fill me-2"></i> {{$item->promotion1}}
                                            </li>
                                            @endif
                                            @if($item->promotion2)
                                            <li class="list-group-item d-flex text-success p-0">
                                                <i class="bi bi-patch-check-fill me-2"></i> {{$item->promotion2}}
                                            </li>
                                            @endif
                                            @if($item->promotion3)
                                            <li class="list-group-item d-flex text-success p-0">
                                                <i class="bi bi-patch-check-fill me-2"></i> {{$item->promotion3}}
                                            </li>
                                            @endif
                                        </ul>

                                        <!-- Price and Button -->
                                        <div
                                            class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                            <!-- Button -->
                                            <div class="d-flex align-items-center">
                                                <h5 class="fw-bold mb-0 me-1" style="font-family: 'Phetsarath OT'">250,000 ກີບ</h5>
                                                <span class="mb-0 me-2">/ ລາຄາເລີ່ມຕົ້ນ</span>
                                            </div>
                                            <!-- Price -->
                                            <div class="mt-3 mt-sm-0">
                                                <a href="javascript:void(0)" wire:click="roomDetail({{$item->id}})" class="btn btn-sm btn-dark mb-0 w-100">ເລືອກໂຮງແຮມ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                    @empty
                         <!-- Card item START -->
                         <div class="card shadow p-2">
                            <div class="row g-0">
                                <div class="col-lg-12 text-center py-80">
                                    <h4  style="font-family: 'Phetsarath OT';color: #C0C2C2;"> ບໍ່ມີຂໍ້ມູນໂຮງແຮມ </h4>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                    @endforelse
                        

                       

                    </div>
                </div>
                <!-- Main content END -->
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
Hotel list END -->
</div>
<div>

    <!-- =======================
Main Banner START -->
    <section class="pt-4" wire:ignore>
        <div class="container">

            <!-- Title -->
            <div class="row">
                <div class="col-12 mb-4">
                    <h1 class="fs-3" style="font-family: 'Phetsarath OT'">{{$hotels->name}}</h1>
                    <!-- Location -->
                    <p class="fw-bold mb-0"><i class="bi bi-geo-alt me-2"></i>{{$hotels->address}}</p>
                </div>
            </div>

            <!-- Slider START -->
            <div class="tiny-slider arrow-round arrow-blur">
                <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-edge="0" data-dots="false"
                    data-items="2" data-items-sm="1">
                    <!-- Slider item -->
                    <div>
                        <a class="w-100 h-100" data-glightbox="" data-gallery="gallery" href="{{asset($hotels->img1)}}">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="{{asset($hotels->img1)}}" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <i
                                        class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slider item -->
                    <div>
                        <a class="w-100 h-100" data-glightbox="" data-gallery="gallery" href="{{asset($hotels->img2)}}">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="{{asset($hotels->img2)}}" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <i
                                        class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slider item -->
                    <div>
                        <a class="w-100 h-100" data-glightbox="" data-gallery="gallery" href="{{asset($hotels->img3)}}">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="{{asset($hotels->img3)}}" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <i
                                        class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slider item -->
                    <div>
                        <a class="w-100 h-100" data-glightbox="" data-gallery="gallery" href="{{asset($hotels->img4)}}">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="{{asset($hotels->img4)}}" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <i
                                        class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Slider START -->
        </div>
    </section>
    <!-- =======================
Main Banner END -->

    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 style="font-family: 'Phetsarath OT'">ທີ່ຕັ້ງໂຮງແຮມ</h4>
                    <iframe class="w-100 h-300px grayscale rounded" src="{{$hotels->location}}" height="500"
                        style="border:0;" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 p-4">
                    <div class="card border bg-transparent p-3">
                        <div
                            class="card-header bg-transparent border-bottom d-sm-flex justify-content-sm-between align-items-center p-0 pb-3 text-center">
                            <h4 class="mb-2 mb-sm-0" style="font-family: 'Phetsarath OT'">ລາຍລະອຽດ</h4>

                        </div>
                        <div class="row g-3 g-md-4">
                            <div class="col-md-12">
                                <div class="card-body d-flex flex-column p-0 h-100">
                                    <div class="row">
                                        <!-- Check in -->
                                        <div class="col-lg-4">
                                            <div class="d-flex">
                                                <!-- Icon -->
                                                <i class="bi bi-calendar fs-3 me-2" style="margin-top: 25px"></i>
                                                <!-- Date input -->
                                                <div class="form-control-border form-control-transparent form-fs-md">
                                                    <label class="form-label">ວັນທີ ເຂົ້າ</label>
                                                    <input type="date" class="form-control"
                                                        placeholder="ເລືອກວັນທີເຂົ້າພັກ" wire:model="date"
                                                        style="margin-bottom: 10px;">
                                                    @error('date') <span style="color: red"
                                                        class="error">{{ $message }}</span>@enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Check out -->
                                        <div class="col-lg-4">
                                            <div class="d-flex">
                                                <!-- Icon -->
                                                <i class="bi bi-calendar fs-3 me-2" style="margin-top: 25px"></i>
                                                <!-- Date input -->
                                                <div class="form-control-border form-control-transparent form-fs-md">
                                                    <label class="form-label">ຫາວັນທີ</label>
                                                    <input type="date" class="form-control"
                                                        placeholder="ເລືອກວັນທີເຂົ້າພັກ" wire:model="enddate"
                                                        style="margin-bottom: 10px;">
                                                    @error('enddate') <span style="color: red"
                                                        class="error">{{ $message }}</span>@enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="d-flex">
                                                <!-- Icon -->
                                                 <button class="btn btn-sm btn-primary me-2" style="margin-top: 30px" wire:click="calDate">=</button>
                                                <!-- <i class=" fs-3 me-2" style="margin-top: 25px">=</i> -->
                                                <!-- Date input -->
                                                <div class="form-control-border form-control-transparent form-fs-md">
                                                    <label class="form-label">ຈຳນວນວັນ</label>
                                                    <input type="text" class="form-control" data-mode="range"
                                                        placeholder="ຈຳນວນວັນ" value="{{$sumdate}}"
                                                        style="margin-bottom: 10px;">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Room detail START -->
                        </div>
                    </div>
                </div>
                <!-- Detail START -->

                <!-- =======================
Room detail START -->
                <section class="pt-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 p-4">
                                <div class="card border bg-transparent p-3">
                                    <div
                                        class="card-header bg-transparent border-bottom d-sm-flex justify-content-sm-between align-items-center p-0 pb-3 text-center">
                                        <h4 class="mb-2 mb-sm-0" style="font-family: 'Phetsarath OT'">ຂໍ້ມູນຜູ້ຈອງ</h4>

                                    </div>
                                    <div class="row g-3 g-md-4">
                                        <div class="col-md-12">
                                            <div class="card-body d-flex flex-column p-0 h-100">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="code">ລະຫັດການຈອງ</label>
                                                            <input type="text" name="code" id="code" wire:model="code"
                                                                class="form-control" placeholder="ລະຫັດການຈອງ" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="name">ຊື່ຜູ້ຈອງ</label>
                                                            <input type="text" name="name" id="name" wire:model="name"
                                                                class="form-control" placeholder="ຊື່ຜູ້ຈອງ"
                                                                {{$disname}}>
                                                            @error('name') <span style="color: red"
                                                                class="error">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="tel">ເບີໂທ</label>
                                                            <input type="text" name="tel" id="tel" wire:model="phone"
                                                                class="form-control" placeholder="ເບີໂທ" {{$disphone}}>
                                                            @error('phone') <span style="color: red"
                                                                class="error">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-12 p-3" style="display: {{$info}};">
											<button class="btn btn-sm btn-dark mb-0 float-end" wire:click="addInfo">ບັນທຶກຂໍ້ມູນຜູ້ຈອງ</button>
										</div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Room detail START -->
                                    </div>
                                </div>
                            </div>
                            <!-- Detail START -->

                            <div class="col-xl-7 p-5">
                                <div class="card bg-transparent p-0">
                                    <!-- Card header -->
                                    <div
                                        class="card-header bg-transparent border-bottom d-sm-flex justify-content-sm-between align-items-center p-0 pb-3">
                                        <h4 class="mb-2 mb-sm-0" style="font-family: 'Phetsarath OT'">ເລືອກຫ້ອງພັກ</h4>

                                        <div class="col-sm-4">
                                            <form class="form-control-bg-light">
                                                <select class="form-select form-select-sm js-choice border-0">
                                                    <option value="">ເພີ່ມເຕີມ</option>
                                                    <option>Recently search</option>
                                                    <option>Most popular</option>
                                                    <option>Top rated</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body p-0 pt-3">
                                        <div class="vstack gap-5">

                                            @forelse ($rooms as $item)
                                            <!-- Room item START -->
                                            <div class="card border bg-transparent p-3">
                                                <div class="row g-3 g-md-4">
                                                    <!-- Image and content -->
                                                    <div class="col-md-4">
                                                        <!-- Image -->
                                                        <div class="position-relative">
                                                            <img src="{{asset($item->img)}}" class="card-img" alt="">
                                                            <!-- Badge -->
                                                            <div class="card-img-overlay">
                                                                <a href="{{asset($item->img)}}"
                                                                    class="badge bg-dark stretched-link"
                                                                    data-glightbox="" data-gallery="gallery">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Room detail START -->
                                                    <div class="col-md-8">
                                                        <div class="card-body d-flex flex-column p-0 h-100">
                                                            <!-- Title -->
                                                            <h5 class="card-title">{{$item->name}}</h5>

                                                            <!-- List -->
                                                            <ul class="nav small nav-divider mb-0">
                                                                <li class="nav-item mb-0">
                                                                    <i
                                                                        class="fa-solid fa-table-cells-large me-1"></i>@if($item->cate
                                                                    == 'air') ປະເພດຫ້ອງແອ @else ປະເພດຫ້ອງພັດລົມ @endif
                                                                </li>
                                                                <li class="nav-item mb-0">
                                                                    <i class="fa-solid fa-bed me-1"></i>@if($item->type
                                                                    == 'one')
                                                                    ປະເພດຕຽງດ່ຽວ @else ປະເພດຕຽງຄູ່ @endif
                                                                </li>
                                                            </ul>

                                                            <!-- Price and button -->
                                                            <div
                                                                class="d-flex justify-content-between align-items-center mt-2 mt-md-auto">
                                                                <div class="d-flex text-success">
                                                                    <h6 class="h6 mb-0 text-success">
                                                                        {{number_format($item->price)}}
                                                                    </h6>
                                                                    <span class="fw-light"> /ຫ້ອງ/ຄືນ</span>
                                                                </div>
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-sm btn-dark mb-0"
                                                                    wire:click="addRoom({{$item->id}})">ເລືອກຫ້ອງ</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Room detail START -->
                                                </div>
                                            </div>
                                            <!-- Room item END -->
                                            @empty
                                            <!-- Room item START -->
                                            <div class="card border bg-transparent p-3">
                                                <div class="row g-3 g-md-4">
                                                    <!-- Room detail START -->
                                                    <div class="col-md-12">
                                                        <div class="card-body d-flex flex-column h-100 p-0 text-center">
                                                            <h4 style="font-family: 'Phetsarath OT';color: #C0C2C2;">
                                                                ບໍ່ມີຂໍ້ມູນຫ້ອງພັກ </h4>
                                                        </div>
                                                    </div>
                                                    <!-- Room detail START -->
                                                </div>
                                            </div>
                                            <!-- Room item END -->
                                            @endforelse



                                        </div>
                                    </div>
                                    <!-- Room item END -->
                                </div>
                            </div>

                            <!-- Right side content START -->
                            <aside class="col-xl-5 d-none d-xl-block">
                                <div class="card bg-transparent border">
                                    <!-- Card header START -->
                                    <div class="card-header bg-transparent border-bottom">
                                        <!-- Title -->
                                        <h4 class="card-title mb-0" style="font-family: 'Phetsarath OT';">ລາຍລະອຽດ</h4>
                                    </div>
                                    <!-- Card header END -->

                                    <!-- Card body START -->
                                    <div class="card-body">

                                        <div class="row g-4 mb-3">
                                            <!-- Item -->
                                            <div class="col-md-6">
                                                <div class="bg-light py-3 px-4 rounded-3">
                                                    <h6 class="fw-light small mb-1"
                                                        style="font-family: 'Phetsarath OT'">ເຂົ້າທີ່ພັກ</h6>
                                                    <h6 class="mb-0">4 March 2022</h6>
                                                </div>
                                            </div>

                                            <!-- Item -->
                                            <div class="col-md-6">
                                                <div class="bg-light py-3 px-4 rounded-3">
                                                    <h6 class="fw-light small mb-1"
                                                        style="font-family: 'Phetsarath OT'">ອອກທີ່ພັກ</h6>
                                                    <h6 class="mb-0">8 March 2022</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- List -->
                                        <ul class="list-group list-group-borderless mb-3">

                                            @forelse ($details as $item)
                                            <li class="list-group-item px-2 d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"
                                                    style="font-family: 'Phetsarath OT';">ຫ້ອງ {{$item->name}}
                                                    {{number_format($item->price)}} x {{$sumdate}} ມື້</span>
                                                <span
                                                    class="h6 fw-light mb-0">{{number_format($item->price * $sumdate)}}</span>
                                            </li>
                                            @empty
                                            <li class="list-group-item px-2 d-flex justify-content-between text-center">
                                                <span class="h6 fw-light mb-0"
                                                    style="font-family: 'Phetsarath OT';">ບໍ່ມີຂໍ້ມູນຫ້ອງພັກ</span>
                                            </li>
                                            @endforelse

                                            <li
                                                class="list-group-item bg-light d-flex justify-content-between rounded-2 px-2 mt-2">
                                                <span class="h5 fw-normal mb-0 ps-1"
                                                    style="font-family: 'Phetsarath OT';">ລວມ:</span>
                                                <span class="h5 fw-normal mb-0"
                                                    style="font-family: 'Phetsarath OT';">{{number_format($sum)}}
                                                    ກິບ</span>
                                            </li>
                                        </ul>
                                        <div class="row p-3">
                                            <div class="col-md-12">
                                                <input type="file" name="qr" id="qr" wire:model="img"
                                                    class="form-control">
                                                @error('img') <span style="color: red"
                                                    class="error">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="d-grid gap-2">
                                            <a href="javascript:void(0)" class="btn btn-dark mb-0"
                                                wire:click="payment">ຊຳລະ</a>
                                        </div>
                                        <div class="row p-3">
                                            <div class="col-md-12">
                                                <img src="{{asset('upload/QR.jpeg')}}" alt="qr">
                                            </div>
                                        </div>


                                    </div>
                                    <!-- Card body END -->
                                </div>
                            </aside>
                            <!-- Right side content END -->
                        </div>
                    </div>
                </section>
                <!-- =======================
Room detail END -->
            </div>
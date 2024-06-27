<div>

    <!-- =======================
Content START -->
    <section class="pt-3">
        <div class="container">
            <div class="row">

                <!-- Sidebar START -->
                <div class="col-lg-4 col-xl-3">
                    <!-- Responsive offcanvas body START -->
                    <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasSidebar">
                        <!-- Offcanvas header -->
                        <div class="offcanvas-header justify-content-end pb-2">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
                        </div>

                        <!-- Offcanvas body -->
                        <div class="offcanvas-body p-3 p-lg-0">
                            <div class="card bg-light w-100">

                                <!-- Edit profile button -->
                                <div class="position-absolute top-0 end-0 p-3">
                                    <a href="#" class="text-primary-hover" data-bs-toggle="tooltip"
                                        data-bs-title="Edit profile">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body p-3">
                                    <!-- Avatar and content -->
                                    <div class="text-center mb-3">
                                        <!-- Avatar -->
                                        @if (auth()->user()->profile)
                                        <div class="avatar avatar-xl mb-2">
                                            <img class="avatar-img rounded-circle border-white"
                                                src="{{asset(auth()->user()->profile)}}" alt="">
                                        </div>
                                        @else
                                        <div class="avatar avatar-xl mb-2">
                                            <img class="avatar-img rounded-circle  border-white"
                                                src="{{asset('fontend/assets/images/avatar/01.jpg')}}" alt="">
                                        </div>
                                        @endif

                                        <h6 class="mb-0">{{auth()->user()->fname}} {{auth()->user()->lname}}</h6>
                                        <a href="#"
                                            class="text-reset text-primary-hover small">{{auth()->user()->phone}}</a>
                                        <hr>
                                    </div>

                                    <!-- Sidebar menu item START -->
                                    <ul class="nav nav-pills-primary-soft flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="{{route('profile-cus')}}"><i
                                                    class="bi bi-person fa-fw me-2"></i>ໂປຣຟາຍຂອງຂ້ອຍ</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-danger bg-danger-soft-hover"
                                                href="{{route('logout')}}"><i
                                                    class="fas fa-sign-out-alt fa-fw me-2"></i>ອອກລະບົບ</a>
                                        </li>
                                    </ul>
                                    <!-- Sidebar menu item END -->
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                    </div>
                    <!-- Responsive offcanvas body END -->
                </div>
                <!-- Sidebar END -->

                <!-- Main content START -->
                <div class="col-lg-8 col-xl-9">

                    <!-- Offcanvas menu button -->
                    <div class="d-grid mb-0 d-lg-none w-100">
                        <button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="fas fa-sliders-h"></i> Menu
                        </button>
                    </div>

                    <div class="vstack gap-4">

                        <!-- Personal info START -->
                        <div class="card border">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h4 class="card-header-title" style="font-family: 'Phetsarath OT';">ຂໍ້ມູນໂປຣຟາຍ</h4>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body">
                                <!-- Form START -->
                                <form class="row g-3">
                                    <!-- Profile photo -->
                                    <div class="col-12">
                                        <label class="form-label">ປ່ຽນຮູບພາບໂປຣຟາຍ<span
                                                class="text-danger">*</span></label>
                                        <div class="d-flex align-items-center">
                                            <label class="position-relative me-4" for="uploadfile-1"
                                                title="Replace this pic">
                                                <!-- Avatar place holder -->
                                                @if ($profile)
                                                <span class="avatar avatar-xl">
                                                    <img id="uploadfile-1-preview"
                                                        class="avatar-img rounded-circle border border-white border-3 shadow"
                                                        src="{{asset($profile->temporaryUrl())}}" alt="">
                                                </span>
                                                @elseif ($profiles)
                                                <span class="avatar avatar-xl">
                                                    <img id="uploadfile-1-preview"
                                                        class="avatar-img rounded-circle border border-white border-3 shadow"
                                                        src="{{asset($profiles)}}" alt="">
                                                </span>
                                                @else
                                                <span class="avatar avatar-xl">
                                                    <img id="uploadfile-1-preview"
                                                        class="avatar-img rounded-circle border border-white border-3 shadow"
                                                        src="{{asset('fontend/assets/images/avatar/01.jpg')}}" alt="">
                                                </span>
                                                @endif

                                            </label>
                                            <!-- Upload button -->
                                            <label class="btn btn-sm btn-primary-soft mb-0"
                                                for="uploadfile-1">ອັບໂຫຼດ</label>
                                            <input id="uploadfile-1" class="form-control d-none" type="file" wire:model="profile">
                                        </div>
                                    </div>

                                    <!-- Name -->
                                    <div class="col-md-6">
                                        <label class="form-label">ຊື່ເຕັມ<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" wire:model="fname"
                                            placeholder="ຊື່ເຕັມ">
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label class="form-label">ນາມສະກຸນ<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" wire:model="lname"
                                            placeholder="ນາມສະກຸນ">
                                    </div>

                                    <!-- Mobile -->
                                    <div class="col-md-12">
                                        <label class="form-label">ເບີໂທລະສັບ<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" wire:model="phone"
                                            placeholder="Enter your mobile number">
                                    </div>

                                    <!-- Button -->
                                    <div class="col-12 text-end">
                                        <a href="javascript:void(0)" class="btn btn-primary mb-0"
                                            wire:click="store">ບັນທຶກ</a>
                                    </div>
                                </form>
                                <!-- Form END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Personal info END -->

                        <!-- Update Password START -->
                        <div class="card border">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h4 class="card-header-title" style="font-family: 'Phetsarath OT';">ປ່ຽນລະຫັດຜ່ານ</h4>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body">

                                <div class="mb-3">
                                    <label class="form-label">ລະຫັດຜ່ານໃໝ່</label>
                                    <div class="input-group">
                                        <input class="form-control fakepassword" placeholder="ລະຫັດຜ່ານໃໝ່"
                                            type="password" id="psw-input" wire:model="password">
                                        <span class="input-group-text p-0 bg-transparent">
                                            <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                                        </span>
                                    </div>
                                    @error('password') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                </div>
                                <!-- Confirm -->
                                <div class="mb-3">
                                    <label class="form-label">ຢືນຢັນລະຫັດຜ່ານ</label>
                                    <input class="form-control" type="password" placeholder="ຢືນຢັນລະຫັດຜ່ານ"
                                        wire:model="confirm_password">
                                        @error('confirm_password') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                </div>

                                <div class="text-end">
                                    <a href="javascript:void(0)" class="btn btn-primary mb-0"
                                        wire:click="changePass">ປ່ຽນລະຫັດຜ່ານ</a>
                                </div>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Update Password END -->
                    </div>
                </div>
                <!-- Main content END -->

            </div>
        </div>
    </section>
    <!-- =======================
Content END -->

</div>
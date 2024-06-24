<div>

<!-- =======================
Main Content START -->
<section class="vh-xxl-100">
	<div class="container h-100 d-flex px-0 px-sm-4">
		<div class="row justify-content-center align-items-center m-auto">
			<div class="col-12">
				<div class="bg-mode shadow rounded-3 overflow-hidden">
					<div class="row g-0">
						<!-- Vector Image -->
						<div class="col-lg-6 d-md-flex align-items-center order-2 order-lg-1">
							<div class="p-3 p-lg-5">
								<img src="{{asset('fontend/assets/images/element/signin.svg')}}" alt="">
							</div>
							<!-- Divider -->
							<div class="vr opacity-1 d-none d-lg-block"></div>
						</div>
		
						<!-- Information -->
						<div class="col-lg-6 order-1">
							<div class="p-4 p-sm-6">
								<!-- Logo -->
								<a href="index.html">
									<img class="h-50px mb-4" src="{{asset('fontend/assets/images/logo-icon.svg')}}" alt="logo">
								</a>
								<!-- Title -->
								<h1 class="mb-2 h3 phetsarath-font" style="font-family: 'Phetsarath OT';">ສະໝັກສະມາຊິກ</h1>
								<p class="mb-0 phetsarath-font">ທ່າເປັນສະມາຊິກແລ້ວບໍ?<a href="{{route('login-cus')}}"> ເຂົ້າລະບົບ</a></p>
		
								<!-- Form START -->
								<div class="mt-4 text-start">
									<!-- Email -->
									<div class="mb-3">
										<label class="form-label">ຊື່ເຂົ້າໃຊ້ງານລະບົບ</label>
										<input type="text" class="form-control" placeholder="ຊື່ເຂົ້າໃຊ້ງານລະບົບ" wire:model="username">
                                        @error('username') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
									</div>
									<!-- Password -->
									<div class="mb-3 position-relative">
										<label class="form-label">ລະຫັດຜ່ານ</label>
										<input class="form-control fakepassword" type="password" id="psw-input" placeholder="ລະຫັດຜ່ານ" wire:model="password">
										<span class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
											<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
										</span>
                                        @error('password') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
									</div>
									<!-- Confirm Password -->
									<div class="mb-3">
										<label class="form-label">ຢືນຢັນລະຫັດຜ່ານ</label>
										<input type="password" class="form-control" placeholder="ຢືນຢັນລະຫັດຜ່ານ" wire:model="confirm_password">
                                        @error('confirm_password') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
									</div>
                                    <div class="mb-3">
										<label class="form-label">ຊື່ແທ້ຜູ້ໃຊ້ງານ</label>
										<input type="text" class="form-control" placeholder="ຊື່ແທ້ຜູ້ໃຊ້ງານ" wire:model="fname">
                                        @error('fname') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
									</div>
                                    <div class="mb-3">
										<label class="form-label">ນາມສະກຸນ</label>
										<input type="text" class="form-control" placeholder="ນາມສະກຸນ" wire:model="lname">
                                        @error('lname') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
									</div>
                                    <div class="mb-3">
										<label class="form-label">ເບິໂທລະສັບ</label>
										<input type="text" class="form-control" placeholder="ເບິໂທລະສັບ" wire:model="phone">
                                        @error('phone') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
									</div>
									<!-- Button -->
									<div><button type="submit" class="btn btn-primary w-100 mb-0" wire:click="store">ລົງທະບຽນ</button></div>
								</div>
								<!-- Form END -->
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main Content END -->

</div>
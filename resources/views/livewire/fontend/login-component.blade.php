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
						<div class="col-lg-6 d-flex align-items-center order-2 order-lg-1">
							<div class="p-3 p-lg-5">
								<img src="{{asset('fontend/assets/images/element/signin.svg')}}" alt="pic">
							</div>
							<!-- Divider -->
							<div class="vr opacity-1 d-none d-lg-block"></div>
						</div>
		
						<!-- Information -->
						<div class="col-lg-6 order-1">
							<div class="p-4 p-sm-7">
								<!-- Logo -->
								<a href="index.html">
									<img class="h-50px mb-4" src="{{asset('fontend/assets/images/logo-icon.svg')}}" alt="logo">
								</a>
								<!-- Title -->
								<h1 class="mb-2 h3" style="font-family: 'Phetsarath OT';">ຍິນດີຕ້ອນຮັບ</h1>
								<p class="mb-0" style="font-family: 'Phetsarath OT';">ສະໝັກສະມາຊິກ?<a href="{{route('register')}}"> ກົດທີ່ນີ້ເພື່ອສະໝັກ</a></p>
		
								<!-- Form START -->
								<div class="mt-4 text-start">
									<!-- Email -->
									<div class="mb-3">
										<label class="form-label">ຊື່ຜູ້ເຂົ້າໃຊ້ລະບົບ</label>
										<input type="text" class="form-control" wire:model="username" wire:keydown.enter="login">
                                        @error('username') <span style="color: red" class="error">{{ $message }}</span>@enderror
									</div>
									<!-- Password -->
									<div class="mb-3 position-relative">
										<label class="form-label">ລະຫັດຜ່ານ</label>
										<input class="form-control fakepassword" type="password" id="psw-input" wire:model="password" wire:keydown.enter="login">
										<span class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
											<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
										</span>
                                        @error('password') <span style="color: red" class="error">{{ $message }}</span>@enderror
									</div>

									<div><button type="submit" class="btn btn-primary w-100 mb-0" wire:click="login">ເຂົ້າລະບົບ</button></div>
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

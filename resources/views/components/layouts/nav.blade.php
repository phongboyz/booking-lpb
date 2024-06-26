
<!-- Header START -->
<header class="navbar-light header-sticky">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="{{route('home')}}">
				<img class="light-mode-item navbar-brand-item" src="{{asset('fontend/assets/images/logo.svg')}}" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="{{asset('fontend/assets/images/logo-light.svg')}}" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto ms-sm-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
        <span class="d-none d-sm-inline-block small">ເມນູ</span>
			</button>

			<!-- Responsive category toggler -->
			<button class="navbar-toggler ms-sm-auto mx-3 me-md-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCategoryCollapse" aria-controls="navbarCategoryCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<i class="bi bi-grid-3x3-gap-fill fa-fw"></i><span class="d-none d-sm-inline-block small">ປະເພດ</span>
			</button>

            <div class="navbar-collapse collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll me-auto">

					<!-- Nav item Listing -->
					 @if($auth_check == 0)
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="listingMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ສະໝັກສະມາຊິກ</a>
						<ul class="dropdown-menu" aria-labelledby="listingMenu">

							<li> <a class="dropdown-item" href="{{route('login-cus')}}">ເຂົ້າລະບົບ</a></li>
							<li> <a class="dropdown-item" href="{{route('register')}}">ລົງທະບຽນ</a></li>
						</ul>
					</li>
					@endif

				</ul>
			</div>

			<!-- Main navbar START -->
			<div class="navbar-collapse collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll nav-pills-primary-soft text-center ms-auto p-2 p-xl-0">

                    <li class="nav-item"> <a class="nav-link" href="{{route('home')}}"><i class="fa-solid fa-hotel me-2"></i>ໜ້າຫຼັກ</a>	</li>

					<!-- Nav item Flight -->
					@if($auth_check == 1)
					<li class="nav-item"> <a class="nav-link" href="{{route('list-bookings')}}"><i class="fa-solid fa-shopping-cart me-2"></i>ລາຍການຈອງ</a>	</li>
					@endif

					<!-- Nav item Tour -->
					<li class="nav-item"> <a class="nav-link" href="{{route('contact')}}"><i class="fa-solid fa-phone me-2"></i>ຕິດຕໍ່ພົວພັນ</a> </li>

                    
					
				</ul>
			</div>
			<!-- Main navbar END -->

			@if($auth_check == 1)
			<!-- Profile and Notification START -->
			<ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">

				<!-- Notification dropdown START -->
				<li class="nav-item dropdown ms-0 ms-md-3">
					<!-- Notification button -->
					<a class="nav-notification btn btn-light p-0 mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
						<i class="bi bi-bell fa-fw"></i>
					</a>
					<!-- Notification dote -->
					@if($log_booking_f)<span class="notif-badge animation-blink"></span>@endif

					<!-- Notification dropdown menu START -->
					<div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md shadow-lg p-0">
						<div class="card bg-transparent">
							<!-- Card header -->
							<div class="card-header bg-transparent d-flex justify-content-between align-items-center border-bottom">
								<h6 class="m-0" style="font-family: 'Phetsarath OT';">ແຈ້ງເຕືອນ <span class="badge bg-danger bg-opacity-10 text-danger ms-2">{{$log_booking_f}} ລາຍການໃໝ່</span></h6>
								<!-- <a class="small" href="#">Clear all</a> -->
							</div>

							<!-- Card body START -->
							<div class="card-body p-0">
								<ul class="list-group list-group-flush list-unstyled p-2">
									<!-- Notification item -->
									 @forelse ($log_booking as $item)
									 <li>
										<a href="#" class="list-group-item list-group-item-action rounded notif-unread border-0 mb-1 p-3">
											<h6 class="mb-2" style="font-family: 'Phetsarath OT';">ລະຫັດ : {{$item->booking_code}}</h6>
											<p class="mb-0 small">ທີ່ພັກ: {{$item->bookingname->hotelname->name}} (@if($item->status == 2) ຈອງສຳເລັດ @else ການຈອງຖືກຍົກເລີກ @endif)</p>
											<span>{{date('d/m/Y', strtotime($item->created_at))}}</span>
										</a>
									</li>
									 @empty
									 <li>
										<a href="#" class="list-group-item list-group-item-action rounded notif-unread border-0 mb-1 p-3">
											
											<p class="mb-0 small">ບໍ່ມີລາຍການແຈ້ງເຕືອນ</p>
											
										</a>
									</li>
									 @endforelse
									
									
								</ul>
							</div>
							<!-- Card body END -->

							<!-- Card footer -->
							<div class="card-footer bg-transparent text-center border-top">
								<a href="{{route('list-bookings')}}" class="btn btn-sm btn-link mb-0 p-0">ເບິ່ງລາຍລະອຽດທັງໝົດ</a>
							</div>
						</div>
					</div>
					<!-- Notification dropdown menu END -->
				</li>
				<!-- Notification dropdown END -->

				<!-- Profile dropdown START -->
				<li class="nav-item ms-3 dropdown">
					<!-- Avatar -->
					 @if (auth()->user()->profile)
					 <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
						<img class="avatar-img rounded-2" src="{{asset(auth()->user()->profile)}}" alt="avatar">
					</a>
					 @else
					 <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
						<img class="avatar-img rounded-2" src="{{asset('fontend/assets/images/avatar/01.jpg')}}" alt="avatar">
					</a>
					 @endif
					

					<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
						<!-- Profile info -->
						<li class="px-3 mb-3">
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								@if (auth()->user()->profile)
								<div class="avatar me-3">
									<img class="avatar-img rounded-circle shadow" src="{{asset(auth()->user()->profile)}}" alt="avatar">
								</div>
								@else
								<div class="avatar me-3">
									<img class="avatar-img rounded-circle shadow" src="{{asset('fontend/assets/images/avatar/01.jpg')}}" alt="avatar">
								</div>
								@endif
								<div>
									<a class="h6 mt-2 mt-sm-0" href="#">{{auth()->user()->username}}</a>
									<p class="small m-0">{{auth()->user()->fname}} {{auth()->user()->lname}}</p>
								</div>
							</div>
						</li>

						<!-- Links -->
						<li> <hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="{{route('profile-cus')}}"><i class="bi bi-bookmark-check fa-fw me-2"></i>ໂປຣຟາຍຂອງຂ້ອຍ</a></li>
						<li><a class="dropdown-item bg-danger-soft-hover" href="{{route('logout')}}"><i class="bi bi-power fa-fw me-2"></i>ອອກລະບົບ</a></li>
						<li> <hr class="dropdown-divider"></li>

						<!-- Dark mode options START -->
						<li>
							<div class="nav-pills-primary-soft theme-icon-active d-flex justify-content-between align-items-center p-2 pb-0">
								<span>ໂໝດ:</span>
								<button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0" data-bs-theme-value="light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Light">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewbox="0 0 16 16">
										<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
										<use href="#"></use>
									</svg>
								</button>
								<button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0" data-bs-theme-value="dark" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Dark">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewbox="0 0 16 16">
										<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"></path>
										<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
										<use href="#"></use>
									</svg>
								</button>
								<button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0 active" data-bs-theme-value="auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Auto">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewbox="0 0 16 16">
										<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
										<use href="#"></use>
									</svg>
								</button>
							</div>
						</li> 
						<!-- Dark mode options END-->
					</ul>
				</li>
				<!-- Profile dropdown END -->
			</ul>
			<!-- Profile and Notification START -->
			@endif
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->
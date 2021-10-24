<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
	<!--begin::Container-->
	<div class="container d-flex align-items-center justify-content-between" id="kt_header_container">
		<!--begin::Page title-->
		<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
			<!--begin::Heading-->
			<h1 class="text-dark fw-bolder my-0 fs-2">Dashboard</h1>
			<!--end::Heading-->
			<!--begin::Breadcrumb-->
			<ul class="breadcrumb fw-bold fs-base my-1">
				<li class="breadcrumb-item text-muted">
					<a href="../../demo7/dist/index.html" class="text-muted">Home</a>
				</li>
				<li class="breadcrumb-item text-dark">Default</li>
			</ul>
			<!--end::Breadcrumb-->
		</div>
		<!--end::Page title=-->
		<!--begin::Wrapper-->

		{{-- <li>
			<a class="app-menu__item {{ Route::currentRouteName() == 'admin.brands.index' ? 'active' : '' }}" href="{{ route('admin.brands.index') }}">
				<i class="app-menu__icon fa fa-briefcase"></i>
				<span class="app-menu__label">Brands</span>
			</a>
		</li> --}}

		<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
			<!--begin::Aside mobile toggle-->
			<div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
				<!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
				<span class="svg-icon svg-icon-2x">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24" />
							<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
							<path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
						</g>
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
			<!--end::Aside mobile toggle-->
			<!--begin::Logo-->
			<a href="../../demo7/dist/index.html" class="d-flex align-items-center">
				<img alt="Logo" src="{{ asset('admin/assets/media/logos/logo-demo7.svg')}}" class="h-30px" />
			</a>
			<!--end::Logo-->
		</div>
		<!--end::Wrapper-->
		<!--begin::Toolbar wrapper-->
		<div class="d-flex flex-shrink-0">
			<!--begin::Invite user-->
			<div class="d-flex ms-3">
				<a href="#" class="btn btn-flex flex-center btn-bg-white btn-text-gray-500 btn-active-color-primary w-40px w-md-auto h-40px px-0 px-md-6" tooltip="New Member" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
					<!--begin::Svg Icon | path: icons/duotone/Communication/Add-user.svg-->
					<span class="svg-icon svg-icon-2 svg-icon-primary me-0 me-md-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
							<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
						</svg>
					</span>
					<!--end::Svg Icon-->
					<span class="d-none d-md-inline">New Member</span>
				</a>
			</div>
			<!--end::Invite user-->
			<!--begin::Create app-->
			<div class="d-flex ms-3">
				<a href="#" class="btn btn-flex flex-center btn-bg-white btn-text-gray-500 btn-active-color-primary w-40px w-md-auto h-40px px-0 px-md-6" tooltip="New App" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">
					<!--begin::Svg Icon | path: icons/duotone/Files/File.svg-->
					<span class="svg-icon svg-icon-2 svg-icon-primary me-0 me-md-2">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<rect fill="#000000" x="6" y="11" width="9" height="2" rx="1" />
								<rect fill="#000000" x="6" y="15" width="5" height="2" rx="1" />
							</g>
						</svg>
					</span>
					<!--end::Svg Icon-->
					<span class="d-none d-md-inline">New App</span>
				</a>
			</div>
			<!--end::Create app-->
			<!--begin::Chat-->
			<div class="d-flex align-items-center ms-3">
				<!--begin::Menu wrapper-->
				<div class="btn btn-icon btn-primary w-40px h-40px pulse pulse-white" id="kt_drawer_chat_toggle">
					<!--begin::Svg Icon | path: icons/duotone/Communication/Group-chat.svg-->
					<span class="svg-icon svg-icon-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
							<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
						</svg>
					</span>
					<!--end::Svg Icon-->
					<span class="pulse-ring"></span>
				</div>
				<!--begin::Menu-->
				<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
					<!--begin::Heading-->
					<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/pattern-5.png')">
						<!--begin::Title-->
						<h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
						<span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
						<!--end::Title-->
						<!--begin::Tabs-->
						<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
							<li class="nav-item">
								<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
							</li>
						</ul>
						<!--end::Tabs-->
					</div>
					<!--end::Heading-->
					<!--begin::Tab content-->
					<div class="tab-content">
						<!--begin::Tab panel-->
						<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
							<!--begin::Items-->
							<div class="scroll-y mh-325px my-5 px-8">
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center">
										<!--begin::Symbol-->
										<div class="symbol symbol-35px me-4">
											<span class="symbol-label bg-light-primary">
												<!--begin::Svg Icon | path: icons/duotone/Clothes/Crown.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<path d="M11.2600599,5.81393408 L2,16 L22,16 L12.7399401,5.81393408 C12.3684331,5.40527646 11.7359848,5.37515988 11.3273272,5.7466668 C11.3038503,5.7680094 11.2814025,5.79045722 11.2600599,5.81393408 Z" fill="#000000" opacity="0.3" />
														<path d="M12.0056789,15.7116802 L20.2805786,6.85290308 C20.6575758,6.44930487 21.2903735,6.42774054 21.6939717,6.8047378 C21.8964274,6.9938498 22.0113578,7.25847607 22.0113578,7.535517 L22.0113578,20 L16.0113578,20 L2,20 L2,7.535517 C2,7.25847607 2.11493033,6.9938498 2.31738608,6.8047378 C2.72098429,6.42774054 3.35378194,6.44930487 3.7307792,6.85290308 L12.0056789,15.7116802 Z" fill="#000000" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="mb-0 me-2">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Alice</a>
											<div class="text-gray-400 fs-7">Phase 1 development</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">1 hr</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center">
										<!--begin::Symbol-->
										<div class="symbol symbol-35px me-4">
											<span class="symbol-label bg-light-danger">
												<!--begin::Svg Icon | path: icons/duotone/Code/Warning-2.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-danger">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<path d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z" fill="#000000" opacity="0.3" />
														<rect fill="#000000" x="11" y="9" width="2" height="7" rx="1" />
														<rect fill="#000000" x="11" y="17" width="2" height="2" rx="1" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="mb-0 me-2">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">HR Confidential</a>
											<div class="text-gray-400 fs-7">Confidential staff documents</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">2 hrs</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center">
										<!--begin::Symbol-->
										<div class="symbol symbol-35px me-4">
											<span class="symbol-label bg-light-warning">
												<!--begin::Svg Icon | path: icons/duotone/Communication/Group.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-warning">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="mb-0 me-2">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Company HR</a>
											<div class="text-gray-400 fs-7">Corporeate staff profiles</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">5 hrs</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center">
										<!--begin::Symbol-->
										<div class="symbol symbol-35px me-4">
											<span class="symbol-label bg-light-success">
												<!--begin::Svg Icon | path: icons/duotone/General/Thunder.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M12.3740377,19.9389434 L18.2226499,11.1660251 C18.4524142,10.8213786 18.3592838,10.3557266 18.0146373,10.1259623 C17.8914367,10.0438285 17.7466809,10 17.5986122,10 L13,10 L13,4.47708173 C13,4.06286817 12.6642136,3.72708173 12.25,3.72708173 C11.9992351,3.72708173 11.7650616,3.85240758 11.6259623,4.06105658 L5.7773501,12.8339749 C5.54758575,13.1786214 5.64071616,13.6442734 5.98536267,13.8740377 C6.10856331,13.9561715 6.25331908,14 6.40138782,14 L11,14 L11,19.5229183 C11,19.9371318 11.3357864,20.2729183 11.75,20.2729183 C12.0007649,20.2729183 12.2349384,20.1475924 12.3740377,19.9389434 Z" fill="#000000" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="mb-0 me-2">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Redux</a>
											<div class="text-gray-400 fs-7">New frontend admin theme</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">2 days</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center">
										<!--begin::Symbol-->
										<div class="symbol symbol-35px me-4">
											<span class="symbol-label bg-light-primary">
												<!--begin::Svg Icon | path: icons/duotone/Communication/Flag.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<path d="M3.5,3 L5,3 L5,19.5 C5,20.3284271 4.32842712,21 3.5,21 L3.5,21 C2.67157288,21 2,20.3284271 2,19.5 L2,4.5 C2,3.67157288 2.67157288,3 3.5,3 Z" fill="#000000" />
														<path d="M6.99987583,2.99995344 L19.754647,2.99999303 C20.3069317,2.99999474 20.7546456,3.44771138 20.7546439,3.99999613 C20.7546431,4.24703684 20.6631995,4.48533385 20.497938,4.66895776 L17.5,8 L20.4979317,11.3310353 C20.8673908,11.7415453 20.8341123,12.3738351 20.4236023,12.7432941 C20.2399776,12.9085564 20.0016794,13 19.7546376,13 L6.99987583,13 L6.99987583,2.99995344 Z" fill="#000000" opacity="0.3" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="mb-0 me-2">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Breafing</a>
											<div class="text-gray-400 fs-7">Product launch status update</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">21 Jan</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center">
										<!--begin::Symbol-->
										<div class="symbol symbol-35px me-4">
											<span class="symbol-label bg-light-info">
												<!--begin::Svg Icon | path: icons/duotone/Design/Image.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-info">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path d="M6,5 L18,5 C19.6568542,5 21,6.34314575 21,8 L21,17 C21,18.6568542 19.6568542,20 18,20 L6,20 C4.34314575,20 3,18.6568542 3,17 L3,8 C3,6.34314575 4.34314575,5 6,5 Z M5,17 L14,17 L9.5,11 L5,17 Z M16,14 C17.6568542,14 19,12.6568542 19,11 C19,9.34314575 17.6568542,8 16,8 C14.3431458,8 13,9.34314575 13,11 C13,12.6568542 14.3431458,14 16,14 Z" fill="#000000" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="mb-0 me-2">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Banner Assets</a>
											<div class="text-gray-400 fs-7">Collection of banner images</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">21 Jan</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center">
										<!--begin::Symbol-->
										<div class="symbol symbol-35px me-4">
											<span class="symbol-label bg-light-warning">
												<!--begin::Svg Icon | path: icons/duotone/Design/Component.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-warning">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<path d="M12.7442084,3.27882877 L19.2473374,6.9949025 C19.7146999,7.26196679 20.003129,7.75898194 20.003129,8.29726722 L20.003129,15.7027328 C20.003129,16.2410181 19.7146999,16.7380332 19.2473374,17.0050975 L12.7442084,20.7211712 C12.2830594,20.9846849 11.7169406,20.9846849 11.2557916,20.7211712 L4.75266256,17.0050975 C4.28530007,16.7380332 3.99687097,16.2410181 3.99687097,15.7027328 L3.99687097,8.29726722 C3.99687097,7.75898194 4.28530007,7.26196679 4.75266256,6.9949025 L11.2557916,3.27882877 C11.7169406,3.01531506 12.2830594,3.01531506 12.7442084,3.27882877 Z M12,14.5 C13.3807119,14.5 14.5,13.3807119 14.5,12 C14.5,10.6192881 13.3807119,9.5 12,9.5 C10.6192881,9.5 9.5,10.6192881 9.5,12 C9.5,13.3807119 10.6192881,14.5 12,14.5 Z" fill="#000000" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="mb-0 me-2">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Icon Assets</a>
											<div class="text-gray-400 fs-7">Collection of SVG icons</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">20 March</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Items-->
							<!--begin::View more-->
							<div class="py-3 text-center border-top">
								<a href="../../demo7/dist/pages/profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
								<!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
								<span class="svg-icon svg-icon-5">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24" />
											<rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
											<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
										</g>
									</svg>
								</span>
								<!--end::Svg Icon--></a>
							</div>
							<!--end::View more-->
						</div>
						<!--end::Tab panel-->
						<!--begin::Tab panel-->
						<div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column px-9">
								<!--begin::Section-->
								<div class="pt-10 pb-0">
									<!--begin::Title-->
									<h3 class="text-dark text-center fw-bolder">Get Pro Access</h3>
									<!--end::Title-->
									<!--begin::Text-->
									<div class="text-center text-gray-600 fw-bold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
									<!--end::Text-->
									<!--begin::Action-->
									<div class="text-center mt-5 mb-9">
										<a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
									</div>
									<!--end::Action-->
								</div>
								<!--end::Section-->
								<!--begin::Illustration-->
								<div class="text-center px-4">
									<img class="mw-100 mh-200px" alt="metronic" src="assets/media/illustrations/alert.png" />
								</div>
								<!--end::Illustration-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Tab panel-->
						<!--begin::Tab panel-->
						<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
							<!--begin::Items-->
							<div class="scroll-y mh-325px my-5 px-8">
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Code-->
										<span class="w-70px badge badge-light-success me-4">200 OK</span>
										<!--end::Code-->
										<!--begin::Title-->
										<a href="#" class="text-gray-800 text-hover-primary fw-bold">New order</a>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">Just now</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Code-->
										<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
										<!--end::Code-->
										<!--begin::Title-->
										<a href="#" class="text-gray-800 text-hover-primary fw-bold">New customer</a>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">2 hrs</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Code-->
										<span class="w-70px badge badge-light-success me-4">200 OK</span>
										<!--end::Code-->
										<!--begin::Title-->
										<a href="#" class="text-gray-800 text-hover-primary fw-bold">Payment process</a>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">5 hrs</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Code-->
										<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
										<!--end::Code-->
										<!--begin::Title-->
										<a href="#" class="text-gray-800 text-hover-primary fw-bold">Search query</a>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">2 days</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Code-->
										<span class="w-70px badge badge-light-success me-4">200 OK</span>
										<!--end::Code-->
										<!--begin::Title-->
										<a href="#" class="text-gray-800 text-hover-primary fw-bold">API connection</a>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">1 week</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Code-->
										<span class="w-70px badge badge-light-success me-4">200 OK</span>
										<!--end::Code-->
										<!--begin::Title-->
										<a href="#" class="text-gray-800 text-hover-primary fw-bold">Database restore</a>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">Mar 5</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Code-->
										<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
										<!--end::Code-->
										<!--begin::Title-->
										<a href="#" class="text-gray-800 text-hover-primary fw-bold">System update</a>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">May 15</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Code-->
										<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
										<!--end::Code-->
										<!--begin::Title-->
										<a href="#" class="text-gray-800 text-hover-primary fw-bold">Server OS update</a>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">Apr 3</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Code-->
										<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
										<!--end::Code-->
										<!--begin::Title-->
										<a href="#" class="text-gray-800 text-hover-primary fw-bold">API rollback</a>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">Jun 30</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Code-->
										<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
										<!--end::Code-->
										<!--begin::Title-->
										<a href="#" class="text-gray-800 text-hover-primary fw-bold">Refund process</a>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">Jul 10</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Code-->
										<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
										<!--end::Code-->
										<!--begin::Title-->
										<a href="#" class="text-gray-800 text-hover-primary fw-bold">Withdrawal process</a>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">Sep 10</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Code-->
										<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
										<!--end::Code-->
										<!--begin::Title-->
										<a href="#" class="text-gray-800 text-hover-primary fw-bold">Mail tasks</a>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<span class="badge badge-light fs-8">Dec 10</span>
									<!--end::Label-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Items-->
							<!--begin::View more-->
							<div class="py-3 text-center border-top">
								<a href="../../demo7/dist/pages/profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
								<!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
								<span class="svg-icon svg-icon-5">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24" />
											<rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
											<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
										</g>
									</svg>
								</span>
								<!--end::Svg Icon--></a>
							</div>
							<!--end::View more-->
						</div>
						<!--end::Tab panel-->
					</div>
					<!--end::Tab content-->
				</div>
				<!--end::Menu-->
				<!--end::Menu wrapper-->
			</div>
			<!--end::Chat-->
		</div>
		<!--end::Toolbar wrapper-->
	</div>
	<!--end::Container-->
</div>
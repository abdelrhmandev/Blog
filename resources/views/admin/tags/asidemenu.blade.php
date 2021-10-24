					<!-- begin:: Aside -->
					<div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">


					<img src="{{ asset('admin/assets/media/logos/favicon.png') }}" height="50">
					   <div class="kt-portlet__head-label white">
					   	<h3 class="kt-widget19__title kt-font-light">{{ trans('admin.webapp') }}</h3></div>

							 
					</div>

					<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
						<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
							@include('admin.includes.sidebarmenu')
						</div>
					</div>
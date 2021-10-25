@extends('admin.layouts.app')
@section('title',trans('admin.dashboard'))
@section('content')
@push('styles')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="{{ asset('admin/assets/menu/style.css') }}" rel="stylesheet" type="text/css" />
@endpush
<?php
$currentUrl = url()->current();
?>
 



<div id="hwpwrap">
	<div class="custom-wp-admin wp-admin wp-core-ui js   menu-max-depth-0 nav-menus-php auto-fold admin-bar">
		<div id="wpwrap">
			<div id="wpcontent">
				<div id="wpbody">
					<div id="wpbody-content">

						<div class="wrap">

							<div class="manage-menus">
								<form method="get" action="{{ $currentUrl }}">
									<label for="menu" class="selected-menu">Select the menu you want to edit:</label>

									{{-- Menu::select('menu', $menulist) --}}

									<span class="submit-btn">
										<input type="submit" class="button-secondary" value="Choose">
									</span>
									<span class="add-new-menu-action"> or <a href="{{ $currentUrl }}?action=edit&menu=0">Create new menu</a>. </span>
								</form>
							</div>
							<div id="nav-menus-frame">

								{{-- @if(request()->has('menu')  && !empty(request()->input("menu"))) --}}
								<div id="menu-settings-column" class="metabox-holder">

									<div class="clear"></div>

									<form id="nav-menu-meta" action="" class="nav-menu-meta" method="post" enctype="multipart/form-data">
										<div id="side-sortables" class="accordion-container">
											<ul class="outer-border">
												<li class="control-section accordion-section  open add-page" id="add-page">
													<h3 class="accordion-section-title hndle" tabindex="0"> Custom Link <span class="screen-reader-text">Press return or enter to expand</span></h3>
													<div class="accordion-section-content ">
														<div class="inside">
															<div class="customlinkdiv" id="customlinkdiv">
															 

																<p id="menu-item-name-wrap">
																	<label class="howto" for="custom-menu-item-name"> <span>Label</span>&nbsp;
																		<input id="custom-menu-item-name" name="label" type="text" class="regular-text menu-item-textbox input-with-default-title" title="Label menu">
																	</label>
																</p>

																 

																<p class="button-controls">

																	<a  href="#" onclick="addcustommenu()"  class="button-secondary submit-add-to-menu right"  >Add menu item</a>
																	<span class="spinner" id="spincustomu"></span>
																</p>

															</div>
														</div>
													</div>
												</li>

											</ul>
										</div>
									</form>

								</div>
								{{-- @endif --}}
								<div id="menu-management-liquid">
									<div id="menu-management">
										<form id="update-nav-menu" action="" method="post" enctype="multipart/form-data">
											<div class="menu-edit ">
												<div id="nav-menu-header">
													<div class="major-publishing-actions">
														<label class="menu-name-label howto open-label" for="menu-name"> <span>Name</span>
															<input name="menu-name" id="menu-name" type="text" class="menu-name regular-text menu-item-textbox" title="Enter menu name" value="@if(isset($indmenu)){{$indmenu->name}}@endif">
															<input type="hidden" id="idmenu" value="@if(isset($indmenu)){{$indmenu->id}}@endif" />
														</label>

														{{-- @if(request()->has('action')) --}}
														<div class="publishing-action">
															<a onclick="createnewmenu()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Create menu</a>
														</div>
														{{-- @elseif(request()->has("menu")) --}}
														<div class="publishing-action">
															<a onclick="getmenus()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Save menu</a>
															<span class="spinner" id="spincustomu2"></span>
														</div>

														{{-- @else --}}
														<div class="publishing-action">
															<a onclick="createnewmenu()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Create menu</a>
														</div>
														{{-- @endif --}}
													</div>
												</div>
												<div id="post-body">
													<div id="post-body-content">

												 

														<ul style="display: inline;" class="menu ui-sortable" id="menu-to-edit">
															@include('admin.menus.menu_listing')
														</ul>



														<div class="menu-settings">

														</div>
													</div>
												</div>
												<div id="nav-menu-footer">
													<div class="major-publishing-actions">

														@if(request()->has('action'))
														<div class="publishing-action">
															<a onclick="createnewmenu()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Create menu</a>
														</div>
														@elseif(request()->has("menu"))
														<span class="delete-action"> <a class="submitdelete deletion menu-delete" onclick="deletemenu()" href="javascript:void(9)">Delete menu</a> </span>
														<div class="publishing-action">

															<a onclick="getmenus()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Save menu</a>
															<span class="spinner" id="spincustomu2"></span>
														</div>

														@else
														<div class="publishing-action">
															<a onclick="createnewmenu()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Create menu</a>
														</div>
														@endif
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

						<div class="clear"></div>
					</div>

					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>

			<div class="clear"></div>
		</div>
	</div>
 

///////////////////////////////////






  
</div> {{-- // end of container --}}
 
@endsection
@push('scripts');
<script>
 
 
 
	var menus = {
		"oneThemeLocationNoMenus" : "",
		"moveUp" : "Move up",
		"moveDown" : "Mover down",
		"moveToTop" : "Move top",
		"moveUnder" : "Move under of %s",
		"moveOutFrom" : "Out from under  %s",
		"under" : "Under %s",
		"outFrom" : "Out from %s",
		"menuFocus" : "%1$s. Element menu %2$d of %3$d.",
		"subMenuFocus" : "%1$s. Menu of subelement %2$d of %3$s."
	};
	var arraydata = [];     
	// var addcustommenur= '{{ route("haddcustommenu") }}';
	// var updateitemr= '{{ route("hupdateitem")}}';
	// var generatemenucontrolr= '{{ route("hgeneratemenucontrol") }}';
	// var deleteitemmenur= '{{ route("hdeleteitemmenu") }}';
	// var deletemenugr= '{{ route("hdeletemenug") }}';
	// var createnewmenur= '{{ route("hcreatenewmenu") }}';
	// var csrftoken="{{ csrf_token() }}";
	// var menuwr = "{{ url()->current() }}";
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': csrftoken
		}
	});
 
 
   
   
   
   
   
</script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="{{asset('admin/assets/menu/scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/menu/scripts2.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/menu/menu.js')}}"></script>
@endpush

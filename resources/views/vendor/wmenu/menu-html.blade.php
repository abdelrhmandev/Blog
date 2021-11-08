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

							 
								<form method="get" action="{{ $currentUrl }}">
							
									<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed rounded-3 p-6">
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack flex-grow-1">
											<!--begin::Content-->
											<div class="fw-bold">
												<h4 class="text-gray-900 fw-bolder">This is a very important privacy notice!</h4>
												
												 
													<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
														<option></option>
														<option value="1">1</option>
									 
													</select>
											 
 											 
												

												<div class="fs-6 text-gray-700">Writing headlines for blog posts is much science and probably cool audience.
												<a href="#" class="fw-bolder">Learn more</a>.</div>
											</div>

											

											<!--end::Content-->
										</div>
										<!--end::Wrapper-->
									</div>


 								</form>
							 
							<div id="nav-menus-frame">

								@if(request()->has('menu')  && !empty(request()->input("menu")))
								<div id="menu-settings-column" class="metabox-holder">

									<div class="clear"></div>

									 @include('vendor.wmenu.menu-metanav')

								</div>
								@endif
								<div id="menu-management-liquid">
									<div id="menu-management">
										
										<form id="update-nav-menu" action="" method="post" enctype="multipart/form-data">
											<input type="hidden" name="_method" value="put">
											@csrf											
											<div class="menu-edit ">
												<div id="nav-menu-header">
													<div class="major-publishing-actions">
														<label class="menu-name-label howto open-label" for="menu-name"> <span>{{ trans('menu.name')}}</span>
															<input name="menu-name" id="menu-name" type="text" class="menu-name regular-text menu-item-textbox" title="Enter menu name" value="@if(isset($indmenu)){{$indmenu->name}}@endif">
															<input type="hidden" name="idmenu" id="idmenu" value="@if(isset($indmenu)){{$indmenu->id}}@endif" />
														</label>

														@if(request()->has('action'))
														<div class="publishing-action">
															<a onclick="createnewmenu()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">{{ trans('menu.create')}}</a>
														</div>
														@elseif(request()->has("menu"))
														<div class="publishing-action">
															<a onclick="getmenus()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">{{ trans('menu.save')}}</a>
															<span class="spinner" id="spincustomu2"></span>
														</div>

														@else
														<div class="publishing-action">
															<a onclick="createnewmenu()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">{{ trans('menu.create')}}</a>
														</div>
														@endif
													</div>
												</div>
												<div id="post-body">
													<div id="post-body-content">

														@if(request()->has("menu"))
														<h3>{{ trans('menu.menu_structure')}}</h3>
														<div class="drag-instructions post-body-plain" style="">
															<p>
																Place each item in the order you prefer. Click on the arrow to the right of the item to display more configuration options.
															</p>
														</div>

														@else
														<h3>Menu Creation</h3>
														<div class="drag-instructions post-body-plain" style="">
															<p>
																Please enteXXr the name and select "Create menu" button
															</p>
														</div>
														@endif
														 
														<ul style="display:inline" class="menu ui-sortable" id="menu-to-edit">
														 
															@if(isset($menus))
																@foreach($menus as $m)
																	@include('vendor.wmenu.menu_items_loop')
																@endforeach 
															@endif
														</ul>
														<div class="menu-settings">

														</div>
													</div>
												</div>
												<div id="nav-menu-footer">
													<div class="major-publishing-actions">

														@if(request()->has('action'))
														<div class="publishing-action">
															<a onclick="createnewmenu()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">{{ trans('menu.create')}}</a>
														</div>
														@elseif(request()->has("menu"))
														<span class="delete-action"> <a class="submitdelete deletion menu-delete" onclick="deletemenu()" href="javascript:void(9)">{{ trans('menu.delete')}}</a> </span>
														<div class="publishing-action">

															<a onclick="getmenus()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">{{ trans('menu.save')}}</a>
															<span class="spinner" id="spincustomu2"></span>
														 
														</div>

														@else
														<div class="publishing-action">
															<a onclick="createnewmenu()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">{{ trans('menu.create')}}</a>
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
</div>

<div id="hwpwrap">
	<div class="custom-wp-admin wp-admin wp-core-ui js   menu-max-depth-0 nav-menus-php auto-fold admin-bar">
		<div id="wpwrap">
			<div id="wpcontent">
				<div id="wpbody">
					<div id="wpbody-content">
                        <div class="card">

							<div class="card-header">
								<!--begin::Heading-->
								<div class="card-title">
									<h3>Select The Menu You Want To Edit </h3>
								</div>
								<!--end::Heading-->
								<!--begin::Toolbar-->
								<div class="card-toolbar">
									<div class="my-1 me-4">
										<!--begin::Select-->
										<select name="position" data-control="select2" data-placeholder="Select a position..." class="form-select form-select-solid">
											<option value="Web Developer">Web Developer</option>
											<option value="Web Designer">Web Designer</option>
											<option value="Art Director">Art Director</option>
											<option value="Finance Manager">Finance Manager</option>
											<option value="Project Manager">Project Manager</option>
											<option value="System Administrator">System Administrator</option>
										</select>
						
										<!--end::Select-->
									</div>
									<div class="my-1 me-4">
										<button class="btn btn-primary">Choose</button>
											OR 
										<button class="btn btn-light btn-active-light-primary me-2">Create New Menu</button>
									</div>
						
								</div>
								<!--end::Toolbar-->
							</div>
						
							
							
							<div class="card-body">
								<div id="nav-menus-frame">
									<div id="menu-settings-column" class="metabox-holder">
										<div class="clear"></div>
								
										<form id="nav-menu-meta" action="" class="nav-menu-meta" method="post" enctype="multipart/form-data">
											<input type="hidden" name="_method" value="put" />
											<input type="hidden" name="idmenu" id="idmenu" value="@if(isset($indmenu)){{$indmenu->id}}@endif" />
											@csrf
											<div id="side-sortables" class="accordion-container">
												<ul class="outer-border">
													<li class="control-section accordion-section open add-post" id="add-post">
														<h3 class="accordion-section-title hndle" tabindex="0">{{ trans('admin.posts')}} 
															<span class="screen-reader-text">Press return or enter to expand</span>
														</h3>
														<div class="accordion-section-content">
															<div class="inside">
																<div class="customlinkdiv" id="customlinkdiv">
																	

																	<div class="row mb-6">
																		<!--begin::Label-->
																		<label class="col-lg-4 col-form-label required fw-bold fs-6">Communication</label>
																		<!--end::Label-->
																		<!--begin::Col-->
																		<div class="col-lg-8 fv-row fv-plugins-icon-container">
																			<!--begin::Options-->
																			<div class="d-flex align-items-center mt-3">
																				<!--begin::Option-->
																				<label class="form-check form-check-inline form-check-solid me-5">
																					<input class="form-check-input" name="communication[]" type="checkbox" value="1">
																					<span class="fw-bold ps-2 fs-6">Email</span>
																				</label>
																				<!--end::Option-->
																				<!--begin::Option-->
																				<label class="form-check form-check-inline form-check-solid">
																					<input class="form-check-input" name="communication[]" type="checkbox" value="2">
																					<span class="fw-bold ps-2 fs-6">Phone</span>
																				</label>
																				<!--end::Option-->
																			</div>
																			<!--end::Options-->
																		<div class="fv-plugins-message-container invalid-feedback"></div></div>
																		<!--end::Col-->
																	</div>																							







																	<p class="button-controls">
																		<a href="#" onclick="addcustommenu()" class="button-secondary submit-add-to-menu right">{{ trans('menu.add_menu_item')}}</a>
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
									<div id="menu-management-liquid">
										<div id="menu-management">
											<form id="update-nav-menu" action="" method="post" enctype="multipart/form-data">
												<input type="hidden" name="_method" value="put" />
												@csrf
												<div class="menu-edit">
													<div id="nav-menu-header">
														SOme data SOme data SOme data SOme data SOme data SOme data SOme data SOme data
													</div>
													<div id="post-body">
														<div id="post-body-content">
															{{-- @if(request()->has("menu")) --}}
															<h3>{{ trans('menu.menu_structure')}}</h3>
															<div class="drag-instructions post-body-plain" style="">
																<p>
																	Place each item in the order you prefer. Click on the arrow to the right of the item to display more configuration options.
																</p>
															</div>
								
															{{-- @else --}}
															<h3>Menu Creation</h3>
															<div class="drag-instructions post-body-plain" style="">
																<p>
																	Please enteXXr the name and select "Create menu" button
																</p>
															</div>
															{{-- @endif --}}
								
															<div class="menu-settings">
																sdsadsadsaaasad
															</div>
														</div>
													</div>
													<div id="nav-menu-footer">
														<div class="major-publishing-actions">
															sdsadsaadasd
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								
								
 										</div>                            

									
							
										<div class="clear"></div>
                        </div> {{-- end of card  --}}

                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>

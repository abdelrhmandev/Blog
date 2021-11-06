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

									{!! Menu::select('menu', $menulist) !!}

									<span class="submit-btn">
										<input type="submit" class="button-secondary" value="Choose">
									</span>
									<span class="add-new-menu-action"> or <a href="{{ $currentUrl }}?action=edit&menu=0">Create new menu</a>. </span>
								</form>
							</div>
							<div id="nav-menus-frame">

								@if(request()->has('menu')  && !empty(request()->input("menu")))
								<div id="menu-settings-column" class="metabox-holder">

									<div class="clear"></div>

									<form id="nav-menu-meta" action="" class="nav-menu-meta" method="post" enctype="multipart/form-data">
										<input type="hidden" name="_method" value="put">
										<input type="hidden" name="idmenu" id="idmenu" value="@if(isset($indmenu)){{$indmenu->id}}@endif" />
										@csrf	
										<div id="side-sortables" class="accordion-container">
											<ul class="outer-border">
												<li class="control-section accordion-section  open add-page" id="add-page">
													<h3 class="accordion-section-title hndle" tabindex="0"> {{ trans('admin.pages')}}
														<span class="screen-reader-text">Press return or enter to expand</span></h3>
													<div class="accordion-section-content ">
														<div class="inside">
															<div class="customlinkdiv" id="customlinkdiv">
					  
																
																<?php
																$pages = DB::table('pages')->get();
															 	
																foreach ($pages as $page){
																$target_type = "pages";
																?>
																<input type="hidden" class="individual" name="target_type" value="{{ $target_type}}">
																<p>
																<input type="checkbox" class="individual" name="target_id[]" value="{{ $page->id}}" />    
																	{{ $page->id}}</p>
																
																<?php
																}
																?>
 

																<p class="button-controls">

																	<a  href="#" onclick="addcustommenu()"  class="button-secondary submit-add-to-menu right">{{ trans('menu.add_menu_item')}}</a>
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
														<h3>Menu Structure</h3>
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
															<li id="menu-item-{{$m->id}}" class="menu-item menu-item-depth-{{$m->depth}} menu-item-page menu-item-edit-inactive pending" style="display: list-item;">
																<dl class="menu-item-bar">
																	<dt class="menu-item-handle">
																		<span class="item-title"> <span class="menu-item-title"> 
																			<span id="menutitletemp_{{$m->id}}">{{$m->target_type }} | {{$m->target_id }} </span> 
																		<span style="color: transparent;">|{{$m->id}} | sssssss</span> 
																	</span> 
																		<span class="is-submenu" style="@if($m->depth==0)display: none;@endif">{{ trans('menu.subelement')}}</span> 
																	</span>
																		<span class="item-controls"> <span class="item-type">{{ trans('menu.link')}}</span> <span class="item-order hide-if-js"> 
																			<a href="{{ $currentUrl }}?action=move-up-menu-item&menu-item={{$m->id}}&_wpnonce=8b3eb7ac44" class="item-move-up">
																				<abbr title="Move Up">↑</abbr>
																			</a> 
																				 
																			<a href="{{ $currentUrl }}?action=move-down-menu-item&menu-item={{$m->id}}&_wpnonce=8b3eb7ac44" class="item-move-down">
																				<abbr title="Move Down">↓</abbr></a> </span> 
																				<a class="item-edit" id="edit-{{$m->id}}" title=" " href="{{ $currentUrl }}?edit-menu-item={{$m->id}}#menu-item-settings-{{$m->id}}"> </a> 
																			</span>
																	</dt>
																</dl>

																<div class="menu-item-settings" id="menu-item-settings-{{$m->id}}">
																	<input type="hidden" class="edit-menu-item-id" name="menuid_{{$m->id}}" value="{{$m->id}}" />
																	 
 
 

																	<p class="field-move hide-if-no-js description description-wide">
																		<label> <span>{{ trans('menu.move')}}</span> 
																			<a href="{{ $currentUrl }}" class="menus-move-up" style="display: none;">{{ trans('menu.move_up')}}</a> 
																			<a href="{{ $currentUrl }}" class="menus-move-down" title="Mover uno abajo" style="display: inline;">{{ trans('menu.move_down')}}</a> 
																			<a href="{{ $currentUrl }}" class="menus-move-left" style="display: none;"></a> 
																			<a href="{{ $currentUrl }}" class="menus-move-right" style="display: none;"></a> 
																			<a href="{{ $currentUrl }}" class="menus-move-top" style="display: none;">{{ trans('menu.top')}}</a> </label>
																	</p>

																	<div class="menu-item-actions description-wide submitbox">

																		<a class="item-delete submitdelete deletion" id="delete-{{$m->id}}" href="{{ $currentUrl }}?action=delete-menu-item&menu-item={{$m->id}}&_wpnonce=2844002501">{{ trans('menu.delete_menu_item')}}</a>
																		<span class="meta-sep hide-if-no-js"> | </span>
																		
																		<span class="meta-sep hide-if-no-js"> | </span>
																		

																	</div>

																</div>
																<ul class="menu-item-transport"></ul>
															</li>
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

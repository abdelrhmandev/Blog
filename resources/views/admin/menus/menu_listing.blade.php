
	@if(isset($menus))
	@foreach($menus as $m)
	<li id="menu-item-{{$m->id}}" class="menu-item menu-item-depth-{{$m->depth}} menu-item-page menu-item-edit-inactive pending" style="display: list-item;">
		<dl class="menu-item-bar">
			<dt class="menu-item-handle">
				<span class="item-title"> 
					<span class="menu-item-title"> 
						<span id="menutitletemp_{{$m->id}}">{{$m->title}}</span> 
						<span style="color: transparent;">|{{$m->id}}|</span> 
					</span> 
					<span class="is-submenu" style="@if($m->depth==0)display: none;@endif">Subelement</span>
				 </span>
				<span class="item-controls"> <span class="item-type">Link</span> 
				<span class="item-order hide-if-js"> 
					<a href="{{ $currentUrl }}?action=move-up-menu-item&menu-item={{$m->id}}&_wpnonce=8b3eb7ac44" class="item-move-up">
						<abbr title="Move Up">↑</abbr></a> | 
						<a href="{{ $currentUrl }}?action=move-down-menu-item&menu-item={{$m->id}}&_wpnonce=8b3eb7ac44" class="item-move-down">
							<abbr title="Move Down">↓</abbr>
						</a> 
				</span> 
				<a class="item-edit" id="edit-{{$m->id}}" title=" " href="{{ $currentUrl }}?edit-menu-item={{$m->id}}#menu-item-settings-{{$m->id}}"></a>
			</span>
			</dt>
		</dl>

		<div class="menu-item-settings" id="menu-item-settings-{{$m->id}}">
			<input type="hidden" class="edit-menu-item-id" name="menuid_{{$m->id}}" value="{{$m->id}}" />
			 

			 

			 

			 

			<p class="field-move hide-if-no-js description description-wide">
				<label> <span>Move  </span> 
					<a href="{{ $currentUrl }}" class="menus-move-up" style="display: none;">Move up</a> 
					<a href="{{ $currentUrl }}" class="menus-move-down" title="Mover uno abajo" style="display: inline;">Move Down</a> 
					<a href="{{ $currentUrl }}" class="menus-move-left" style="display: none;"></a> 
					<a href="{{ $currentUrl }}" class="menus-move-right" style="display: none;"></a> 
					<a href="{{ $currentUrl }}" class="menus-move-top" style="display: none;">Top</a> 
				</label>
			</p>

			<div class="menu-item-actions description-wide submitbox">
				<a class="item-delete submitdelete deletion" id="delete-{{$m->id}}" href="{{ $currentUrl }}?action=delete-menu-item&menu-item={{$m->id}}&_wpnonce=2844002501">Delete</a>
			</div>

		</div>
		<ul class="menu-item-transport"></ul>
	</li>
	@endforeach
	@endif
 
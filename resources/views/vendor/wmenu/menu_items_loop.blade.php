<li id="menu-item-{{$m->id}}" class="menu-item menu-item-depth-{{$m->depth}} menu-item-page menu-item-edit-inactive pending" style="display: list-item;">
    <dl class="menu-item-bar">
        <dt class="menu-item-handle">
            <span class="item-title">
                <span class="menu-item-title">
                    <span id="menutitletemp_{{$m->id}}">{{$m->target_type }} | {{$m->target_id }} </span>
                    <span style="color: transparent;">|{{$m->id}} | sssssss</span>
                </span>
                <span class="is-submenu" style="@if ($m->depth==0) display: none ; @endif;">{{ trans('menu.subelement')}}</span>
            </span>
            <span class="item-controls">
                <span class="item-type">{{ trans('menu.link')}}</span>
                <span class="item-order hide-if-js">
                    <a href="{{ $currentUrl }}?action=move-up-menu-item&menu-item={{$m->id}}&_wpnonce=8b3eb7ac44" class="item-move-up">
                        <abbr title="Move Up">↑</abbr>
                    </a>

                    <a href="{{ $currentUrl }}?action=move-down-menu-item&menu-item={{$m->id}}&_wpnonce=8b3eb7ac44" class="item-move-down"> <abbr title="Move Down">↓</abbr></a>
                </span>
                <a class="item-edit" id="edit-{{$m->id}}" title=" " href="{{ $currentUrl }}?edit-menu-item={{$m->id}}#menu-item-settings-{{$m->id}}"> </a>
            </span>
        </dt>
    </dl>

    <div class="menu-item-settings" id="menu-item-settings-{{$m->id}}">
        <input type="hidden" class="edit-menu-item-id" name="menuid_{{$m->id}}" value="{{$m->id}}" />

        <p class="field-move hide-if-no-js description description-wide">
            <label>
                <span>{{ trans('menu.move')}}</span>
                <a href="{{ $currentUrl }}" class="menus-move-up" style="display: none;">{{ trans('menu.move_up')}}</a>
                <a href="{{ $currentUrl }}" class="menus-move-down" title="Mover uno abajo" style="display: inline;">{{ trans('menu.move_down')}}</a>
                <a href="{{ $currentUrl }}" class="menus-move-left" style="display: none;"></a>
                <a href="{{ $currentUrl }}" class="menus-move-right" style="display: none;"></a>
                <a href="{{ $currentUrl }}" class="menus-move-top" style="display: none;">{{ trans('menu.top')}}</a>
            </label>
        </p>

        <div class="menu-item-actions description-wide submitbox">
            <a class="item-delete submitdelete deletion" id="delete-{{$m->id}}" href="{{ $currentUrl }}?action=delete-menu-item&menu-item={{$m->id}}&_wpnonce=2844002501">{{ trans('menu.delete_menu_item')}}</a>
            <span class="meta-sep hide-if-no-js"> | </span>

            <span class="meta-sep hide-if-no-js"> | </span>
        </div>
    </div>
    <ul class="menu-item-transport"></ul>
</li>

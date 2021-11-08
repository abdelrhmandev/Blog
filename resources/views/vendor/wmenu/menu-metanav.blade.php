<form id="nav-menu-meta" action="" class="nav-menu-meta" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="put" />
    <input type="hidden" name="idmenu" id="idmenu" value="@if(isset($indmenu)){{$indmenu->id}}@endif" />
    @csrf
    <div id="side-sortables" class="accordion-container">
        <ul class="outer-border">
            <li class="control-section accordion-section open add-post" id="add-post">
                <h3 class="accordion-section-title hndle" tabindex="0">{{ trans('admin.posts')}} <span class="screen-reader-text">Press return or enter to expand</span></h3>
                <div class="accordion-section-content">
                    <div class="inside">
                        <div class="customlinkdiv" id="customlinkdiv">
                            <?php
							$posts = DB::table('posts')->get(); foreach ($posts as $post){ $target_type = "posts"; ?>
                            <input type="hidden" class="individual" name="target_type" value="{{ $target_type}}" />
                            <p>
                                <input type="checkbox" class="individual" name="target_id[]" value="{{ $post->id}}" />
                                {{ $post->id}}
                            </p>

                            <?php
							}
							?>

                            <p class="button-controls">
                                <a href="#" onclick="addcustommenu()" class="button-secondary submit-add-to-menu right">{{ trans('menu.add_menu_item')}}</a>
                                <span class="spinner" id="spincustomu"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="control-section accordion-section open add-page" id="add-page">
                <h3 class="accordion-section-title hndle" tabindex="0">{{ trans('admin.posts')}} <span class="screen-reader-text">Press return or enter to expand</span></h3>
                <div class="accordion-section-content">
                    <div class="inside">
                        <div class="customlinkdiv" id="customlinkdiv">
                            <?php
							$posts = DB::table('posts')->get(); foreach ($posts as $page){ $target_type = "posts"; ?>
                            <input type="hidden" class="individual" name="target_type" value="{{ $target_type}}" />
                            <p>
                                <input type="checkbox" class="individual" name="target_id[]" value="{{ $page->id}}" />
                                {{ $page->id}}
                            </p>

                            <?php
							}
							?>

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

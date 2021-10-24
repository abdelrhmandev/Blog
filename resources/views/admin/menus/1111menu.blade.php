<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" style="direction: ltr">
	<!--begin::Head-->
	<head><title> Blog Dashboard | @yield('title')  </title>
        <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
        <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="Keenthemes | Metronic" />

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>
        .item-list,.info-box{background: #fff;padding: 10px;}
        .item-list-body{max-height: 300px;overflow-y: scroll;}
        .panel-body p{margin-bottom: 5px;}
        .info-box{margin-bottom: 15px;}
        .item-list-footer{padding-top: 10px;}
        .panel-heading a{display: block;}
        .form-inline{display: inline;}
        .form-inline select{padding: 4px 10px;}
        .btn-menu-select{padding: 4px 10px}
        .disabled{pointer-events: none; opacity: 0.7;}
        .menu-item-bar{background: #eee;padding: 5px 10px;border:1px solid #d7d7d7;margin-bottom: 5px; width: 75%; cursor: move;display: block;}
        #serialize_output{display: block;}
        .menulocation label{font-weight: normal;display: block;}
        body.dragging, body.dragging * {cursor: move !important;}
        .dragged {position: absolute;z-index: 1;}
        ol.example li.placeholder {position: relative;}
        ol.example li.placeholder:before {position: absolute;}
        #menuitem{list-style: none;}
        #menuitem ul{list-style: none;}
        .input-box{width:75%;background:#fff;padding: 10px;box-sizing: border-box;margin-bottom: 5px;}
        .input-box .form-control{width: 50%}
        </style>	
          
       
        </head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" style="background-image: url()" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled">

 
 

<div class="container" id="kt_content_container">
    
    <h2><span>http://127.0.0.1:8000/en/BoxControl/manage-menus/5#collapse1</span></h2>
 
     
    
    @if($desiredMenu !== '')
 
              
    <div id="menu-content">
      <div id="result"></div>
    <div style="min-height: 240px;">

        @if($desiredMenu != '')
          <ul class="menu ui-sortable" id="menuitems">
          @if(!empty($menuitems))
              @foreach($menuitems as $key=>$item)
              <li data-id="{{$item->id}}"><span class="menu-item-bar"><i class="fa fa-arrows"></i> @if(empty($item->name)) {{$item->title}} @else {{$item->name}} @endif <a href="#collapse{{$item->id}}" class="pull-right" data-toggle="collapse"><i class="caret"></i></a></span>
                  <div class="collapse" id="collapse{{$item->id}}">
                    <div class="input-box">
                      <form method="post" action="{{ route('update-menuitem',['id'=>$item->id]) }}">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label>Link Name</label>
                          <input type="text" name="name" value="@if(empty($item->name)) {{$item->title}} @else {{$item->name}} @endif" class="form-control">
                        </div>
                        @if($item->type == 'custom')
                          <div class="form-group">
                            <label>URL</label>
                            <input type="text" name="slug" value="{{$item->slug}}" class="form-control">
                          </div>					
                          <div class="form-group">
                            <input type="checkbox" name="target" value="_blank" @if($item->target == '_blank') checked @endif> Open in a new tab
                          </div>
                        @endif
                        <div class="form-group">
                          <button class="btn btn-sm btn-primary">Save</button>
                          <a href="{{ route('delete-menuitem',['id'=>$item->id,'key'=>$key]) }}" class="btn btn-sm btn-danger">Delete</a>
                        </div>
                      </form>
                    </div>
                  </div>
                  <ul>
                    @if(isset($item->children))
                      @foreach($item->children as $m)
                          @foreach($m as $in=>$data)
                          <li data-id="{{$data->id}}" class="menu-item"> <span class="menu-item-bar"><i class="fa fa-arrows"></i> @if(empty($data->name)) {{$data->title}} @else {{$data->name}} @endif <a href="#collapse{{$data->id}}" class="pull-right" data-toggle="collapse"><i class="caret"></i></a></span>
                            <div class="collapse" id="collapse{{$data->id}}">
                              <div class="input-box">
                                <form method="post" action="{{ route('update-menuitem',['id'=>$data->id]) }}">
                                  {{csrf_field()}}
                                  <div class="form-group">
                                    <label>Link Name</label>
                                    <input type="text" name="name" value="@if(empty($data->name)) {{$data->title}} @else {{$data->name}} @endif" class="form-control">
                                  </div>
                                  @if($data->type == 'custom')
                                    <div class="form-group">
                                      <label>URL</label>
                                      <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                                    </div>					
                                    <div class="form-group">
                                      <input type="checkbox" name="target" value="_blank" @if($data->target == '_blank') checked @endif> Open in a new tab
                                    </div>
                                  @endif
                                  <div class="form-group">
                                    <button class="btn btn-sm btn-primary">Save</button>
                                    <a href="{{ route('delete-menuitem',['id'=>$data->id,'key'=>$key,'in'=>$in]) }}" class="btn btn-sm btn-danger">Delete</a>
                                  </div>
                                </form>
                              </div>
                            </div>
                            <ul></ul>
                          </li>
                        @endforeach
                      @endforeach	
                    @endif	
                  </ul>
                </li>
              @endforeach
          @endif

@endif   <!-- end of ($desiredMenu != '') !-->




    @endif <!-- end of $desiredMenu == '') !-->
</div>
 

<div id="serialize_output">@if($desiredMenu){{$desiredMenu->content}}@endif</div>	

<script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{ asset('admin/assets/js/scripts.bundle.js')}}"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 
<script src="https://johnny.github.io/jquery-sortable/js/jquery-sortable.js"></script>

<script>
 

   var group = $("#menuitems").sortable({
  group: 'serialization',
  onDrop: function ($item, container, _super) {
    var data = group.sortable("serialize").get();	    
    var jsonString = JSON.stringify(data, null, ' ');
    $('#serialize_output').text(jsonString);
  	  _super($item, container);
  }
});

 
   </script>


</body>
</html>



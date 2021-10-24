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
    
    <h2><span>Menus</span></h2>
    <div class="content info-box">
        @if(count($menus) > 0)		
      Select a menu to edit: 		
      <form action="{{ route('manage-menus')}}" class="form-inline">
        <select name="id">
          @foreach($menus as $menu)
              @if($desiredMenu != '')
              <option value="{{$menu->id}}" @if($menu->id == $desiredMenu->id) selected @endif>{{$menu->title}}</option>
            @else
              <option value="{{$menu->id}}">{{$menu->title}}</option>
            @endif
          @endforeach
        </select>
        <button class="btn btn-sm btn-default btn-menu-select">Select</button>
      </form> 
      or
      @endif 
      <a href="{{ route('manage-menus',['id'=>'new'])}}">Create a new menu</a>.	
    </div>
    <------------------------------------------------------------------------------------------------------->
    
    <div class="row" id="main-row">	
        <div class="col-sm-3 cat-form @if(count($menus) == 0) disabled @endif">
            <h3><span>Add Menu Items</span></h3>			
      
     
            <div class="panel panel-default">
              {{-- <div class="panel-heading">
    <a data-toggle="collapse" href="#custom-links" role="button" 
    aria-expanded="false" aria-controls="collapseExample">
    Custom Links 
    </a>
    </div> --}}
              <div class="" id="custom-links">
                <div class="panel-body">						
                  <div class="item-list-body">
                    <div class="form-group">
                      <label>URL</label>
                      <input type="url" id="url" class="form-control" placeholder="https://">
                    </div>
                    <div class="form-group">
                      <label>Link Text</label>
                        <input type="text" id="linktext" class="form-control" placeholder="">
                      </div>
                    </div>	
                    <div class="item-list-footer">
                      <button type="button" class="pull-right btn btn-success btn-sm" id="add-custom-link">Add to Menu</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>		
    
    
    
            <div class="col-sm-9 cat-view">
            
                <h3><span>Menu Structure</span></h3>
                @if($desiredMenu == '')
                  <h4>Create New Menu</h4>
                  <form method="post" action="{{ route('create-menu')}}">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="col-sm-12">
                        <label>Name</label>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">							
                          <input type="text" name="title" class="form-control">
                        </div>
                      </div>
                      <div class="col-sm-6 text-right">
                        <button class="btn btn-sm btn-primary">Create Menu</button>
                      </div>
                    </div>
                  </form>
                  @else
                  <div id="menu-content">
                    <div id="result"></div>
                  <div style="min-height: 240px;">
                      <p>Select categories, pages or add custom links to menus.</p>
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
    
            @if($desiredMenu != '')
            <div class="form-group menulocation">
              <label><b>Menu Location</b></label>
              <p><label><input type="radio" name="location" value="1" @if($desiredMenu->location == 1) checked @endif> Header</label></p>
              <p><label><input type="radio" name="location" value="2" @if($desiredMenu->location == 2) checked @endif> Main Navigation</label></p>
            </div>									
            <div class="text-right">
              <button class="btn btn-sm btn-primary" id="saveMenu">Save Menu</button>
            </div>
            <p><a href="{{ route('delete-menu',['id'=>$desiredMenu->id]) }}">Delete Menu</a></p>
          @endif
    
    
                  @endif <!-- end of $desiredMenu == '') !-->
            </div>
                  
    </div>	
</div>
 

<div id="serialize_output">@if($desiredMenu){{$desiredMenu->content}}@endif</div>	

<script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{ asset('admin/assets/js/scripts.bundle.js')}}"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 
<script src="https://johnny.github.io/jquery-sortable/js/jquery-sortable.js"></script>

<script>
    $("#add-custom-link").click(function(){
   var menuid = {{ $desiredMenu->id }};
   
     var url = $('#url').val();
     var link = $('#linktext').val();
     if(url.length > 0 && link.length > 0){
       $.ajax({
         type:"POST",
         data: {menuid:menuid,url:url,link:link},
         url: "{{ route('add-custom-link')}}",				
         success:function(res){
           location.reload();
         }
       })
     }
   })    

   var group = $("#menuitems").sortable({
  group: 'serialization',
  onDrop: function ($item, container, _super) {
    var data = group.sortable("serialize").get();	    
    var jsonString = JSON.stringify(data, null, ' ');
    $('#serialize_output').text(jsonString);
  	  _super($item, container);
  }
});

   $('#saveMenu').click(function(){
       var menuid = {{ $desiredMenu->id }};
     var location = $('input[name="location"]:checked').val();
     var newText = $("#serialize_output").text();
     var data = JSON.parse($("#serialize_output").text());	
     $.ajax({
       type:"POST",
       data: {menuid:menuid,data:data,location:location},
       url: "{{ route('update-menu')}}",				
       success:function(res){
         window.location.reload();
       }
     })	
   })
   </script>


</body>
</html>



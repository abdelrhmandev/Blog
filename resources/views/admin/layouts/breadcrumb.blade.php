<div class="row page-titles">

<div class="col-md-5 col-8 align-self-center">

<h3 class="text-themecolor"><i class="fa fa-car" aria-hidden="true"></i> {{trans('site.site_name')}}</h3>



<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">{{trans('site.home')}}</a></li>

@if(Request::segment(4))

<li class="breadcrumb-item"><a href="#" title="{{ ucfirst(Request::segment(3))}}">{{ ucfirst(Request::segment(3))}}</a></li>
@else
<li class="breadcrumb-item active">{{ ucfirst(Request::segment(3))}}</li>
@endif
<li class="breadcrumb-item active">{{ ucfirst(Request::segment(4))}}</li>



</ol>

</div>

<div class="col-md-7 col-4 align-self-center">
<div class="d-flex m-t-10 justify-content-end">
<!--                 some data some data some data some data some data some data some data some data !-->
</div>
</div>
</div>

@extends('admin.layouts.app')
@section('title',trans('admin.dashboard'))
@section('content')

@once
    @push('styles')
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="{{asset('vendor/harimayco-menu/style.css')}}" rel="stylesheet">
    @endpush
@endonce

<div class="container" id="kt_content_container">
{!! Menu::render() !!}
</div>

@endsection

@once
    @push('scripts')
      {!! Menu::scripts() !!}
    @endpush
@endonce

 
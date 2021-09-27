@extends('frontend.layouts.app')

@section('title',$title)

@push('styles')
    
@endpush

@section('content')

    <!-- ##### Breadcumb Area Start ##### -->
    @include('frontend.include.breadcumb')
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    @include('frontend.pages.blog.section.blog-area')
    <!-- ##### Blog Area End ##### -->
@endsection

@push('scripts')
    
@endpush
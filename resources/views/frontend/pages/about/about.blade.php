@extends('frontend.layouts.app')

@section('title',$title)

@push('styles')
    
@endpush

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    @include('frontend.include.breadcumb')
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Advance Search Area Start ##### -->
    @include('frontend.include.search')
<!-- ##### Advance Search Area End ##### -->

<!-- ##### About Content Wrapper Start ##### -->
    @include('frontend.pages.about.section.about-content')
<!-- ##### About Content Wrapper End ##### -->

<!-- ##### Call To Action Area Start ##### -->
    @include('frontend.include.call-to-action')
<!-- ##### Call To Action Area End ##### -->

<!-- ##### Meet The Team Area Start ##### -->
    @include('frontend.pages.about.section.team')
<!-- ##### Meet The Team Area End ##### -->
@endsection

@push('scripts')
    
@endpush

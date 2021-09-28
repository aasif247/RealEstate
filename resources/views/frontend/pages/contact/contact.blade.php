@extends('frontend.layouts.app')

@section('title',$title)

@push('styles')
    
@endpush

@section('content')

    <!-- ##### Breadcumb Area Start ##### -->
    @include('frontend.include.breadcumb')
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Contact Info Start ##### -->
    @include('frontend.pages.contact.section.contact-info')
    <!-- ##### Contact Info End ##### -->

@endsection

@push('scripts')
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="asset/frontend/js/map-active.js"></script>
@endpush
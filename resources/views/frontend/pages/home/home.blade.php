@extends('frontend.layouts.app')

@section('title','home')

@push('styles')
    
@endpush

@section('content')
    @include('frontend.pages.home.section.slider')
    @include('frontend.include.search')
    @include('frontend.pages.home.section.featured-properties')
    @include('frontend.include.call-to-action')
    @include('frontend.pages.home.section.testimonials')
    @include('frontend.pages.home.section.editor')
@endsection

@push('scripts')
    
@endpush

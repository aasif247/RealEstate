@extends('frontend.layouts.app')

@section('title','home')

@push('styles')
    
@endpush

@section('content')
    @include('frontend.include.search')
    @include('frontend.pages.home.section.featured-properties')
    @include('frontend.pages.home.section.call-to-action')
    @include('frontend.pages.home.section.testimonials')
    @include('frontend.pages.home.section.editor')
@endsection

@push('scripts')
    
@endpush

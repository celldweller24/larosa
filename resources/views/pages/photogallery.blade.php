@extends('layouts.index')

@section('title', __('messages.photo_gallery.meta-title'))
@section('keywords', __('messages.photo_gallery.meta-keywords'))
@section('description', __('messages.photo_gallery.meta-description'))

@section('content')
    <div class="photo-gallery">
        <h1>{{ __('messages.photo_gallery.title') }}</h1>
        <h2>{{ __('messages.photo_gallery.description') }}</h2>

        <div class="grid img-list">
            <div class="row padding-bottom--sm">
                <a class="col col-4 p-1 mb-1" data-fancybox="salon" data-src="{{ url('images/photos/salon_1.jpg') }}">
                    <img src="{{ url('images/photos/salon_1.jpg') }}">
                </a>
                <a class="col col-4 col-4 p-1 mb-1" data-fancybox="salon" data-src="{{ url('images/photos/salon_2.jpg') }}">
                    <img src="{{ url('images/photos/salon_2.jpg') }}">
                </a>
                <a class="col col-4 col-4 p-1 mb-1" data-fancybox="salon" data-src="{{ url('images/photos/salon_3.jpg') }}">
                    <img src="{{ url('images/photos/salon_4.jpg') }}">
                </a>
            </div>
            <div class="row">
                <a class="col col-6 col-4 p-1 mb-1" data-fancybox="salon" data-src="{{ url('images/photos/salon_4.jpg') }}">
                    <img src="{{ url('images/photos/salon_4.jpg') }}">
                </a>
                <a class="col col-6 col-4 p-1 mb-1" data-fancybox="salon" data-src="{{ url('images/photos/salon_5.jpg') }}">
                    <img src="{{ url('images/photos/salon_5.jpg') }}">
                </a>
            </div>
        </div>
    </div>

    @include('components/gallery_view_block')
@endsection

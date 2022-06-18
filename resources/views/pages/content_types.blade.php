@extends('layouts.index')

@section('content')
    @include('components/plain_content')

    <div class="gallery-view-block">
        @foreach ($photos as $key => $photo)
            <div class="photo-wrapper {{ ($key === 0) ? 'active' : '' }}" data-id="{{ $photo['employee_id'] }}">
                @foreach ($photo['items']->all() as $index => $item)
                    @php
                        //$last = array_key_last($photo['items']->all());
                    @endphp
                    <div class="photo-item">
                        <a
                            class="{{ ($index === 0) ? 'main-photo' : '' }}"
                            data-fancybox="employee_{{ $item->employee_id }}"
                            data-src="{{ url('storage/images/photos/' . $item->file_path) }}"
                        >
                            <img src="{{ url('storage/images/photos/' . $item->file_path) }}" alt="{{ $item->file_path }}">
                        </a>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@stop

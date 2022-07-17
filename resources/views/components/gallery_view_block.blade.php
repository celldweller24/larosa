<div class="gallery-view-block desktop">
    @foreach ($photos as $key => $photo)
        <div class="photo-wrapper {{ ($key === 0) ? 'active' : '' }}" data-id="{{ $photo['employee_id'] }}">
            <h2>{{ $photo['employee_name'] }}</h2>
            @foreach ($photo['items']->all() as $index => $item)
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

<div class="gallery-view-block mobile" id="employee-accordion">
    @foreach ($photos as $key => $photo)
        <h2>{{ $photo['employee_name'] }}</h2>
        <div
            class="massause-item carousel slide"
            id="carouselIndicators-{{ $key }}"
            data-bs-ride="carousel"
        >
            <div class="carousel-indicators">
                @foreach ($photo['items']->all() as $index => $item)
                    <button
                        type="button"
                        data-bs-target="#carouselIndicators-{{ $key }}"
                        data-bs-slide-to="{{ $index }}"
                        class="{{ ($index === 0) ? 'active' : ''}}"
                        aria-current="true"
                        aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach ($photo['items']->all() as $index => $item)
                    <div class="carousel-item {{ ($index === 0) ? 'active' : ''}}">
                        <a
                            data-fancybox="massausee_{{ $item->employee_id }}"
                            data-src="{{ url('storage/images/photos/' . $item->file_path) }}"
                        >
                            <img
                                class="d-block"
                                src="{{ url('storage/images/photos/' . $item->file_path) }}"
                                alt="{{ $item->file_path }}"
                            >
                    </div>
                @endforeach
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselIndicators-{{ $key }}"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselIndicators-{{ $key }}"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    @endforeach
</div>

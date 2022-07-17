@section('title', $metaTitle)
@section('keywords', $metaKeywords)
@section('description', $metaDescription)

<div class="page-text">
    <h1>{!! $title !!}</h1>
    {!! $description !!}
    <p class="page-link">
        <a onclick="ga('send', 'event', 'button', 'click');" href="/contact">
            {!! $link !!}
        </a>
    </p>
</div>

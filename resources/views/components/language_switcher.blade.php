<div class="language-switcher">
    <span class="lang-title">{{ __('messages.header.language') }}:</span>
    @foreach($availableLocales as $localeName => $availableLocale)
        @php
            $langCode = ($availableLocale === 'en') ? 'us' : $availableLocale;
        @endphp

        @if($availableLocale === $currentLocale)
            <span class="flag-icon flag-icon-{{ $langCode }}"></span>
        @else
            <a href="language/{{ $availableLocale }}">
                <span class="flag-icon flag-icon-{{ $langCode }}"></span>
            </a>
        @endif
    @endforeach
</div>

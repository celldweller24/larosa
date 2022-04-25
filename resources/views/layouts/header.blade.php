<header>
    <div class="row common-resolution">
        <div class="col-sm-5 d-md-none">
            @include('components.mobile-menu')
        </div>

        <div class="col-sm-7 col-md-12">
            <div class="d-flex justify-content-end">
                @include('components.language_switcher')
            </div>

            <div class="d-flex justify-content-end">
                @include('components.messengers')
            </div>
        </div>

        <div class="d-flex justify-content-sm-start justify-content-md-end">
            @include('components.main_menu')
        </div>
    </div>

    <div class="tiny-resolution">
        <div class="row">
            @include('components.mobile-menu')
        </div>

        <div class="row justify-content-center">
            <div class="logo-tiny-resolution col-6">
                <a href="/">
                    <span class="logo">Masaze <strong>XX</strong></span>
                </a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-4">
                @include('components.language_switcher')
            </div>

            <div class="col-4">
                @include('components.messengers')
            </div>
        </div>

        <div class="d-flex justify-content-sm-start justify-content-md-end">
            @include('components.main_menu')
        </div>
    </div>
</header>



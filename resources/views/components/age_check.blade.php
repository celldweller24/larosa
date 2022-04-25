<div class="age-check-box is-show">
    <div>
        <h2>{{ __('messages.age_check.header') }}</h2>

        <p>{{ __('messages.age_check.availability') }}/p>

        <ol>
            <li>{{ __('messages.age_check.precondition-1') }}</li>
            <li>{{ __('messages.age_check.precondition-2') }}</li>
            <li>{{ __('messages.age_check.precondition-3') }}</li>
        </ol>

        <p>{{ __('messages.age_check.agreement') }}</p>
        <p>{{ __('messages.age_check.look-forward') }}</p>

        {{--<a id="yes" href="#todo" class="btn btn-primary">{{ __('messages.age_check.button-yes') }}</a>
        <a id="no" href="#todo" class="btn">{{ __('messages.age_check.button-no') }}</a>--}}

        <button type="button" class="btn btn-warning check-yes">{{ __('messages.age_check.button-yes') }}</button>
        <button type="button" class="btn btn-secondary check-no">{{ __('messages.age_check.button-no') }}</button>

    </div>
</div>

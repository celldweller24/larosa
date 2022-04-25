@extends('layouts.index')

@section('content')

    <div class="item-box d-flex common-resolution">
        <a href="/for-men" class="box col-sm-3">
            <div class="circle">
                <img src="{{ url('storage/images/men.png') }}" alt="Erotic massage Prague for man">
            </div>
            <span>{{ __('messages.for_men.box-title') }}</span>
        </a>

        <a href="/for-women" class="box col-sm-3">
            <div class="circle">
                <img src="{{ url('storage/images/women.png') }}" alt="Erotic massage Prague for women">
            </div>
            <span>{{ __('messages.for_woman.box-title') }}</span>
        </a>

        <a href="/for-couples" class="box col-sm-3">
            <div class="circle">
                <img src="{{ url('storage/images/pair.png') }}" alt="sexy massage Prague for couples">
            </div>
            <span>{{ __('messages.for_couple.box-title') }}</span>
        </a>

        <a href="/for-gays" class="box col-sm-3">
            <div class="circle">
                <img src="{{ url('storage/images/gay.png') }}" alt="Gay massage Prague for gay">
            </div>
            <span>{{ __('messages.for_gay.box-title') }}</span>
        </a>
    </div>

    <div class="item-box tiny-resolution">
        <div class="row">
            <a href="/for-men" class="box col-6">
                <div class="circle">
                    <img src="{{ url('storage/images/men.png') }}" alt="Erotic massage Prague for man">
                </div>
                <span>{{ __('messages.for_men.box-title') }}</span>
            </a>

            <a href="/for-women" class="box col-6">
                <div class="circle">
                    <img src="{{ url('storage/images/women.png') }}" alt="Erotic massage Prague for women">
                </div>
                <span>{{ __('messages.for_woman.box-title') }}</span>
            </a>
        </div>

        <div class="row">
            <a href="/for-couples" class="box col-6">
                <div class="circle">
                    <img src="{{ url('storage/images/pair.png') }}" alt="sexy massage Prague for couples">
                </div>
                <span>{{ __('messages.for_couple.box-title') }}</span>
            </a>

            <a href="/for-gays" class="box col-6">
                <div class="circle">
                    <img src="{{ url('storage/images/gay.png') }}" alt="Gay massage Prague for gay">
                </div>
                <span>{{ __('messages.for_gay.box-title') }}</span>
            </a>
        </div>
    </div>

    @include('components.plain_content')

@stop

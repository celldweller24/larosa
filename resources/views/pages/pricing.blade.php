@extends('layouts.index')

@section('title', __('messages.pricing.meta-title'))
@section('keywords', __('messages.pricing.meta-keywords'))
@section('description', __('messages.pricing.meta-description'))

@section('content')
    <div class="pricing">
        <h1>{{ __('messages.pricing.title') }}</h1>

        <table class="table">
            <tbody>
                <tr>
                    <th>{{ __('messages.pricing.erotic-massage') }}</th>
                    <td>60 {{ __('messages.pricing.min') }} – 1500 Kč (60€)</td>
                    <td>90 {{ __('messages.pricing.min') }} – 2000 Kč (80€)</td>
                </tr>
                <tr>
                    <th>{{ __('messages.pricing.tantra-massage') }}</th>
                    <td>90 {{ __('messages.pricing.min') }} – 2000 Kč (80€)</td>
                    <td></td>
                </tr>
                <tr>
                    <th>{{ __('messages.pricing.relaxating-massage') }}</th>
                    <td>60 {{ __('messages.pricing.min') }} – 1500 Kč (60€)</td>
                    <td>90 {{ __('messages.pricing.min') }} – 2000 Kč (80€)</td>
                </tr>
                <tr>
                    <th>{{ __('messages.pricing.hawaiian-massage') }}</th>
                    <td>60min – 1500 Kč (60€)</td>
                    <td></td>
                </tr>
                <tr>
                    <th>{{ __('messages.pricing.royal-vip-massage') }}</th>
                    <td>60 {{ __('messages.pricing.min') }} {{ __('messages.pricing.4-hands') }} – 6000 Kč (250€)</td>
                    <td></td>
                </tr>
                <tr>
                    <th>{{ __('messages.pricing.nuru-massage') }}</th>
                    <td>60 {{ __('messages.pricing.min') }} – 2000 Kč (80€)</td>
                    <td></td>
                </tr>
                <tr>
                    <th>{{ __('messages.pricing.swingers-massage') }}</th>
                    <td>60 {{ __('messages.pricing.min') }} – 2000 Kč (80€)</td>
                    <td></td>
                </tr>
                <tr>
                    <th>{{ __('messages.pricing.secret-massage') }}</th>
                    <td>60 {{ __('messages.pricing.min') }} – 2500 Kč (100€)</td>
                    <td></td>
                </tr>
                <tr>
                    <th>{{ __('messages.pricing.lingam-massage') }}</th>
                    <td>40 {{ __('messages.pricing.min') }} – 2000 Kč (80€)</td>
                    <td></td>
                </tr>
                <tr>
                    <th>{{ __('messages.pricing.escort-service') }}</th>
                    <td>60 {{ __('messages.pricing.min') }} – 2500 Kč (100€) {{ __('messages.pricing.including-taxi') }}</td>
                    <td></td>
                </tr>
                <tr>
                    <th>{{ __('messages.pricing.nuru-massage') }}</th>
                    <td>60 {{ __('messages.pricing.min') }} – 1600 Kč (65€)</td>
                    <td>Happy Hours 12.00-15.00 {{ __('messages.pricing.and') }} 21.00-23.00</td>
                </tr>
                <tr>
                    <th>{{ __('messages.pricing.nuru-massage-2') }}</th>
                    <td>60 {{ __('messages.pricing.min') }} – 3000 Kč (120€)</td>
                    <td>Happy Hours 12.00-15.00 {{ __('messages.pricing.and') }} 21.00-23.00</td>
                </tr>
                <tr>
                    <th>{{ __('messages.pricing.happy-ending-moments') }}</th>
                    <td>15 {{ __('messages.pricing.min') }} – 800 Kč (35€)</td>
                    <td>Happy Hours 12.00-15.00 {{ __('messages.pricing.and') }} 21.00-23.00 (600 Kč) (25€)</td>
                </tr>
            </tbody>
        </table>
    </div>
@stop

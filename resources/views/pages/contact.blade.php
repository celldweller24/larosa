@extends('layouts.index')

@section('title', __('messages.pricing.meta-title'))
@section('keywords', __('messages.pricing.meta-keywords'))
@section('description', __('messages.pricing.meta-description'))

@section('content')
    <div class="contact-page">
        <h1>{{  __('messages.contact.contact') }}</h1>

        <div class="contact-content row">
            <div class="map col-sm-12 col-xl-7">
                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.cz/maps?f=q&amp;source=s_q&amp;hl=cs&amp;geocode=&amp;q=praha,+rumunsk%C3%A1+4&amp;aq=&amp;sll=49.20207,16.57796&amp;sspn=0.274575,0.676346&amp;brcurrent=5,0,0&amp;ie=UTF8&amp;hq=&amp;hnear=Rumunsk%C3%A1+1818%2F4,+140+00+Praha+2-Nov%C3%A9+M%C4%9Bsto&amp;t=m&amp;ll=50.073502,14.42977&amp;spn=0.013772,0.084028&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
            </div>
            <div class="contact-box col-sm-12 col-xl-5">
                <span>
                    Rumunská 4<br>
                    Praha 2<br>
                    {{  __('messages.contact.way-from-metro') }}
                </span>

                <p>E-mail: <a href="mailto:glamour6633@gmail.com">glamour6633@gmail.com</a></p>

                <p>Mobile: <a href="tel:+420 608 900 316">+420 608 900 316</a></p>

                <p>
                    <a href="viber://contact?number=%2B420608900248">
                        <img src="{{ url('storage/images/viber.png') }}" alt="Viber" width="30" height="auto">
                    </a>
                    <a href="whatsapp://send?phone=+420608900248">
                        <img src="{{ url('storage/images/Whatsapp.png') }}" alt="Whatsapp" width="30" height="auto">
                    </a>
                </p>
            </div>
        </div>
    </div>
@stop


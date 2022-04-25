<?php

namespace App\Http\Controllers;

class TypePagesController extends Controller
{
    public function forMen()
    {
        return view('pages.content_types', [
            'title' => __('messages.for_men.title'),
            'description' => __('messages.for_men.description'),
            'link' => __('messages.for_men.link-text'),
            'metaTitle' => __('messages.for_men.meta-title'),
            'metaKeywords' => __('messages.for_men.meta-keywords'),
            'metaDescription' => __('messages.for_men.meta-description'),

        ]);
    }

    public function forWomen()
    {
        return view('pages.content_types', [
            'title' => __('messages.for_woman.title'),
            'description' => __('messages.for_woman.description'),
            'link' => __('messages.for_woman.link-text'),
            'metaTitle' => __('messages.for_woman.meta-title'),
            'metaKeywords' => __('messages.for_woman.meta-keywords'),
            'metaDescription' => __('messages.for_woman.meta-description'),
        ]);
    }

    public function forCouples()
    {
        return view('pages.content_types', [
            'title' => __('messages.for_couple.title'),
            'description' => __('messages.for_couple.description'),
            'link' => __('messages.for_couple.link-text'),
            'metaTitle' => __('messages.for_couple.meta-title'),
            'metaKeywords' => __('messages.for_couple.meta-keywords'),
            'metaDescription' => __('messages.for_couple.meta-description'),
        ]);
    }

    public function forGays()
    {
        return view('pages.content_types', [
            'title' => __('messages.for_gay.title'),
            'description' => __('messages.for_gay.description'),
            'link' => __('messages.for_gay.link-text'),
            'metaTitle' => __('messages.for_gay.meta-title'),
            'metaKeywords' => __('messages.for_gay.meta-keywords'),
            'metaDescription' => __('messages.for_gay.meta-description'),
        ]);
    }
}

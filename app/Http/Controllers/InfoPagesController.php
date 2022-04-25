<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * Controller for descriptive pages(sidebar menu) and Home page
 */
class InfoPagesController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'title' => __('messages.home.title'),
            'description' => __('messages.home.description'),
            'link' => __('messages.home.link-text'),
            'metaTitle' => __('messages.home.meta-title'),
            'metaKeywords' => __('messages.home.meta-keywords'),
            'metaDescription' => __('messages.home.meta-description'),
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function eroticMassage()
    {
        return view('pages.description_page', [
            'title' => __('messages.erotic_massage.title'),
            'description' => __('messages.erotic_massage.description'),
            'link' => __('messages.erotic_massage.link-text'),
            'metaTitle' => __('messages.erotic_massage.meta-title'),
            'metaKeywords' => __('messages.erotic_massage.meta-keywords'),
            'metaDescription' => __('messages.erotic_massage.meta-description'),
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function tantricMassage()
    {
        return view('pages.description_page', [
            'title' => __('messages.tantric_massage.title'),
            'description' => __('messages.tantric_massage.description'),
            'link' => __('messages.tantric_massage.link-text'),
            'metaTitle' => __('messages.tantric_massage.meta-title'),
            'metaKeywords' => __('messages.tantric_massage.meta-keywords'),
            'metaDescription' => __('messages.tantric_massage.meta-description'),
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function relaxatingMassage()
    {
        return view('pages.description_page', [
            'title' => __('messages.relaxating_massage.title'),
            'description' => __('messages.relaxating_massage.description'),
            'link' => __('messages.relaxating_massage.link-text'),
            'metaTitle' => __('messages.relaxating_massage.meta-title'),
            'metaKeywords' => __('messages.relaxating_massage.meta-keywords'),
            'metaDescription' => __('messages.relaxating_massage.meta-description'),
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function hawaiianMassage()
    {
        return view('pages.description_page', [
            'title' => __('messages.hawaiian_massage.title'),
            'description' => __('messages.hawaiian_massage.description'),
            'link' => __('messages.hawaiian_massage.link-text'),
            'metaTitle' => __('messages.hawaiian_massage.meta-title'),
            'metaKeywords' => __('messages.hawaiian_massage.meta-keywords'),
            'metaDescription' => __('messages.hawaiian_massage.meta-description'),
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function royalMassage()
    {
        return view('pages.description_page', [
            'title' => __('messages.royal_massage.title'),
            'description' => __('messages.royal_massage.description'),
            'link' => __('messages.royal_massage.link-text'),
            'metaTitle' => __('messages.royal_massage.meta-title'),
            'metaKeywords' => __('messages.royal_massage.meta-keywords'),
            'metaDescription' => __('messages.royal_massage.meta-description'),
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function nuruMassage()
    {
        return view('pages.description_page', [
            'title' => __('messages.nuru_massage.title'),
            'description' => __('messages.nuru_massage.description'),
            'link' => __('messages.nuru_massage.link-text'),
            'metaTitle' => __('messages.nuru_massage.meta-title'),
            'metaKeywords' => __('messages.nuru_massage.meta-keywords'),
            'metaDescription' => __('messages.nuru_massage.meta-description'),
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function escortService()
    {
        return view('pages.description_page', [
            'title' => __('messages.escort_service.title'),
            'description' => __('messages.escort_service.description'),
            'link' => __('messages.escort_service.link-text'),
            'metaTitle' => __('messages.escort_service.meta-title'),
            'metaKeywords' => __('messages.escort_service.meta-keywords'),
            'metaDescription' => __('messages.escort_service.meta-description'),
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function hotelService()
    {
        return view('pages.description_page', [
            'title' => __('messages.hotel_service.title'),
            'description' => __('messages.hotel_service.description'),
            'link' => __('messages.hotel_service.link-text'),
            'metaTitle' => __('messages.hotel_service.meta-title'),
            'metaKeywords' => __('messages.hotel_service.meta-keywords'),
            'metaDescription' => __('messages.hotel_service.meta-description'),
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function secretWish()
    {
        return view('pages.description_page', [
            'title' => __('messages.secret_wish.title'),
            'description' => __('messages.secret_wish.description'),
            'link' => __('messages.secret_wish.link-text'),
            'metaTitle' => __('messages.secret_wish.meta-title'),
            'metaKeywords' => __('messages.secret_wish.meta-keywords'),
            'metaDescription' => __('messages.secret_wish.meta-description'),
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function swingersMassage()
    {
        return view('pages.description_page', [
            'title' => __('messages.swingers_massage.title'),
            'description' => __('messages.swingers_massage.description'),
            'link' => __('messages.swingers_massage.link-text'),
            'metaTitle' => __('messages.swingers_massage.meta-title'),
            'metaKeywords' => __('messages.swingers_massage.meta-keywords'),
            'metaDescription' => __('messages.swingers_massage.meta-description'),
        ]);
    }
}

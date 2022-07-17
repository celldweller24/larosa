<?php

namespace App\Http\Controllers;

use App\Repositories\EmployeeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class GeneralPagesController extends Controller
{
    private $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function photoGallery()
    {
        $allCategoryEmployees = $this->employeeRepository->getAllEmployeesWIthPhoto();

        View::share('categoryEmployees', $allCategoryEmployees);

        $photos = $this->employeeRepository->getPhotosByCategorisedEmployee($allCategoryEmployees);

        return view('pages.photogallery', [
            'photos' => $photos,
            'metaTitle' => __('messages.photo_gallery.meta-title'),
            'metaKeywords' => __('messages.photo_gallery.meta-keywords'),
            'metaDescription' => __('messages.photo_gallery.meta-description'),
        ]);
    }

    public function pricing()
    {
        return view('pages.pricing', [
            'metaTitle' => __('messages.pricing.meta-title'),
            'metaKeywords' => __('messages.pricing.meta-keywords'),
            'metaDescription' => __('messages.pricing.meta-description'),
        ]);
    }

    public function contact()
    {
        return view('pages.contact', [
            'metaTitle' => __('messages.contact.meta-title'),
            'metaKeywords' => __('messages.contact.meta-keywords'),
            'metaDescription' => __('messages.contact.meta-description'),
        ]);
    }
}

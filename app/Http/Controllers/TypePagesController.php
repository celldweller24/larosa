<?php

namespace App\Http\Controllers;

use App\Models\CategoryEmployee;
use App\Models\Employee;
use App\Repositories\EmployeeRepository;
use Illuminate\Support\Facades\View;

class TypePagesController extends Controller
{
    public const CATEGORY_MEN = 1;

    public const CATEGORY_WOMEN = 2;

    public const CATEGORY_COUPLE = 3;

    public const CATEGORY_GAY = 4;

    private $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function forMen()
    {
        $categoryEmployeeMen = $this->employeeRepository->getEmployeesByCategory(self::CATEGORY_MEN);

        View::share('categoryEmployees', $categoryEmployeeMen);

        $photos = $this->employeeRepository->getPhotosByCategorisedEmployee($categoryEmployeeMen);

        return view('pages.content_types', [
            'photos' => $photos,
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
        $categoryEmployeeWomen = $this->employeeRepository->getEmployeesByCategory(self::CATEGORY_WOMEN);

        View::share('categoryEmployees', $categoryEmployeeWomen);

        $photos = $this->employeeRepository->getPhotosByCategorisedEmployee($categoryEmployeeWomen);

        return view('pages.content_types', [
            'photos' => $photos,
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
        $categoryEmployeeCouple = $this->employeeRepository->getEmployeesByCategory(self::CATEGORY_COUPLE);

        View::share('categoryEmployees', $categoryEmployeeCouple);

        $photos = $this->employeeRepository->getPhotosByCategorisedEmployee($categoryEmployeeCouple);

        return view('pages.content_types', [
            'photos' => $photos,
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
        $categoryEmployeeGay = $this->employeeRepository->getEmployeesByCategory(self::CATEGORY_GAY);

        View::share('categoryEmployees', $categoryEmployeeGay);

        $photos = $this->employeeRepository->getPhotosByCategorisedEmployee($categoryEmployeeGay);

        return view('pages.content_types', [
            'photos' => $photos,
            'title' => __('messages.for_gay.title'),
            'description' => __('messages.for_gay.description'),
            'link' => __('messages.for_gay.link-text'),
            'metaTitle' => __('messages.for_gay.meta-title'),
            'metaKeywords' => __('messages.for_gay.meta-keywords'),
            'metaDescription' => __('messages.for_gay.meta-description'),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home ()
{
    return view('index');
}

public function aboutPage ()
{
    return view('home.about-page');
}

public function resumePage ()
{
    return view('home.resume-page');
}

public function portfolioPage ()
{
    return view('home.portfolio-page');
}

public function servicesPage ()
{
    return view('home.services-page');
}

public function contactPage ()
{
    return view('home.contact-page');
}

public function serviceDetails ()
{
    return view('home.service-details');
}


}

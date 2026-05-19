<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function faqs()
    {
        return view('faqs');
    }
}

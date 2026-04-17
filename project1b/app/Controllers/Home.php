<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        $config = config('MySite');
        echo "Welcome to {$config->siteName}. Send feedback to {$config->siteEmail}";
    }
}

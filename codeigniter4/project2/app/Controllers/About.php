<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        return view('v_about'); # Mengarahkan ke view v_about.php
    }
}

<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('v_portfolio'); # Mengarahkan ke view v_portfolio.php
    }
}

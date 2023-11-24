<?php

namespace App\Controllers;

class AboutMe extends BaseController
{
    public function index()
    {
    	echo view('navbar');
        echo view('about_me');
    }
}

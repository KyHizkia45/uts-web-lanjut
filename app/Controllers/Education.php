<?php

namespace App\Controllers;

class Education extends BaseController
{
    public function index()
    {
    	echo view('navbar');
        echo view('education');
    }
}

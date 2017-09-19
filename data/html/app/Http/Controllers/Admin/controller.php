<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as DefaultController;

class controller extends DefaultController{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
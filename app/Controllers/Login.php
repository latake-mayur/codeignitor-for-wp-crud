<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        // Login Page
        return view("wp/login_view");
        // echo '<h1>Mayura The manifester</h1>';
    }
}

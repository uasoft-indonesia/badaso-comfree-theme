<?php

namespace Uasoft\Badaso\Theme\ComfreeTheme\Controllers;

use Exception;
use Illuminate\Http\Request;

use Uasoft\Badaso\Theme\ComfreeTheme\Helpers\Configurations;

class HomeController extends Controller
{
    public function index(){


        return view('comfree-theme::pages.landing-page');
    }


}

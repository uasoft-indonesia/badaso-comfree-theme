<?php

namespace Uasoft\Badaso\Theme\ComfreeTheme\Controllers;

use Exception;
use Illuminate\Http\Request;

use Uasoft\Badaso\Theme\ComfreeTheme\Helpers\Configurations;

class DetailController extends Controller
{
    public function index()
    {
        return view('comfree-theme::pages.detail-page');
    }
}

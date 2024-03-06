<?php

namespace Uasoft\Badaso\Theme\ComfreeTheme\Controllers;

use Exception;
use Illuminate\Http\Request;

use Uasoft\Badaso\Theme\ComfreeTheme\Helpers\Configurations;
use Uasoft\Badaso\Module\Commerce\Models\Product;

class HomeController extends Controller
{
    public function index(){

        $product = Product::with(['productDetails.discount', 'productCategory'])->get();
        $item_product = json_decode($product);

        $config = Configurations::index();
        $sitetitle = $config->siteTitle;

        return view('comfree-theme::pages.landing-page', compact(['item_product','sitetitle']));
    }


}

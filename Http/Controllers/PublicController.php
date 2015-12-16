<?php

namespace Modules\Dashboard\Http\Controllers;

use Modules\Core\Http\Controllers\PublicBaseController;
use Modules\Setting\Facades\Settings;

class PublicController extends PublicBaseController
{

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        dd(Settings::get('dashboard::use-static-landingpage'));
        if(Settings::get('dashboard::use-static-landingpage'))
        {
            return view('home');
        };

    }
}

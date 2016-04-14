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
        switch (Settings::get('dashboard::landingpage-type')) {
            case 'dynamic':
                return view('dynamic-landing');
            case 'static':
                return view('static-landing');
            case 'url':
                return redirect(Settings::get('dashboard::landingpage-url'));
        }

        return view('static-landing');
    }
}

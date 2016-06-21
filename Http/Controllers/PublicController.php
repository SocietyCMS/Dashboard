<?php

namespace Modules\Dashboard\Http\Controllers;

use Modules\Core\Http\Controllers\PublicBaseController;
use Modules\Core\Repositories\Eloquent\ActivityRepository;
use Modules\Setting\Facades\Settings;

class PublicController extends PublicBaseController
{
    /**
     * @var ActivityRepository
     */
    protected $activityRepository;

    /**
     * DashboardController constructor.
     * @param ActivityRepository $activityRepository
     */
    public function __construct(ActivityRepository $activityRepository)
    {
        $this->activityRepository = $activityRepository;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }
}

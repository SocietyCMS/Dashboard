<?php

namespace Modules\Dashboard\Http\Controllers\backend;

use Modules\Core\Http\Controllers\AdminBaseController;
use Modules\User\Repositories\Eloquent\ActivityRepository;

/**
 * Class DashboardController.
 */
class DashboardController extends AdminBaseController
{
    /**
     * @var ActivityRepository
     */
    protected $activityRepository;

    /**
     * DashboardController constructor.
     */
    public function __construct(ActivityRepository $activityRepository)
    {
        $this->activityRepository = $activityRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $activities = $this->activityRepository->latestGroupedByDate();

        return view('dashboard::backend.dashboard', compact('activities'));
    }
}

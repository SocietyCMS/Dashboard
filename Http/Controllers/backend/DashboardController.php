<?php namespace Modules\Dashboard\Http\Controllers\backend;

use Carbon\Carbon;
use Modules\User\Repositories\Eloquent\ActivityRepository;
use Pingpong\Modules\Routing\Controller;

/**
 * Class DashboardController
 * @package Modules\Dashboard\Http\Controllers\backend
 */
class DashboardController extends Controller {


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
		$groupedActivities = $this->activityRepository->latestGroupedByDate();
		return view('dashboard::backend.dashboard', compact('groupedActivities'));
	}
	
}
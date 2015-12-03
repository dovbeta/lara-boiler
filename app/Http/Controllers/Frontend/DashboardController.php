<?php namespace App\Http\Controllers\Frontend;

use App\Flat;
use App\Http\Controllers\Controller;

/**
 * Class DashboardController
 * @package App\Http\Controllers\Frontend
 */
class DashboardController extends Controller {

	/**
	 * @return mixed
	 */
	public function index()
	{
        $user = auth()->user();
        $flat = Flat::find($user->flat_id);
		return view('frontend.user.dashboard', compact('flat'))
			->withUser($user);
	}
}
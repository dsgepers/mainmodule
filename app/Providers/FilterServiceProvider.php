<?php namespace Exenzo\Providers;

use Illuminate\Routing\FilterServiceProvider as ServiceProvider;

class FilterServiceProvider extends ServiceProvider {

	/**
	 * The filters that should run before all requests.
	 *
	 * @var array
	 */
	protected $before = [
		'Exenzo\Http\Filters\MaintenanceFilter',
	];

	/**
	 * The filters that should run after all requests.
	 *
	 * @var array
	 */
	protected $after = [
		//
	];

	/**
	 * All available route filters.
	 *
	 * @var array
	 */
	protected $filters = [
		'auth' => 'Exenzo\Http\Filters\AuthFilter',
		'auth.basic' => 'Exenzo\Http\Filters\BasicAuthFilter',
		'csrf' => 'Exenzo\Http\Filters\CsrfFilter',
		'guest' => 'Exenzo\Http\Filters\GuestFilter',
	];

}
<?php
namespace App\Providers;
use App\Present;
use Illuminate\Support\ServiceProvider;
class PresentClassname extends ServiceProvider
{
	public function boot()
	{
	view()->composer('*', function($view){
	$view->with('category', Present::all());
	});
	}
}
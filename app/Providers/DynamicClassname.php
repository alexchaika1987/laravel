<?php
namespace App\Providers;
use App\Gift;
use Illuminate\Support\ServiceProvider;
class DynamicClassname extends ServiceProvider
{
	public function boot()
	{
	view()->composer('*', function($view){
	$view->with('category', Gift::all());
	});
	}
}
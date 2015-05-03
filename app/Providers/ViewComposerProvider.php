<?php namespace App\Providers;

use App\Banner;
use App\Category;
use App\Post;
use App\Question;
use App\Setting;
use App\Video;
use Illuminate\Support\ServiceProvider;

class ViewComposerProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{

        view()->composer('frontend.right', function ($view) {
            $view->with([
                'hotPosts'=> Post::where('status', true)->where('hot', true)->latest()->limit(5)->get(),
                'reasonPosts'=> Post::where('status', true)->where('reason', true)->latest()->limit(6)->get(),
                'settings' => Setting::lists('value', 'name')
            ]);
        });


        view()->composer('frontend.box_office', function ($view) {
            $view->with('questions', Question::latest()->limit(10)->get());

        });

        view()->composer('frontend.box_event', function ($view) {
            $view->with('events', Post::where('status', true)->where('type', 'su-kien-nhan-hang')->latest()->limit(3)->get());

        });

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}

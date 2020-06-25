<?php


namespace App\Http\ViewComposers\Front;


use Illuminate\View\View;
use App\Http\Daos\SliderDao;
use App\Http\Daos\PostsDao;
use App\Http\Daos\DepartureDao;
use App\Http\Daos\TripDao;
use App\Http\Daos\ActivityDao;

class HomePageViewComposer
{
    public function __construct()
    {
//        $this->sliderDao = $sliderDao;
//        $this->departureDao = $departureDao;
//        $this->postDao = $postDao;
//        $this->tripDao = $tripDao;
//        $this->activityDao = $activityDao;
    }

    public function compose(View $view)
    {
//        $view->with('sliders', $this->sliderDao->getByOrder('order', 'ASC'));
//        $view->with('top_departures', $this->departureDao->getByCondWithOrder(['featured' => 1], 'order', 'ASC', true));
//        $view->with('featured_posts', $this->postDao->getFeatured());
//        $view->with('featured_trips', $this->tripDao->getByCondWithLimit(['featured' => 1], 'order', 'ASC', 6, true));
//        $view->with('featured_activity', $this->activityDao->getFeaturedByDestination('nepal'));
    }
}

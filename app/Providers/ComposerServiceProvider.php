<?php


namespace App\Providers;


use App\Http\ViewComposers\Front\HomePageViewComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('front::homepage',HomePageViewComposer::class);
//        View::composer('voyager::reviews.edit-add',ReviewViewComposer::class);
//        View::composer('voyager::trips.edit-add',TripViewComposer::class);
//        View::composer('voyager::gallery.edit-add',GalleryViewComposer::class);
//        View::composer('voyager::itinerary.edit-add',ItineraryViewComposer::class);
//        View::composer('voyager::departures.edit-add',DepartureViewComposer::class);
//        View::composer('front::pages.about-us',AboutUsViewComposer::class);
//        View::composer('front::layouts.nav',NavViewComposer::class);
//        View::composer('front::pages.blog',BlogViewComposer::class);
//        View::composer('front::pages.general',GeneralViewComposer::class);
//        View::composer('front::search',SearchViewComposer::class);
//        View::composer('front::layouts.master',MasterViewComposer::class);
//        View::composer('front::pages.nepal-hotel-reservation',HotelViewComposer::class);
//        View::composer('front::pages.nepal-vehicle-rental',VehicleViewComposer::class);
//        View::composer('front::pages.nepal-flight-ticketing',FlightViewComposer::class);
//        View::composer('front::pages.legal-document',LegalPageViewComposer::class);
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

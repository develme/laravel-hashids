<?php
/**
 * Created by PhpStorm.
 * User: verronknowles
 * Date: 3/9/19
 * Time: 12:06 PM
 */

namespace DevelMe\Hashids\Providers;

use Hashids\Hashids;
use Illuminate\Support\ServiceProvider;

/**
 * Class HashidsServiceProvider
 * @package DevelMe\Hashids\Providers
 */
class HashidsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/route_hashing.php', 'route_hashing'
        );
        $this->app->bind(Hashids::class, function () {
            return new Hashids(config('route_hashing.hash_key'), config('route_hashing.hash_length'));
        });
    }
}
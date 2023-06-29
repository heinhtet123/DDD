<?php 
declare(strict_types=1);

namespace Laracon\Order\Providers;

use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider
{
      /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes.php');

    }
    
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
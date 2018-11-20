<?php

namespace Akill\Apriori;

use Illuminate\Support\ServiceProvider;

class AprioriServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // $this->publishes([
        //     __DIR__.'/../config/payment.php' => app()->basePath().'/config/payment.php',
        // ], 'config');
    }

    public function register()
    {
        $this->app->bind(
            'Akill\Apriori\Association\Apriori',
            'Akill\Apriori\Association\Associator',
            'Akill\Apriori\Helpers\Predictable',
            'Akill\Apriori\Helpers\Trainable',
            'Akill\Apriori\Estimator'
        );
    }
}
<?php

namespace CoinPayments\Providers;


use Plenty\Plugin\ServiceProvider;

class CoinPaymentServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {
        $this->getApplication()->register(CoinPaymentRouteServiceProvider::class);
    }
}

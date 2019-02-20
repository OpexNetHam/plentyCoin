<?php

namespace CoinPayments\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class CoinPaymentRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('CoinPayments','CoinPayments\Controllers\ContentController@index');
    }
}
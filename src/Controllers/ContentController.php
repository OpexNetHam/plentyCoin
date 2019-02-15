<?php

namespace CoinPayments\Controllers;


use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function index(Twig $twig):string
    {
        return $twig->render('coinPayments::TEMPLATE');
    }
}

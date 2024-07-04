<?php

namespace App\Core;

use Nette\Application\IRouter;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;

final class RouterFactory
{
    public static function createRouter(): IRouter
    {
        $router = new RouteList();

        
        $router[] = new Route('<presenter>/<action>[/<id>]', 'Home:default');
        $router[] = new Route('about', 'About:about');
        $router[] = new Route('contact', 'Contact:contact');

        return $router;
    }
}

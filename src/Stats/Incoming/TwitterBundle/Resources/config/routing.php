<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('stats_incoming_twitter_homepage', new Route('/hello/{name}', array(
    '_controller' => 'StatsIncomingTwitterBundle:Default:index',
)));

return $collection;

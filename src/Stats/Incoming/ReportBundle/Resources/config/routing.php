<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('stats_incoming_report_homepage', new Route('/hello/{name}', array(
    '_controller' => 'StatsIncomingReportBundle:Default:index',
)));

return $collection;

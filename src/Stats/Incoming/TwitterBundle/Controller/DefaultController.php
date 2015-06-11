<?php

namespace Stats\Incoming\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('StatsIncomingTwitterBundle:Default:index.html.twig', array('name' => $name));
    }
}

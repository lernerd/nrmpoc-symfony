<?php

namespace Stats\Incoming\FacebookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('StatsIncomingFacebookBundle:Default:index.html.twig', array('name' => $name));
    }
}

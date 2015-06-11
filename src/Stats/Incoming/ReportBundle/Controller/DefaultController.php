<?php

namespace Stats\Incoming\ReportBundle\Controller;

use Stats\Incoming\ReportBundle\Entity\Report;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('StatsIncomingReportBundle:Default:index.html.twig', array('name' => $name));
    }

    public function statsAction() 
    {
    	$res = $this->getDoctrine()
            ->getRepository('Stats\Incoming\ReportBundle\Entity\Report')
            ->createQueryBuilder('e')
            ->select('e')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        return new Response(json_encode($res));
    }
}

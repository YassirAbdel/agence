<?php

namespace OC\AgencyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@OCAgency/Default/index.html.twig');
    }
}

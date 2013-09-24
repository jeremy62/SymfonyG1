<?php

namespace JB\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JBGSBBundle:Default:index.html.twig');
    }
}

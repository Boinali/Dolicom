<?php

namespace DC\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DCTestBundle:Default:index.html.twig');
    }
}

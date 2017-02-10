<?php

namespace DC\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
      $content = $this->get('templating')->render('DCTestBundle:Advert:index.html.twig');
      return new Response($content);
    }
}

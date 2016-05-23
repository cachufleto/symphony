<?php

namespace Pharma\PrixBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PharmaPrixBundle:Default:index.html.twig');
    }
}

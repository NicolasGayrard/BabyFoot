<?php

namespace Admin\BabyFootBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminBabyFootBundle:Default:index.html.twig');
    }
}

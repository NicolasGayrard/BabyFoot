<?php

namespace Admin\BabyFootBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Vous n\'êtes pas loggé.');
        return $this->render('AdminBabyFootBundle:Default:index.html.twig');
    }
}

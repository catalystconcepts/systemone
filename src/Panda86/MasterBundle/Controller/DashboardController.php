<?php

namespace Panda86\MasterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        $name = 'World';
        return $this->render('Panda86MasterBundle:Default:index.html.twig', array('name' => $name));
    }
}

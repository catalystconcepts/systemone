<?php

namespace Panda86\MasterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('Panda86MasterBundle:Dashboard:index.html.twig');
    }

    public function clientAction()
    {
        return $this->render('Panda86MasterBundle:Client:index.html.twig');
    }

    public function reportsAction()
    {
        return $this->render('Panda86MasterBundle:Reports:index.html.twig');
    }

    public function annualAction()
    {
        return $this->render('Panda86MasterBundle:Reports:annual.html.twig');
    }

    public function quarterAction()
    {
        return $this->render('Panda86MasterBundle:Reports:quarterly.html.twig');
    }

    public function invoicesAction()
    {
        return $this->render('Panda86MasterBundle:Invoices:index.html.twig');
    }

}

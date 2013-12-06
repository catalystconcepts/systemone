<?php

namespace Panda86\MasterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('login-master.html.twig');
    }

    public function dashboardAction()
    {
        return $this->render('Panda86MasterBundle:dashboard:index.html.twig');
    }

    public function clientAction()
    {
        return $this->render('Panda86MasterBundle:client:index.html.twig');
    }

    public function reportsAction()
    {
        return $this->render('Panda86MasterBundle:reports:index.html.twig');
    }

    public function annualAction()
    {
        return $this->render('Panda86MasterBundle:reports:annual.html.twig');
    }

    public function quarterAction()
    {
        return $this->render('Panda86MasterBundle:reports:quarterly.html.twig');
    }

    public function invoicesAction()
    {
        return $this->render('Panda86MasterBundle:invoices:index.html.twig');
    }

}

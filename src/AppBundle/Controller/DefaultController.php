<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/comptes_rendus", name="comptes rendus")
     */
    public function comptesRendusAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/comptes_rendus.html.twig', []);
    }

    /**
     * @Route("/pmp", name="plan management")
     */
    public function planManagementAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/pmp.html.twig', []);
    }

    /**
     * @Route("/presentation", name="presentation")
     */
    public function presentationAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/presentation.html.twig', []);
    }
}

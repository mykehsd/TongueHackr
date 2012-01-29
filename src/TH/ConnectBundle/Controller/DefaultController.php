<?php

namespace TH\ConnectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        if (true === $this->get('security.context')->isGranted('ROLE_FACEBOOK'))
            return $this->redirect($this->generateUrl('THConnectBundle_loadstream'));

        return $this->render('THConnectBundle:Default:index.html.twig');
    }

    public function topbarAction()
    {
        $interests = $this->getDoctrine()
            ->getRepository('THConnectBundle:Interest')
            ->findAll();
        return $this->render('THConnectBundle:Default:topbar.html.twig', array('interests' => $interests));
    }
}

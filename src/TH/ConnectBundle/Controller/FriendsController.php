<?php

namespace TH\ConnectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TH\ConnectBundle\Entity\StreamRepository;
use TH\ConnectBundle\Entity\Stream;

class FriendsController extends Controller
{
    
    /**
     * Display all users
     *
     */
    public function indexAction()
    {
        $users = $this->getDoctrine()
            ->getRepository('THConnectBundle:User')
            ->findAll();

        return $this->render('THConnectBundle:Friends:index.html.twig', array('users' => $users));
    }
}

<?php

namespace TH\ConnectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TH\ConnectBundle\Entity\StreamRepository;
use TH\ConnectBundle\Entity\Stream;
use TH\ConnectBundle\Entity\Comment;

class UserController extends Controller
{
    
    /**
     * Randomly display a stream item
     *
     */
    public function randomAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $stream = $em->getRepository('THConnectBundle:Stream')
            ->getRandom();

        return $this->redirect ($this->generateUrl('THConnectBundle_item', array('slug' => $stream->getId())));
    }

    /**
     * Load the currently logged in user's wall data.
     */
    public function loadstreamAction()
    {
        try {
            $facebook = $this->container->get('fos_facebook.api');
            //$home = $facebook->api('/me/home');
            $feed = array();
            
            // Fix ME
            // The intention is to load 120 items, however you can't seem to pull more then 25
            foreach (array(0, 30, 60, 90) as $offset) {
                $response = $facebook->api('/me/feed', array('limit' => 30, 'offset' => $offset));
                $feed = array_merge ($feed, $response['data']);
            }
        } catch (FacebookApiException $e) {
            $facebook->clearAllPersistentData();
            return $this->redirect( $this->generateUrl('_security_logout'));
        }

        $count = 0;
        $em = $this->getDoctrine()->getEntityManager();

        foreach ($feed as $item) 
        {
            // Lets see if we alrady have it loaded
            if ($this->getDoctrine()->getEntityManager()->getRepository('THConnectBundle:Stream')->find($item['id']))
                continue;

            // Lets create the new entity
            $stream = new Stream();
            $stream->setId ( $item['id'] );
            $stream->setMessage( isset($item['message']) ? $item['message'] : '' );
            $stream->setLink ( isset($item['link']) ? $item['link'] : '' );
            $stream->setName ( isset($item['name']) ? $item['name'] : '' );
            $stream->setIcon ( isset($item['icon']) ? $item['icon'] : '' );
            $stream->setType ( $item['type'] );
            $stream->setUser ( $this->container->get('security.context')->getToken()->getUser());
            $stream->setCreatedTime( new \DateTime());
            
            $em->persist($stream);

            $count++;
        }
        $em->flush(); 

        $this->get('session')->setFlash('notice', "You have $count new items from your feed");

        return $this->redirect($this->generateUrl('THConnectBundle_profile'));
    }

    /**
     * Display the current users stream items
     */
    public function profileAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $streams = $em->getRepository('THConnectBundle:Stream')
            ->getAll();

        $form = $this->createFormBuilder( $this->container->get('security.context')->getToken()->getUser() )
            ->add('native_language', 'entity', array(
                'class' => 'THConnectBundle:Language',
                'property' => 'name',
            ))
            ->add('learning_language', 'entity', array(
                'class' => 'THConnectBundle:Language',
                'property' => 'name',
            ))
            ->add('interests', 'entity', array(
                'class' => 'TH\ConnectBundle\Entity\Interest', 
                'property' => 'name',
                'multiple' => 'true',
            ))
            ->getForm();

        return $this->render('THConnectBundle:User:profile.html.twig', array('streams' => $streams, 'form' => $form->createView() ));
    }

    /**
     * Display a stream item
     */
    public function itemAction($slug)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $stream = $em->getRepository('THConnectBundle:Stream')
            ->find($slug);

        return $this->render('THConnectBundle:User:item.html.twig', array('stream' => $stream));
    }

    /**
     * Render the stream item comments block
     */
    public function streamCommentsAction($slug)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $stream = $em->getRepository('THConnectBundle:Stream')
            ->find($slug);

        return $this->render('THConnectBundle:User:streamComments.html.twig', array('stream' => $stream));
    }

    /** 
     * Add a comment to the stream
     */
    public function streamCommentsNewAction()
    {
        $request = $this->get('request');

        $stream = $this->getDoctrine()
            ->getRepository('THConnectBundle:Stream')
            ->find ($request->request->get('id'));

        $comment = new Comment;
        $comment->setStream($stream);
        $comment->setBody ($request->request->get('comment'));
        $comment->setUser ($this->container->get('security.context')->getToken()->getUser());
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($comment);
        $em->flush();

        return $this->redirect ($this->generateUrl('THConnectBundle_item', array('slug' => $stream->getId())));

    }

    /**
     * Like an item.  
     */
    public function likeAction($slug)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $stream = $em->getRepository('THConnectBundle:Stream')
            ->find($slug);

        return $this->redirect($this->generateUrl('THConnectBundle_random'));
    }

    /** 
     * Don't like an item 
     */
    public function notlikeAction($slug)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $stream = $em->getRepository('THConnectBundle:Stream')
            ->find($slug);

        return $this->redirect($this->generateUrl('THConnectBundle_random'));
    }


    /**
     * Update profile details
     */
    public function profileUpdateAction()
    {
        $request = $this->get('request');

        if ($request->getMethod() == 'POST')
        {
            $user = $this->container->get('security.context')->getToken()->getUser();

            $em = $this->getDoctrine()->getEntityManager();

            $data = $request->request->get('form');

            if (isset($data['interests']))
            {
                foreach ($data['interests'] as $id)
                {
                    $interest = $em->getRepository('THConnectBundle:Interest')
                        ->find( $id );
                    if ($interest)
                    {
                        $user->addInterest($interest);
                    }
                }
            }

            // Setup language
            if (isset($data['learning_language']))
            {
                $language = $em->getRepository('THConnectBundle:Language')
                    ->find( $data['learning_language']);
                if ($language)
                {
                    $user->setLearningLanguage($language);
                }
            }
            if (isset($data['native_language']))
            {
                $language = $em->getRepository('THConnectBundle:Language')
                    ->find( $data['native_language']);
                if ($language)
                {
                    $user->setNativeLanguage($language);
                }
            }

            $em->persist($user);
            $em->flush();
        }

        return $this->redirect ($this->generateUrl('THConnectBundle_profile'));
    }

}

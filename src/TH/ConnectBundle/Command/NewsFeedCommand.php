<?php

//namespace Symfony\Bundle\FrameworkBundle\Command;
namespace TH\ConnectBundle\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Output\Output;
use Symfony\Component\Finder\Finder;
use Symfony\Component\DomCrawler\Crawler;


use TH\ConnectBundle\Entity\Stream;
use TH\ConnectBundle\Entity\User;

class NewsFeedCommand extends ContainerAwareCommand
{
    private $feeds = array(
        'german' => 'http://news.google.com/news?cf=all&ned=de&hl=de&output=rss',
        'english' => 'http://news.google.com/news?pz=1&cf=all&ned=us&hl=en&output=rss',
        'spanish' => 'http://news.google.com/news?cf=all&ned=es_mx&hl=es&output=rss',
    );

    protected function configure()
    {
        parent::configure();

        $this
                ->setName('th:importnews');

        ;
    }

    /**
     * Executes the current command.
     *
     * @param InputInterface  $input  An InputInterface instance
     * @param OutputInterface $output An OutputInterface instance
     *
     * @return integer 0 if everything went fine, or an error code
     *
     * @throws \LogicException When this abstract class is not implemented
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $options = $input->getOptions();

        $em = $this->getContainer()->get('doctrine')->getEntityManager();
        $userRepo = $em
            ->getRepository('THConnectBundle:User');

        $streamRepo = $em
             ->getRepository('THConnectBundle:Stream');

        foreach ($this->feeds as $lang => $url) 
        {
            // Load the user
            $user = $userRepo->findOneBy( array('username' => 'google_' . $lang));
            if (!$user)
            {
                print "Could not load user for $lang\n";
                continue;
            }

            $xml = simplexml_load_file($url);
            foreach ($xml->channel->item as $article)
            {
                if (! $streamRepo->findOneByLink( (string) $article->link ))
                {
                    $item = new Stream();
                    $item->setId ( md5( $article->link ) );
                    $item->setUser ($user);
                    $item->setLink ( (string) $article->link);
                    $item->setName( (string) $article->title);
                    $item->setMessage( (string) $article->description);
                    $item->setActive('1');
                    $item->setType('link');
                    $item->setCreatedTime ( new \DateTime );

                    $em->persist($item);
                    $em->flush();
                }
            }


        }
    }
}

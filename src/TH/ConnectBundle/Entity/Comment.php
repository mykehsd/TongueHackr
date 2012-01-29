<?php

namespace TH\ConnectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TH\ConnectBundle\Entity\Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $body
     *
     * @ORM\Column(name="body", type="string", length=255)
     */
    private $body;

    /**
     * @var integer $user
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @var integer $stream
     *
     * @ORM\ManyToOne(targetEntity="Stream")
     * @ORM\JoinColumn(name="stream_id", referencedColumnName="id")
     */
    protected $stream;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set body
     *
     * @param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }


    public function setStream ($stream = null)
    {
        $this->stream = $stream;
    }

    public function setUser ($user = null)
    {
        $this->user = $user;
    }

    public function getUser ()
    {
        return $this->user ;
    }

}

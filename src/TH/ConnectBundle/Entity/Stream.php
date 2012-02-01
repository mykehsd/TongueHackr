<?php

namespace TH\ConnectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * TH\ConnectBundle\Entity\Stream
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TH\ConnectBundle\Entity\StreamRepository")
 */
class Stream
{
    /**
     * @var integer $id
     *
     * @ORM\Id @ORM\Column(name="id", type="string", length=255)
     */
    private $id;

    /**
     * @var integer $user
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /** 
     * @var boolean $active
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @var string $message
     *
     * @ORM\Column(name="message", type="string", length=255)
     */
    private $message;

    /**
     * @var string $link
     *
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $icon
     *
     * @ORM\Column(name="icon", type="string", length=255, nullable=true)
     */
    private $icon;

    /**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var datetime $created_time
     *
     * @ORM\Column(name="created_time", type="datetime")
     */
    private $created_time;

    /**
     * @var array comments
     * 
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="stream")
     */
    private $comments;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->active = true;
    }

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
     * Set id
     *
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Set message
     *
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set link
     *
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set icon
     *
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set created_time
     *
     * @param datetime $createdTime
     */
    public function setCreatedTime($createdTime)
    {
        $this->created_time = $createdTime;
    }

    /**
     * Get created_time
     *
     * @return datetime 
     */
    public function getCreatedTime()
    {
        return $this->created_time;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set active
     *
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = (bool) $active;
    }


    public function setUser ($user = null)
    {
        $this->user = $user;
    }

    public function getComments() 
    {
        return $this->comments;
    }

    public function isYouTube()
    {
        $parts = parse_url ($this->getLink());
        if ($parts['host'] == 'www.youtube.com')
            return TRUE;
        else return false;
    }

    public function getYouTubeId()
    {
        if ($this->isYouTube())
        {
            $parts = parse_url ($this->getLink());
            parse_str($parts['query'], $variables);
            if (isset($variables['v']))
                return $variables['v'];
        }
    }
}

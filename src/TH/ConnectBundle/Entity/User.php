<?php

namespace TH\ConnectBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="fb_username", type="string", length=255, nullable=true)
     */
    protected $fb_username;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    protected $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    protected $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="facebookId", type="string", length=255)
     */
    protected $facebookId;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Language", inversedBy="nativeUsers")
     * @ORM\JoinColumn(name="native_language_id", referencedColumnName="id")
     */
    protected $native_language;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Language", inversedBy="learningUsers")
     * @ORM\JoinColumn(name="learning_language_id", referencedColumnName="id")
     */
    protected $learning_language;

    /**
     * @var string
     *
     * @ORM\ManyToMany(targetEntity="Interest", inversedBy="users")
     */
    protected $interests;

    public function serialize()
    {
        return serialize(array($this->facebookId, parent::serialize()));
    }

    public function unserialize($data)
    {
        list($this->facebookId, $parentData) = unserialize($data);
        parent::unserialize($parentData);
    }



    /**
     * @return string
     */
    public function getFbUsername()
    {
        return $this->fb_username;
    }

    /**
     * @param string $fb_username
     */
    public function setFbUsername($fb_username)
    {
        $this->fb_username = $fb_username;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get the full name of the user (first + last name)
     * @return string
     */
    public function getFullName()
    {
        return $this->getFirstName() . ' ' . $this->getLastname();
    }

    /**
     * @param string $facebookId
     * @return void
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;
        $this->setUsername($facebookId);
        $this->salt = '';
    }

    /**
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * @param Array
     */
    public function setFBData($fbdata)
    {
        if (isset($fbdata['id'])) {
            $this->setFacebookId($fbdata['id']);
            $this->addRole('ROLE_FACEBOOK');
        }
        if (isset($fbdata['first_name'])) {
            $this->setFirstname($fbdata['first_name']);
        }
        if (isset($fbdata['last_name'])) {
            $this->setLastname($fbdata['last_name']);
        }
        if (isset($fbdata['email'])) {
            $this->setEmail($fbdata['email']);
        }
        if (isset($fbdata['username'])) {
            $this->setFbUsername($fbdata['username']);
        }

    }

    /**
     * Get the users native language
     */
    public function getNativeLanguage()
    {
        return $this->native_language;
    }

    /**
     * Set the users native language
     */
    public function setNativeLanguage( $language )
    {
        $this->native_language = $language;
    }

    /**
     * Get users learning language
     */
    public function getLearningLanguage()
    {
        return $this->learning_language;
    }

    /**
     * Sset users learning language
     */
    public function setLearningLanguage( $language )
    {
        $this->learning_language = $language;
    }

    /**
     * Get users interests
     */
    public function getInterests()
    {
        return $this->interests;
    }

    /**
     * Set users interests
     */
    public function addInterest (Interest $interest)
    {
        $interest->addUser($this);
        $this->interests[] = $interest;
    }

}

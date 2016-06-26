<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer", nullable=true)
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="AP", type="integer", nullable=true)
     */
    private $aP;

    /**
     * @var int
     *
     * @ORM\Column(name="DP", type="integer", nullable=true)
     */
    private $dP;

    /**
     * @var int
     *
     * @ORM\Column(name="preci", type="integer", nullable=true)
     */
    private $preci;

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=255, nullable=true)
     */
    private $job;


    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;


    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="HP", type="integer", nullable=true)
     */
    private $hP;

    /**
     * @var int
     *
     * @ORM\Column(name="MP", type="integer", nullable=true)
     */
    private $mP;

    /**
     * @var int
     *
     * @ORM\Column(name="member", type="boolean")
     */
    private $isMember;

    /**
     * @var \Group
     *
     * @ORM\ManyToOne(targetEntity="GuildBundle\Entity\Party")
     */
    private $party;

//    /**
//     * @ORM\Column(type="string", length=255, nullable=true)
//     */
//    private $image;



    public function __construct()
    {
        parent::__construct();
        $this->isMember = false;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return User
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set aP
     *
     * @param integer $aP
     *
     * @return User
     */
    public function setAP($aP)
    {
        $this->aP = $aP;

        return $this;
    }

    /**
     * Get aP
     *
     * @return int
     */
    public function getAP()
    {
        return $this->aP;
    }

    /**
     * Set dP
     *
     * @param integer $dP
     *
     * @return User
     */
    public function setDP($dP)
    {
        $this->dP = $dP;

        return $this;
    }

    /**
     * Get dP
     *
     * @return int
     */
    public function getDP()
    {
        return $this->dP;
    }

    /**
     * Set preci
     *
     * @param integer $preci
     *
     * @return User
     */
    public function setPreci($preci)
    {
        $this->preci = $preci;

        return $this;
    }

    /**
     * Get preci
     *
     * @return int
     */
    public function getPreci()
    {
        return $this->preci;
    }

    /**
     * Set job
     *
     * @param string $job
     *
     * @return User
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }


    /**
     * Set hP
     *
     * @param integer $hP
     *
     * @return User
     */
    public function setHP($hP)
    {
        $this->hP = $hP;

        return $this;
    }

    /**
     * Get hP
     *
     * @return int
     */
    public function getHP()
    {
        return $this->hP;
    }

    /**
     * Set mP
     *
     * @param integer $mP
     *
     * @return User
     */
    public function setMP($mP)
    {
        $this->mP = $mP;

        return $this;
    }

    /**
     * Get mP
     *
     * @return int
     */
    public function getMP()
    {
        return $this->mP;
    }

    /**
     * @return \Group
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * @param \Group $party
     */
    public function setParty($party)
    {
        $this->party = $party;
    }

    /**
     * @return int
     */
    public function getIsMember()
    {
        return $this->isMember;
    }

    /**
     * @param int $isMember
     */
    public function setIsMember($isMember)
    {
        $this->isMember = $isMember;
    }

    public function getUploadRootDir()
    {
        // absolute path to your directory where images must be saved
        return __DIR__.'/../../../../../web/'.$this->getUploadDir();
    }

    public function getUploadDir()
    {
        return 'uploads/myentity';
    }

    public function getAbsolutePath()
    {
        return null === $this->image ? null : $this->getUploadRootDir().'/'.$this->image;
    }

    public function getWebPath()
    {
        return null === $this->image ? null : '/'.$this->getUploadDir().'/'.$this->image;
    }
}


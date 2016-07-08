<?php

namespace Admin\BabyFootBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tournament
 *
 * @ORM\Table(name="tournament")
 * @ORM\Entity(repositoryClass="Admin\BabyFootBundle\Repository\TournamentRepository")
 */
class Tournament
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_team", type="integer")
     */
    private $nbTeam;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_begin", type="datetime")
     */
    private $dateBegin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="datetime")
     */
    private $dateEnd;

    /**
     * @var string
     *
     * @ORM\OneToMany(
     *     targetEntity="Admin\BabyFootBundle\Entity\Team",
     *     mappedBy="tournament",
     *     cascade={"persist"}
     * )
     */
    private $teams;

    /**
     * @var Registration registration
     *
     * @ORM\OneToOne(
     *     targetEntity="Admin\BabyFootBundle\Entity\Registration",
     *     mappedBy="tournament"
     * )
     */
    private $registration;

    public function __construct()
    {
        $this->teams = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Tournament
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set nbTeam
     *
     * @param integer $nbTeam
     * @return Tournament
     */
    public function setNbTeam($nbTeam)
    {
        $this->nbTeam = $nbTeam;

        return $this;
    }

    /**
     * Get nbTeam
     *
     * @return integer 
     */
    public function getNbTeam()
    {
        return $this->nbTeam;
    }

    /**
     * Set dateBegin
     *
     * @param \DateTime $dateBegin
     * @return Tournament
     */
    public function setDateBegin($dateBegin)
    {
        $this->dateBegin = $dateBegin;

        return $this;
    }

    /**
     * Get dateBegin
     *
     * @return \DateTime 
     */
    public function getDateBegin()
    {
        return $this->dateBegin;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return Tournament
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Add team
     *
     * @param \Admin\BabyFootBundle\Entity\Team $team
     * @return Player
     */
    public function addTeam(Team $team)
    {
        $this->teams[] = $team;

        return $this;
    }

    /**
     * Remove team
     *
     * @param \Admin\BabyFootBundle\Entity\Team $team
     */
    public function removeTeam(Team $team)
    {
        $this->teams->removeElement($team);
    }

    /**
     * Get teams
     *
     * * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getTeams()
    {
        return $this->teams;
    }

    /**
     * @return Registration
     */
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * @param Registration $registration
     */
    public function setRegistration($registration)
    {
        $this->registration = $registration;
    }
}

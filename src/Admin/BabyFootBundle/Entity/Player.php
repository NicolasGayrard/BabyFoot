<?php

namespace Admin\BabyFootBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table(name="player")
 * @ORM\Entity(repositoryClass="Admin\BabyFootBundle\Repository\PlayerRepository")
 */
class Player
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
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar_path", type="string", length=255, nullable=true)
     */
    private $avatarPath;

    /**
     * @var Statistic statistic
     *
     * @ORM\OneToOne(
     *     targetEntity="Admin\BabyFootBundle\Entity\Statistic",
     *     mappedBy="player"
     * )
     */
    private $statistic;

    /**
     * @var string
     *
     * @ORM\OneToMany(
     *     targetEntity="Admin\BabyFootBundle\Entity\Bet",
     *     mappedBy="player",
     *     cascade={"persist"}
     * )
     */
    private $bets;

    /**
     * @var string
     *
     * @ORM\OneToMany(
     *     targetEntity="Admin\BabyFootBundle\Entity\Team",
     *     mappedBy="playerOne",
     *     cascade={"persist"}
     * )
     */
    private $playerOneTeams;

    /**
     * @var string
     *
     * @ORM\OneToMany(
     *     targetEntity="Admin\BabyFootBundle\Entity\Team",
     *     mappedBy="playerTwo",
     *     cascade={"persist"}
     * )
     */
    private $playerTwoTeams;

    public function __construct()
    {
        $this->bets = new ArrayCollection();
        $this->playerOneTeams = new ArrayCollection();
        $this->playerTwoTeams = new ArrayCollection();
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
     * @return Player
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
     * Set firstName
     *
     * @param string $firstName
     * @return Player
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Player
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Player
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set avatarPath
     *
     * @param string $avatarPath
     * @return Player
     */
    public function setAvatarPath($avatarPath)
    {
        $this->avatarPath = $avatarPath;

        return $this;
    }

    /**
     * Get avatarPath
     *
     * @return string 
     */
    public function getAvatarPath()
    {
        return $this->avatarPath;
    }

    /**
     * @return Statistic
     */
    public function getStatistic()
    {
        return $this->statistic;
    }

    /**
     * @param Statistic $statistic
     */
    public function setStatistic($statistic)
    {
        $this->statistic = $statistic;
    }

    /**
     * Add bet
     *
     * @param \Admin\BabyFootBundle\Entity\Bet $bet
     * @return Player
     */
    public function addBet(Bet $bet)
    {
        $this->bets[] = $bet;

        return $this;
    }

    /**
     * Remove bet
     *
     * @param \Admin\BabyFootBundle\Entity\Bet $bet
     */
    public function removeBet(Bet $bet)
    {
        $this->bets->removeElement($bet);
    }

    /**
     * Get bets
     *
     * * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getBets()
    {
        return $this->bets;
    }

    /**
     * Add playerOneTeam
     *
     * @param \Admin\BabyFootBundle\Entity\Team $playerOneTeam
     * @return Player
     */
    public function addPlayerOneTeam(Team $playerOneTeam)
    {
        $this->playerOneTeams[] = $playerOneTeam;

        return $this;
    }

    /**
     * Remove playerOneTeam
     *
     * @param \Admin\BabyFootBundle\Entity\Team $playerOneTeam
     */
    public function removePlayerOneTeam(Team $playerOneTeam)
    {
        $this->$playerOneTeams->removeElement($playerOneTeam);
    }

    /**
     * Get playerOneTeams
     *
     * * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getPlayerOneTeams()
    {
        return $this->playerOneTeams;
    }

    /**
     * Add playerTwoTeam
     *
     * @param \Admin\BabyFootBundle\Entity\Team $playerTwoTeam
     * @return Player
     */
    public function addPlayerTwoTeam(Team $playerTwoTeam)
    {
        $this->playerTwoTeams[] = $playerTwoTeam;

        return $this;
    }

    /**
     * Remove playerTwoTeam
     *
     * @param \Admin\BabyFootBundle\Entity\Team $playerTwoTeam
     */
    public function removePlayerTwoTeam(Team $playerTwoTeam)
    {
        $this->$playerTwoTeams->removeElement($playerTwoTeam);
    }

    /**
     * Get playerTwoTeams
     *
     * * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getPlayerTwoTeams()
    {
        return $this->playerTwoTeams;
    }
}

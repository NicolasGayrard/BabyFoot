<?php

namespace Admin\BabyFootBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="team")
 * @ORM\Entity(repositoryClass="Admin\BabyFootBundle\Repository\TeamRepository")
 */
class Team
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
     * @ORM\Column(name="group_code", type="string", length=10, columnDefinition="ENUM('A', 'B', 'C', 'D')")
     */
    private $groupCode;

    /**
     * @var Player playerOne
     *
     * @ORM\ManyToOne(
     *     targetEntity="Admin\BabyFootBundle\Entity\Player",
     *     inversedBy="playerOneTeams",
     *     fetch="EAGER"
     * )
     * @ORM\JoinColumn(
     *     name="player_one_id",
     *     referencedColumnName="id"
     * )
     *
     */
    private $playerOne;

    /**
     * @var Player playerTwo
     *
     * @ORM\ManyToOne(
     *     targetEntity="Admin\BabyFootBundle\Entity\Player",
     *     inversedBy="playerTwoTeams",
     *     fetch="EAGER"
     * )
     * @ORM\JoinColumn(
     *     name="player_two_id",
     *     referencedColumnName="id"
     * )
     *
     */
    private $playerTwo;

    /**
     * @var Tournament tournament
     *
     * @ORM\ManyToOne(
     *     targetEntity="Admin\BabyFootBundle\Entity\Tournament",
     *     inversedBy="teams",
     *     fetch="EAGER"
     * )
     * @ORM\JoinColumn(
     *     name="tournament_id",
     *     referencedColumnName="id"
     * )
     *
     */
    private $tournament;

    /**
     * @var string
     *
     * @ORM\OneToMany(
     *     targetEntity="Admin\BabyFootBundle\Entity\Bet",
     *     mappedBy="teamBet",
     *     cascade={"persist"}
     * )
     */
    private $bets;

    /**
     * @var string
     *
     * @ORM\OneToMany(
     *     targetEntity="Admin\BabyFootBundle\Entity\GroupMatches",
     *     mappedBy="teamHome",
     *     cascade={"persist"}
     * )
     */
    private $homeGroupMatches;

    /**
     * @var string
     *
     * @ORM\OneToMany(
     *     targetEntity="Admin\BabyFootBundle\Entity\GroupMatches",
     *     mappedBy="teamAway",
     *     cascade={"persist"}
     * )
     */
    private $awayGroupMatches;

    public function __construct()
    {
        $this->bets = new ArrayCollection();
        $this->homeGroupMatches = new ArrayCollection();
        $this->awayGroupMatches = new ArrayCollection();
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
     * @return Team
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
     * Set groupCode
     *
     * @param string $groupCode
     * @return Team
     */
    public function setGroupCode($groupCode)
    {
        $this->groupCode = $groupCode;

        return $this;
    }

    /**
     * Get groupCode
     *
     * @return string 
     */
    public function getGroupCode()
    {
        return $this->groupCode;
    }

    /**
     * @return Player
     */
    public function getPlayerOne()
    {
        return $this->playerOne;
    }

    /**
     * @param Player $playerOne
     */
    public function setPlayerOne($playerOne)
    {
        $this->playerOne = $playerOne;
    }

    /**
     * @return Player
     */
    public function getPlayerTwo()
    {
        return $this->playerTwo;
    }

    /**
     * @param Player $playerTwo
     */
    public function setPlayerTwo($playerTwo)
    {
        $this->playerTwo = $playerTwo;
    }

    /**
     * @return Tournament
     */
    public function getTournament()
    {
        return $this->tournament;
    }

    /**
     * @param Tournament $tournament
     */
    public function setTournament($tournament)
    {
        $this->tournament = $tournament;
    }

    /**
     * Add bet
     *
     * @param \Admin\BabyFootBundle\Entity\Bet $bet
     * @return Team
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
     * Add homeGroupMatch
     *
     * @param \Admin\BabyFootBundle\Entity\GroupMatches $homeGroupMatch
     * @return Team
     */
    public function addHomeGroupMatch(GroupMatches $homeGroupMatch)
    {
        $this->homeGroupMatches[] = $homeGroupMatch;

        return $this;
    }

    /**
     * Remove homeGroupMatch
     *
     * @param \Admin\BabyFootBundle\Entity\GroupMatches $homeGroupMatch
     */
    public function removeHomeGroupMatch(GroupMatches $homeGroupMatch)
    {
        $this->homeGroupMatches->removeElement($homeGroupMatch);
    }

    /**
     * Get homeGroupMatches
     *
     * * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getHomeGroupMatches()
    {
        return $this->homeGroupMatches;
    }

    /**
     * Add awayGroupMatch
     *
     * @param \Admin\BabyFootBundle\Entity\GroupMatches $awayGroupMatch
     * @return Team
     */
    public function addAwayGroupMatch(GroupMatches $awayGroupMatch)
    {
        $this->awayGroupMatches[] = $awayGroupMatch;

        return $this;
    }

    /**
     * Remove awayGroupMatch
     *
     * @param \Admin\BabyFootBundle\Entity\GroupMatches $awayGroupMatch
     */
    public function removeAwayGroupMatch(GroupMatches $awayGroupMatch)
    {
        $this->awayGroupMatches->removeElement($awayGroupMatch);
    }

    /**
     * Get awayGroupMatches
     *
     * * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getAwayGroupMatches()
    {
        return $this->awayGroupMatches;
    }
}

<?php

namespace Admin\BabyFootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bet
 *
 * @ORM\Table(name="bet")
 * @ORM\Entity(repositoryClass="Admin\BabyFootBundle\Repository\BetRepository")
 */
class Bet
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
     * @var bool
     *
     * @ORM\Column(name="is_win", type="boolean", nullable=true)
     */
    private $isWin;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", nullable=true)
     */
    private $amount;

    /**
     * @var Player player
     *
     * @ORM\ManyToOne(
     *     targetEntity="Admin\BabyFootBundle\Entity\Player",
     *     inversedBy="bets",
     *     fetch="EAGER"
     * )
     * @ORM\JoinColumn(
     *     name="player_id",
     *     referencedColumnName="id"
     * )
     *
     */
    private $player;

    /**
     * @var Team teamBet
     *
     * @ORM\ManyToOne(
     *     targetEntity="Admin\BabyFootBundle\Entity\Team",
     *     inversedBy="bets",
     *     fetch="EAGER"
     * )
     * @ORM\JoinColumn(
     *     name="team_bet_id",
     *     referencedColumnName="id"
     * )
     *
     */
    private $teamBet;

    /**
     * @var Matches match
     *
     * @ORM\ManyToOne(
     *     targetEntity="Admin\BabyFootBundle\Entity\Matches",
     *     inversedBy="bets",
     *     fetch="EAGER"
     * )
     * @ORM\JoinColumn(
     *     name="match_id",
     *     referencedColumnName="id"
     * )
     *
     */
    private $match;


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
     * Set isWin
     *
     * @param boolean $isWin
     * @return Bet
     */
    public function setIsWin($isWin)
    {
        $this->isWin = $isWin;

        return $this;
    }

    /**
     * Get isWin
     *
     * @return boolean 
     */
    public function getIsWin()
    {
        return $this->isWin;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return Bet
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return Player
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param Player $player
     */
    public function setPlayer($player)
    {
        $this->player = $player;
    }

    /**
     * @return Team
     */
    public function getTeamBet()
    {
        return $this->teamBet;
    }

    /**
     * @param Team $teamBet
     */
    public function setTeamBet($teamBet)
    {
        $this->teamBet = $teamBet;
    }

    /**
     * @return Matches
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * @param Matches $match
     */
    public function setMatch($match)
    {
        $this->match = $match;
    }
}
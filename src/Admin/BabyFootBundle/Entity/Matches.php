<?php

namespace Admin\BabyFootBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Matches
 *
 * @ORM\Table(name="matches")
 * @ORM\Entity(repositoryClass="Admin\BabyFootBundle\Repository\MatchesRepository")
 */
class Matches
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_begin", type="datetime", nullable=true)
     */
    private $dateBegin;

    /**
     * @var string
     *
     * @ORM\OneToMany(
     *     targetEntity="Admin\BabyFootBundle\Entity\Bet",
     *     mappedBy="match",
     *     cascade={"persist"}
     * )
     */
    private $bets;

    /**
     * @var string
     *
     * @ORM\OneToMany(
     *     targetEntity="Admin\BabyFootBundle\Entity\Result",
     *     mappedBy="match",
     *     cascade={"persist"}
     * )
     */
    private $results;

    /**
     * @var string
     *
     * @ORM\OneToMany(
     *     targetEntity="Admin\BabyFootBundle\Entity\GroupMatches",
     *     mappedBy="match",
     *     cascade={"persist"}
     * )
     */
    private $groupMatches;

    /**
     * @var string
     *
     * @ORM\OneToMany(
     *     targetEntity="Admin\BabyFootBundle\Entity\FinalPhase",
     *     mappedBy="match",
     *     cascade={"persist"}
     * )
     */
    private $finalPhases;

    public function __construct()
    {
        $this->bets = new ArrayCollection();
        $this->results = new ArrayCollection();
        $this->groupmatches = new ArrayCollection();
        $this->finalPhases = new ArrayCollection();
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
     * Set dateBegin
     *
     * @param \DateTime $dateBegin
     * @return Matches
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
     * Add result
     *
     * @param \Admin\BabyFootBundle\Entity\Result $result
     * @return Matches
     */
    public function addResult(Result $result)
    {
        $this->results[] = $result;

        return $this;
    }

    /**
     * Remove result
     *
     * @param \Admin\BabyFootBundle\Entity\Result $result
     */
    public function removeResult(Result $result)
    {
        $this->results->removeElement($result);
    }

    /**
     * Get results
     *
     * * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Add bet
     *
     * @param \Admin\BabyFootBundle\Entity\Bet $bet
     * @return Matches
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
     * Add groupMatch
     *
     * @param \Admin\BabyFootBundle\Entity\GroupMatches $groupMatch
     * @return Matches
     */
    public function addGroupMatch(GroupMatches $groupMatch)
    {
        $this->groupMatches[] = $groupMatch;

        return $this;
    }

    /**
     * Remove groupMatch
     *
     * @param \Admin\BabyFootBundle\Entity\GroupMatches $groupMatch
     */
    public function removeGroupMatch(GroupMatches $groupMatch)
    {
        $this->groupMatches->removeElement($groupMatch);
    }

    /**
     * Get groupMatches
     *
     * * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getGroupMatches()
    {
        return $this->groupMatches;
    }

    /**
     * Add finalPhase
     *
     * @param \Admin\BabyFootBundle\Entity\FinalPhase $finalPhase
     * @return Matches
     */
    public function addFinalPhase(FinalPhase $finalPhase)
    {
        $this->finalPhases[] = $finalPhase;

        return $this;
    }

    /**
     * Remove groupMatch
     *
     * @param \Admin\BabyFootBundle\Entity\FinalPhase $finalPhase
     */
    public function removeFinalPhase(FinalPhase $finalPhase)
    {
        $this->finalPhases->removeElement($finalPhase);
    }

    /**
     * Get groupMatches
     *
     * * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getFinalPhases()
    {
        return $this->finalPhases;
    }
}

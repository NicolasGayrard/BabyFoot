<?php

namespace Admin\BabyFootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Result
 *
 * @ORM\Table(name="result")
 * @ORM\Entity(repositoryClass="Admin\BabyFootBundle\Repository\ResultRepository")
 */
class Result
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
     * @var int
     *
     * @ORM\Column(name="score_team_home", type="integer")
     */
    private $scoreTeamHome;

    /**
     * @var int
     *
     * @ORM\Column(name="score_team_away", type="integer")
     */
    private $scoreTeamAway;


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
     * Set scoreTeamHome
     *
     * @param integer $scoreTeamHome
     * @return Result
     */
    public function setScoreTeamHome($scoreTeamHome)
    {
        $this->scoreTeamHome = $scoreTeamHome;

        return $this;
    }

    /**
     * Get scoreTeamHome
     *
     * @return integer 
     */
    public function getScoreTeamHome()
    {
        return $this->scoreTeamHome;
    }

    /**
     * Set scoreTeamAway
     *
     * @param integer $scoreTeamAway
     * @return Result
     */
    public function setScoreTeamAway($scoreTeamAway)
    {
        $this->scoreTeamAway = $scoreTeamAway;

        return $this;
    }

    /**
     * Get scoreTeamAway
     *
     * @return integer 
     */
    public function getScoreTeamAway()
    {
        return $this->scoreTeamAway;
    }
}

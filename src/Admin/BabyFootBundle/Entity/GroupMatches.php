<?php

namespace Admin\BabyFootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupMatches
 *
 * @ORM\Table(name="group_matches")
 * @ORM\Entity(repositoryClass="Admin\BabyFootBundle\Repository\GroupMatchesRepository")
 */
class GroupMatches
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
     * @ORM\Column(name="code_group", type="string", length=10, columnDefinition="ENUM('A', 'B', 'C', 'D')")
     */
    private $codeGroup;

    /**
     * @var Team teamHome
     *
     * @ORM\ManyToOne(
     *     targetEntity="Admin\BabyFootBundle\Entity\Team",
     *     inversedBy="homeGroupMatches",
     *     fetch="EAGER"
     * )
     * @ORM\JoinColumn(
     *     name="team_home_id",
     *     referencedColumnName="id"
     * )
     *
     */
    private $teamHome;

    /**
     * @var Team teamAway
     *
     * @ORM\ManyToOne(
     *     targetEntity="Admin\BabyFootBundle\Entity\Team",
     *     inversedBy="awayGroupMatches",
     *     fetch="EAGER"
     * )
     * @ORM\JoinColumn(
     *     name="team_away_id",
     *     referencedColumnName="id"
     * )
     *
     */
    private $teamAway;

    /**
     * @var Matches match
     *
     * @ORM\ManyToOne(
     *     targetEntity="Admin\BabyFootBundle\Entity\Matches",
     *     inversedBy="groupMatches",
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
     * Set codeGroup
     *
     * @param string $codeGroup
     * @return GroupMatches
     */
    public function setCodeGroup($codeGroup)
    {
        $this->codeGroup = $codeGroup;

        return $this;
    }

    /**
     * Get codeGroup
     *
     * @return string 
     */
    public function getCodeGroup()
    {
        return $this->codeGroup;
    }

    /**
     * @return Team
     */
    public function getTeamHome()
    {
        return $this->teamHome;
    }

    /**
     * @param Team $teamHome
     */
    public function setTeamHome($teamHome)
    {
        $this->teamHome = $teamHome;
    }

    /**
     * @return Team
     */
    public function getTeamAway()
    {
        return $this->teamAway;
    }

    /**
     * @param Team $teamAway
     */
    public function setTeamAway($teamAway)
    {
        $this->teamAway = $teamAway;
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

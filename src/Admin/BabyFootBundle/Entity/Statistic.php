<?php

namespace Admin\BabyFootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statistic
 *
 * @ORM\Table(name="statistic")
 * @ORM\Entity(repositoryClass="Admin\BabyFootBundle\Repository\StatisticRepository")
 */
class Statistic
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
     * @ORM\Column(name="nb_goal", type="integer", nullable=true)
     */
    private $nbGoal;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_mess_kit", type="integer", nullable=true)
     */
    private $nbMessKit;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_lob", type="integer", nullable=true)
     */
    private $nbLob;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_victory", type="integer", nullable=true)
     */
    private $nbVictory;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_defeat", type="integer", nullable=true)
     */
    private $nbDefeat;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_tournament_victory", type="integer", nullable=true)
     */
    private $nbTournamentVictory;

    /**
     * @var string
     *
     * @ORM\OneToOne(
     *     targetEntity="Admin\BabyFootBundle\Entity\Player",
     *     inversedBy="statistic"
     * )
     * @ORM\JoinColumn(
     *     name="player_id",
     *     referencedColumnName="id"
     * )
     */
    private $player;


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
     * Set nbGoal
     *
     * @param integer $nbGoal
     * @return Statistic
     */
    public function setNbGoal($nbGoal)
    {
        $this->nbGoal = $nbGoal;

        return $this;
    }

    /**
     * Get nbGoal
     *
     * @return integer 
     */
    public function getNbGoal()
    {
        return $this->nbGoal;
    }

    /**
     * Set nbMessKit
     *
     * @param integer $nbMessKit
     * @return Statistic
     */
    public function setNbMessKit($nbMessKit)
    {
        $this->nbMessKit = $nbMessKit;

        return $this;
    }

    /**
     * Get nbMessKit
     *
     * @return integer 
     */
    public function getNbMessKit()
    {
        return $this->nbMessKit;
    }

    /**
     * Set nbLob
     *
     * @param integer $nbLob
     * @return Statistic
     */
    public function setNbLob($nbLob)
    {
        $this->nbLob = $nbLob;

        return $this;
    }

    /**
     * Get nbLob
     *
     * @return integer 
     */
    public function getNbLob()
    {
        return $this->nbLob;
    }

    /**
     * Set nbVictory
     *
     * @param integer $nbVictory
     * @return Statistic
     */
    public function setNbVictory($nbVictory)
    {
        $this->nbVictory = $nbVictory;

        return $this;
    }

    /**
     * Get nbVictory
     *
     * @return integer 
     */
    public function getNbVictory()
    {
        return $this->nbVictory;
    }

    /**
     * Set nbDefeat
     *
     * @param integer $nbDefeat
     * @return Statistic
     */
    public function setNbDefeat($nbDefeat)
    {
        $this->nbDefeat = $nbDefeat;

        return $this;
    }

    /**
     * Get nbDefeat
     *
     * @return integer 
     */
    public function getNbDefeat()
    {
        return $this->nbDefeat;
    }

    /**
     * Set nbTournamentVictory
     *
     * @param integer $nbTournamentVictory
     * @return Statistic
     */
    public function setNbTournamentVictory($nbTournamentVictory)
    {
        $this->nbTournamentVictory = $nbTournamentVictory;

        return $this;
    }

    /**
     * Get nbTournamentVictory
     *
     * @return integer 
     */
    public function getNbTournamentVictory()
    {
        return $this->nbTournamentVictory;
    }

    /**
     * @return string
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param string $player
     */
    public function setPlayer($player)
    {
        $this->player = $player;
    }
}

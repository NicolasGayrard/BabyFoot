<?php

namespace Admin\BabyFootBundle\Entity;

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
}

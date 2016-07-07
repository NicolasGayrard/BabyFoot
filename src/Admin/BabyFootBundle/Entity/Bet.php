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
}

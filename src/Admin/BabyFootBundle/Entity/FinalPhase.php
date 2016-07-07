<?php

namespace Admin\BabyFootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FinalPhase
 *
 * @ORM\Table(name="final_phase")
 * @ORM\Entity(repositoryClass="Admin\BabyFootBundle\Repository\FinalPhaseRepository")
 */
class FinalPhase
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
     * @ORM\Column(name="final_code", type="string", length=10)
     */
    private $finalCode;


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
     * Set finalCode
     *
     * @param string $finalCode
     * @return FinalPhase
     */
    public function setFinalCode($finalCode)
    {
        $this->finalCode = $finalCode;

        return $this;
    }

    /**
     * Get finalCode
     *
     * @return string 
     */
    public function getFinalCode()
    {
        return $this->finalCode;
    }
}

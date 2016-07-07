<?php

namespace Admin\BabyFootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Registration
 *
 * @ORM\Table(name="registration")
 * @ORM\Entity(repositoryClass="Admin\BabyFootBundle\Repository\RegistrationRepository")
 */
class Registration
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
     * @var array
     *
     * @ORM\Column(name="listPlayer", type="json_array", nullable=true)
     */
    private $listPlayer;


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
     * Set listPlayer
     *
     * @param array $listPlayer
     * @return Registration
     */
    public function setListPlayer($listPlayer)
    {
        $this->listPlayer = $listPlayer;

        return $this;
    }

    /**
     * Get listPlayer
     *
     * @return array 
     */
    public function getListPlayer()
    {
        return $this->listPlayer;
    }
}

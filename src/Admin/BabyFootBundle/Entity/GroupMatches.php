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
     * @ORM\Column(name="code_group", type="string", length=10)
     */
    private $codeGroup;


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
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DeveloperRepository")
 */
class Developer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LASTNAME;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $FIRSTNAME;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $BADGE_LABEL;

    /**
     * @ORM\Column(type="integer")
     */
    private $LEVEL;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLASTNAME(): ?string
    {
        return $this->LASTNAME;
    }

    public function setLASTNAME(string $LASTNAME): self
    {
        $this->LASTNAME = $LASTNAME;

        return $this;
    }

    public function getFIRSTNAME(): ?string
    {
        return $this->FIRSTNAME;
    }

    public function setFIRSTNAME(string $FIRSTNAME): self
    {
        $this->FIRSTNAME = $FIRSTNAME;

        return $this;
    }

    public function getBADGELABEL(): ?string
    {
        return $this->BADGE_LABEL;
    }

    public function setBADGELABEL(string $BADGE_LABEL): self
    {
        $this->BADGE_LABEL = $BADGE_LABEL;

        return $this;
    }

    public function getLEVEL(): ?int
    {
        return $this->LEVEL;
    }

    public function setLEVEL(int $LEVEL): self
    {
        $this->LEVEL = $LEVEL;

        return $this;
    }
}

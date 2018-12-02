<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Player
 *
 * @ORM\Table(name="player")
 * @ORM\Entity
 * @ApiResource
 */
class Player
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=255, nullable=false)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var Collection
     * 
     * @ORM\OneToMany(targetEntity="App\Entity\Fleet", mappedBy="player")
     */
    private $fleets;

    public function __construct()
    {
        $this->fleets = new ArrayCollection();
    }

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of pseudo
     *
     * @return  string
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @param  string  $pseudo
     *
     * @return  self
     */ 
    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string  $email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of createdAt
     *
     * @return  \DateTime
     */ 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @param  \DateTime  $createdAt
     *
     * @return  self
     */ 
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return String
     */
    public function __toString()
    {
        return $this->pseudo;
    }

    

    /**
     * Get the value of fleets
     *
     * @return  Collection
     */ 
    public function getFleets()
    {
        return $this->fleets;
    }

    /**
     * Set the value of fleets
     *
     * @param  Collection  $fleets
     *
     * @return  self
     */ 
    public function setFleets(Collection $fleets)
    {
        $this->fleets = $fleets;

        return $this;
    }
}

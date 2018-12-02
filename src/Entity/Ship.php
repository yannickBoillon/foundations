<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ship
 *
 * @ORM\Table(name="ship", indexes={@ORM\Index(name="category_id", columns={"category_id"}), @ORM\Index(name="race_id", columns={"race_id"})})
 * @ORM\Entity
 */
class Ship
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \ShipCategory
     *
     * @ORM\ManyToOne(targetEntity="ShipCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var \Race
     *
     * @ORM\ManyToOne(targetEntity="Race")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="race_id", referencedColumnName="id")
     * })
     */
    private $race;



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
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of category
     *
     * @return  \ShipCategory
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @param  \ShipCategory  $category
     *
     * @return  self
     */ 
    public function setCategory(\ShipCategory $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of race
     *
     * @return  \Race
     */ 
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set the value of race
     *
     * @param  \Race  $race
     *
     * @return  self
     */ 
    public function setRace(\Race $race)
    {
        $this->race = $race;

        return $this;
    }
}

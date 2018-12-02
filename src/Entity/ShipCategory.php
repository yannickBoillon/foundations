<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShipCategory
 *
 * @ORM\Table(name="ship_category")
 * @ORM\Entity
 */
class ShipCategory
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
     * @ORM\Column(name="name", type="string", length=10, nullable=false)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_military", type="boolean", nullable=false)
     */
    private $isMilitary = false;



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
     * Get the value of isMilitary
     *
     * @return  bool
     */ 
    public function getIsMilitary()
    {
        return $this->isMilitary;
    }

    /**
     * Set the value of isMilitary
     *
     * @param  bool  $isMilitary
     *
     * @return  self
     */ 
    public function setIsMilitary(bool $isMilitary)
    {
        $this->isMilitary = $isMilitary;

        return $this;
    }

    /**
     * @return String
     */
    public function __toString()
    {
        return $this->name;
    }
}

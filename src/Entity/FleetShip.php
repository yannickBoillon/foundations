<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * FleetShip
 *
 * @ORM\Table(name="fleet_ship", indexes={@ORM\Index(name="fleet_id", columns={"fleet_id"}), @ORM\Index(name="fleet_ship_ibfk_2", columns={"ship_id"})})
 * @ORM\Entity
 * @ApiResource
 */
class FleetShip
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
     * @var Fleet
     *
     * @ORM\ManyToOne(targetEntity="Fleet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fleet_id", referencedColumnName="id")
     * })
     */
    private $fleet;

    /**
     * @var Ship
     *
     * @ORM\ManyToOne(targetEntity="Ship")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ship_id", referencedColumnName="id")
     * })
     */
    private $ship;



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
     * Get the value of fleet
     *
     * @return  Fleet
     */ 
    public function getFleet()
    {
        return $this->fleet;
    }

    /**
     * Set the value of fleet
     *
     * @param  Fleet  $fleet
     *
     * @return  self
     */ 
    public function setFleet(Fleet $fleet)
    {
        $this->fleet = $fleet;

        return $this;
    }

    /**
     * Get the value of ship
     *
     * @return  Ship
     */ 
    public function getShip()
    {
        return $this->ship;
    }

    /**
     * Set the value of ship
     *
     * @param  Ship  $ship
     *
     * @return  self
     */ 
    public function setShip(Ship $ship)
    {
        $this->ship = $ship;

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

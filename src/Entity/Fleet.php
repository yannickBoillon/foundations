<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fleet
 *
 * @ORM\Table(name="fleet", indexes={@ORM\Index(name="player_id", columns={"player_id"})})
 * @ORM\Entity
 */
class Fleet
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
     * @var int
     *
     * @ORM\Column(name="name", type="integer", nullable=false)
     */
    private $name;

    /**
     * @var Player
     *
     * @ORM\ManyToOne(targetEntity="Player")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     * })
     */
    private $player;



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
     * @return  int
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  int  $name
     *
     * @return  self
     */ 
    public function setName(int $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of player
     *
     * @return  Player
     */ 
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set the value of player
     *
     * @param  Player  $player
     *
     * @return  self
     */ 
    public function setPlayer(Player $player)
    {
        $this->player = $player;

        return $this;
    }
}

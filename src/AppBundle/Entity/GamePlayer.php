<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @ORM\Entity
 */
class GamePlayer
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="id")
     */
    private $id;

    /**
     * @var Game
     *
     * @ORM\ManyToOne(targetEntity="Game")
     * @ORM\JoinColumn(referencedColumnName="id", name="game_id", nullable=false)
     * @Assert\NotBlank
     */
    private $game;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_reserve", type="boolean", options={"default"=0})
     */
    private $isReserve = false;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param bool $isReserve
     *
     * @return $this
     */
    public function setIsReserve(bool $isReserve): GamePlayer
    {
        $this->isReserve = $isReserve;

        return $this;
    }

    /**
     * @return bool
     */
    public function getisReserve(): bool
    {
        return $this->isReserve;
    }

    /**
     * @param Game $game
     *
     * @return $this
     */
    public function setGame(Game $game): GamePlayer
    {
        $this->game = $game;

        return $this;
    }

    /**
     * @return Game
     */
    public function getGame(): Game
    {
        return $this->game;
    }
}

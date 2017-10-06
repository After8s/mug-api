<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @ORM\Entity
 */
class GameMode
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
     * @var string
     *
     * @ORM\Column(type="string", name="name")
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", name="min_players")
     */
    private $minPlayers;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", name="max_players")
     */
    private $maxPlayers;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getMinPlayers(): int
    {
        return $this->minPlayers;
    }

    /**
     * @param int $minPlayers
     */
    public function setMinPlayers(int $minPlayers)
    {
        $this->minPlayers = $minPlayers;
    }

    /**
     * @return int
     */
    public function getMaxPlayers(): int
    {
        return $this->maxPlayers;
    }

    /**
     * @param int $maxPlayers
     */
    public function setMaxPlayers(int $maxPlayers)
    {
        $this->maxPlayers = $maxPlayers;
    }
}

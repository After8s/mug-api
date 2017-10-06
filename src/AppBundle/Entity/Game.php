<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @ORM\Entity
 */
class Game
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
     * @var GameMode
     *
     * @ORM\ManyToOne(targetEntity="GameMode")
     * @ORM\JoinColumn(referencedColumnName="id", name="game_mode_id", nullable=false)
     * @Assert\NotBlank
     */
    private $gameMode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return GameMode
     */
    public function getGameMode(): GameMode
    {
        return $this->gameMode;
    }

    /**
     * @param GameMode $gameMode
     *
     * @return $this
     */
    public function setGameMode(GameMode $gameMode)
    {
        $this->gameMode = $gameMode;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return $this
     */
    public function setCreatedAt(\DateTime $createdAt): Game
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}

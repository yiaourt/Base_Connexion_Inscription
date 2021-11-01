<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="text")
     */
    private $passPTT;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $permission;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="integer")
     */
    private $tricks_points;

    /**
     * @ORM\Column(type="text")
     */
    private $img_profile;

    /**
     * @ORM\Column(type="text")
     */
    private $superTokenRPTP;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isRPTP;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassPTT(): ?string
    {
        return $this->passPTT;
    }

    public function setPassPTT(string $passPTT): self
    {
        $this->passPTT = $passPTT;

        return $this;
    }

    public function getPermission(): ?string
    {
        return $this->permission;
    }

    public function setPermission(string $permission): self
    {
        $this->permission = $permission;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getTricksPoints(): ?int
    {
        return $this->tricks_points;
    }

    public function setTricksPoints(int $tricks_points): self
    {
        $this->tricks_points = $tricks_points;

        return $this;
    }

    public function getImgProfile(): ?string
    {
        return $this->img_profile;
    }

    public function setImgProfile(string $img_profile): self
    {
        $this->img_profile = $img_profile;

        return $this;
    }

    public function getSuperTokenRPTP(): ?string
    {
        return $this->superTokenRPTP;
    }

    public function setSuperTokenRPTP(string $superTokenRPTP): self
    {
        $this->superTokenRPTP = $superTokenRPTP;

        return $this;
    }

    public function getIsRPTP(): ?bool
    {
        return $this->isRPTP;
    }

    public function setIsRPTP(bool $isRPTP): self
    {
        $this->isRPTP = $isRPTP;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
}

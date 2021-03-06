<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $fname;

    #[ORM\Column(type: 'string', length: 255)]
    private $sname;

    #[ORM\Column(type: 'string', length: 255)]
    private $address;

    #[ORM\Column(type: 'string', length: 255)]
    private $city;

    #[ORM\Column(type: 'string', length: 255)]
    private $zipcode;

    #[ORM\Column(type: 'string', length: 255)]
    private $status;

    #[ORM\ManyToOne(targetEntity: Pizza::class, inversedBy: 'orders')]
    #[ORM\JoinColumn(nullable: false)]
    private $pizza;

    // #[ORM\Column(type: 'integer')]
    // private $userId;

    #[ORM\ManyToOne(targetEntity: Size::class, inversedBy: 'orders')]
    #[ORM\JoinColumn(nullable: false)]
    private $size;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'orders')]
    private $user;

    // #[ORM\Column(type: 'integer')]
    // private $userId;

    // #[ORM\Column(type: 'datetime')]
    // private $orderDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFname(): ?string
    {
        return $this->fname;
    }

    public function setFname(string $fname): self
    {
        $this->fname = $fname;

        return $this;
    }

    public function getSname(): ?string
    {
        return $this->sname;
    }

    public function setSname(string $sname): self
    {
        $this->sname = $sname;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function setZipcode(string $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPizza(): ?Pizza
    {
        return $this->pizza;
    }

    public function setPizza(?Pizza $pizza): self
    {
        $this->pizza = $pizza;

        return $this;
    }

    // public function getUserId(): ?int
    // {
    //     return $this->userId;
    // }

    // public function setUserId(int $userId): self
    // {
    //     $this->userId = $userId;

    //     return $this;
    // }

    public function getSize(): ?Size
    {
        return $this->size;
    }

    public function setSize(?Size $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    // public function getOrderDate(): ?\DateTimeInterface
    // {
    //     return $this->orderDate;
    // }

    // public function setOrderDate(\DateTimeInterface $orderDate): self
    // {
    //     $this->orderDate = $orderDate;

    //     return $this;
    // }

    // public function getUserId(): ?int
    // {
    //     return $this->userId;
    // }

    // public function setUserId(int $userId): self
    // {
    //     $this->userId = $userId;

    //     return $this;
    // }
}

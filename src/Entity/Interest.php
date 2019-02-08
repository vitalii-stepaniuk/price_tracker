<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InterestRepository")
 */
class Interest
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $product_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $product_url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $selector_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $selector;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $notify_email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductName(): ?string
    {
        return $this->product_name;
    }

    public function setProductName(string $product_name): self
    {
        $this->product_name = $product_name;

        return $this;
    }

    public function getProductUrl(): ?string
    {
        return $this->product_url;
    }

    public function setProductUrl(string $product_url): self
    {
        $this->product_url = $product_url;

        return $this;
    }

    public function getSelectorType(): ?string
    {
        return $this->selector_type;
    }

    public function setSelectorType(string $selector_type): self
    {
        $this->selector_type = $selector_type;

        return $this;
    }

    public function getSelector(): ?string
    {
        return $this->selector;
    }

    public function setSelector(string $selector): self
    {
        $this->selector = $selector;

        return $this;
    }

    public function getNotifyEmail(): ?string
    {
        return $this->notify_email;
    }

    public function setNotifyEmail(string $notify_email): self
    {
        $this->notify_email = $notify_email;

        return $this;
    }
}

<?php
// src/User.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity @ORM\Table(name="users")
 **/
class User
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    protected $id;

    /** @ORM\Column(type="string") **/
    protected $username;

    /** @ORM\Column(type="string") **/
    protected $password;

    /** @ORM\Column(type="string") **/
    protected $email;

    /** @ORM\Column(type="string") **/
    protected $discord;

    /** @ORM\Column(type="string") **/
    protected $IGNs;

    /** @ORM\Column(type="integer") **/
    protected $reputation;

    /**
     * @ORM\OneToMany(targetEntity="Trade", mappedBy="trade_owner")
     * @var Trade[] An ArrayCollection of Trade objects.
     **/
    protected $trades;

    public function __construct()
    {
        $this->trades = new ArrayCollection();
    }

    public function addTrade(Trade $trade)
    {
        $this->trades[] = $trade;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getDiscord()
    {
        return $this->discord;
    }

    public function setDiscord($discord)
    {
        $this->discord = $discord;
    }

    public function getIGNs()
    {
        return $this->IGNs;
    }

    public function setIGNs($IGNs)
    {
        $this->IGNs = $IGNs;
    }

    public function getReputation()
    {
        return $this->reputation;
    }

    public function setReputation($reputation)
    {
        $this->reputation = $reputation;
    }
}
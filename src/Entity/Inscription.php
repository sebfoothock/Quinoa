<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InscriptionRepository")
 */
class Inscription
{
    /**
     * @ORM\Column(type="string", length=25)
     */
    private $mdp;

    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=50)
     */
    private $mail;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $desobeissant;

    /**
     * @ORM\Column(type="string", length=7)
     */
    private $sexe;

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp): void
    {
        $this->mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe): void
    {
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getDesobeissant()
    {
        return $this->desobeissant;
    }

    /**
     * @param mixed $desobeissant
     */
    public function setDesobeissant($desobeissant): void
    {
        $this->desobeissant = $desobeissant;
    }

    public function toArray()
    {
        return [
            'mdp' => $this->getMdp(),
            'mail' => $this->getMail(),
            'age' => $this->getAge(),
            'desobeissant' => $this->getDesobeissant(),
            'sexe' => $this->getSexe(),
        ];
    }
}
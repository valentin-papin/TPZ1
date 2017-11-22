<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Personne
 * @package App\Entity
 * @ORM\Entity
 */
class Personne {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $nom;
    /**
     * @ORM\Column(type="integer")
     */
    protected $hp=100;
    /**
     * @ORM\ManyToOne(targetEntity="Arme")
     */
    protected $arme;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * @return mixed
     */
    public function getArme()
    {
        return $this->arme;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $hp
     */
    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    /**
     * @param mixed $arme
     */
    public function setArme($arme)
    {
        $this->arme = $arme;
    }
}
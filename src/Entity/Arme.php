<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Arme
 * @package App\Entity
 * @ORM\Entity
 */
class Arme {
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
    protected $degat;
    /**
     * @ORM\Column(type="decimal")
     */
    protected $coef;
    /**
     * @ORM\Column(type="integer")
     */
    protected $fireRate;

    /**
     * Arme constructor.
     * @param $nom
     * @param $degat
     * @param $coef
     * @param $fireRate
     */
    public function __construct($nom, $degat, $coef, $fireRate)
    {
        $this->nom = $nom;
        $this->degat = $degat;
        $this->coef = $coef;
        $this->fireRate = $fireRate;
    }

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
    public function getDegat()
    {
        return $this->degat;
    }

    /**
     * @return mixed
     */
    public function getCoef()
    {
        return $this->coef;
    }

    /**
     * @return mixed
     */
    public function getFireRate()
    {
        return $this->fireRate;
    }
}
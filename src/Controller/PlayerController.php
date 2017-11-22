<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Form\PersonneType;
use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PlayerController extends Controller
{
    /**
     * @Route(path="/", name="player_list")
     */
    public function indexAction()
    {
        $players = $this->getDoctrine()->getRepository(Personne::class)->findAll();

        return $this->render('Player/index.html.twig', ['players' => $players]);
    }
}
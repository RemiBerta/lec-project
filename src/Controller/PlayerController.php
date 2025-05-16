<?php

namespace App\Controller;

use App\Entity\Player;
use App\Form\PlayerType;
use App\Repository\PlayerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/players')]

final class PlayerController extends AbstractController
{
    #[Route('/', name: 'players_list')]
    public function list(PlayerRepository $playerRepository): Response
    {
        $players = $playerRepository->findAll();

        return $this->render('player/list.html.twig', [
            'players' => $players
        ]);
    }


    #[Route('/new', name: 'player_new', methods: ["GET", "POST"])]
    // est-ce que ma fonction utilise la méthode form ? ou est-ce que je dois mettre autre chose
    public function addNewPlayer(Request $request, EntityManagerInterface $em): Response
    {
        $player = new Player();
        $form = $this->createForm(PlayerType::class, $player);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($player);
            $em->flush();
            return $this->redirectToRoute('players_list');
        }
        return $this->render('player/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/edit/{id}', name: 'player_edit', methods: ["GET", "POST"])]
    public function editPlayer(Player $player,Request $request, EntityManagerInterface $em): Response
    {
        
        $form = $this->createForm(PlayerType::class, $player);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($player);
            $em->flush();
            return $this->redirectToRoute('players_list');
        }
        return $this->render('player/edit.html.twig', [
            'form' => $form->createView(),
            'player' => $player,
        ]);
    }


    #[Route('/{id}', name: 'players_item')]
    public function item(Player $player): Response
    {
        return $this->render('player/item.html.twig', ['player' => $player]);
    }




}

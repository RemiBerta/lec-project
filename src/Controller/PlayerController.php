<?php

namespace App\Controller;

use App\Entity\Player;
use App\Repository\PlayerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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

    #[Route('/{id}', name: 'player_item')]
    public function item(Player $player): Response
    {
        return $this->render('player/item.html.twig', ['player' => $player]);
    }


    // #[Route('/new', name: 'player_new')]
    // public function item(Player $player): Response
    // {
    //     $newPlayer =new NewPlayer
    //     return $this->render('player/item.html.twig', ['player' => $player]);
    // }
}



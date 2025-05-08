<?php

namespace App\Controller;

use App\Entity\Team;
use App\Repository\TeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TeamController extends AbstractController
{
    #[Route('/teams', name: 'teams_list')]
    
    public function list(TeamRepository $teamRepository): Response
    {
        $teams = $teamRepository->findAll();

        return $this->render('team/list.html.twig', [
            'teams' => $teams
        ]);
    }

    #[Route('/teams/{id}', name: 'team_item')]
    public function item(Team $team): Response
    {
        return $this->render('team/item.html.twig', ['team' =>$team]);
    }
}

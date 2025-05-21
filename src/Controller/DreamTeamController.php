<?php

namespace App\Controller;

use App\Entity\DreamTeam;
use App\Form\DreamTeamType;
use App\Repository\DreamTeamRepository;
use App\Repository\RoleRepository;
use App\Repository\PlayerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/dream-team')]
class DreamTeamController extends AbstractController
{
    #[Route('/new', name: 'dream_team_new')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $dreamTeam = new DreamTeam();
        $form = $this->createForm(DreamTeamType::class, $dreamTeam);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($dreamTeam);
            $em->flush();

            return $this->redirectToRoute('dream_team_show', ['id' => $dreamTeam->getId()]);
        }

        return $this->render('dream_team/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'dream_team_show', methods: ['GET'])]
    public function show(DreamTeam $dreamTeam): Response
    {
        return $this->render('dream_team/show.html.twig', [
            'dreamTeam' => $dreamTeam,
        ]);
    }

    #[Route('/', name: 'dream_team_index', methods: ['GET'])]
    public function index(DreamTeamRepository $dreamTeamRepository): Response
    {
        return $this->render('dream_team/index.html.twig', [
            'dreamTeams' => $dreamTeamRepository->findAll(),
        ]);
    }

#[Route('/{id}', name: 'dream_team_delete', methods: ['POST'])]

public function delete(Request $request, DreamTeam $dreamTeam, EntityManagerInterface $em): Response

{   
    $this->denyAccessUnlessGranted('ROLE_ADMIN');
    if ($this->isCsrfTokenValid('delete_dream_team_' . $dreamTeam->getId(), $request->request->get('_token'))) {
        $em->remove($dreamTeam);
        $em->flush();
    }

    return $this->redirectToRoute('dream_team_index');
}

}

<?php

namespace App\Controller;

use App\Entity\Step;
use App\Entity\Board;
use App\Form\StepType;
use App\Repository\StepRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/step')]
class StepController extends AbstractController
{
    #[Route('/', name: 'app_step_index', methods: ['GET'])]
    public function index(StepRepository $stepRepository): Response
    {
        return $this->render('step/index.html.twig', [
            'steps' => $stepRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_step_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $boardId = $request->query->get('board_id');
        $board = $entityManager->getRepository(Board::class)->find($boardId);

        $step = new Step();
        $step->setBoardId($board);
        $form = $this->createForm(StepType::class, $step);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($step);
            $entityManager->flush();

            return $this->redirectToRoute('app_board_show', ['id'=>$boardId], Response::HTTP_SEE_OTHER);
        }

        return $this->render('step/new.html.twig', [
            'step' => $step,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_step_show', methods: ['GET'])]
    public function show(Step $step): Response
    {
        return $this->render('step/show.html.twig', [
            'step' => $step,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_step_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Step $step, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(StepType::class, $step);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_board_show', ['id' => $step->getBoardId()->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('step/edit.html.twig', [
            'step' => $step,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_step_delete', methods: ['POST'])]
    public function delete(Request $request, Step $step, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$step->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($step);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_board_show', ['id' => $step->getBoardId()->getId()], Response::HTTP_SEE_OTHER);
    }
}
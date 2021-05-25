<?php

declare(strict_types=1);

namespace TomasVotruba\Website\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use TomasVotruba\Website\ValueObject\RouteName;

final class TrainingDetailController extends AbstractController
{
    #[Route(path: 'training/{name}', name: RouteName::TRAINING_DETAIL)]
    public function __invoke(string $name): Response
    {
        return $this->render('trainings/training_detail.twig', [
            'title' => 'Trainings',
        ]);
    }
}

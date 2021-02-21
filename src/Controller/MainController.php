<?php

declare(strict_types=1);

namespace App\Controller;

use App\Collection\ExperienceCollection;
use App\Collection\ProjectCollection;
use App\Model\ExperienceModel;
use App\Model\InfosModel;
use App\Model\LocationModel;
use App\Model\ProjectModel;
use DateTimeImmutable;
use Ramsey\Collection\CollectionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Service\ExperienceService;
use App\Service\InfosService;
use App\Service\ProjectService;
use App\Service\StudyService;

/**
 * 
 */
class MainController extends AbstractController
{
    /**
     * 
     */
    public function home(
        ExperienceService $experienceService,
        InfosService $infosService,
        ProjectService $projectService,
        StudyService $studyService,
    ): Response
    {
        $experiences = $experienceService->get();
        $infos = $infosService->get();
        $projects = $projectService->get();
        $studies = $studyService->get();

        return $this->render(
            'views/index.html.twig',
            [
                'experiences' => $experiences,
                'infos' => $infos,
                'projects' => $projects,
                'studies' => $studies,
            ],
        );
    }

    /**
     * 
     */
    public function resume(
        Request $request,
        ExperienceService $experienceService,
        InfosService $infosService,
        ProjectService $projectService,
        StudyService $studyService,
    ): Response {
        $anonymous = $request->query->has('anonymous');

        $experiences = $experienceService->get();
        $infos = $infosService->get();
        $projects = $projectService->get();
        $studies = $studyService->get();

        return $this->render(
            'views/resume.html.twig',
            [
                'anonymous' => $anonymous,
                'experiences' => $experiences,
                'infos' => $infos,
                'projects' => $projects,
                'studies' => $studies,
            ],
        );
    }
}

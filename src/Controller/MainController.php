<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Infos;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * 
 */
class MainController extends AbstractController
{
    /**
     * 
     */
    public function home(): Response
    {
        $infos = $this->getInfos();

        return $this->render(
            'views/home.html.twig',
            [
                'infos' => $infos,
            ],
        );
    }

    /**
     * 
     */
    public function experiences(): Response
    {
        $experiences = $this->getExperiences();

        return $this->render(
            'views/experiences.html.twig',
            [
                'experiences' => $experiences,
            ],
        );
    }

    /**
     * 
     */
    public function studies(): Response
    {
        $studies = $this->getStudies();

        return $this->render(
            'views/studies.html.twig',
            [
                'studies' => $studies,
            ],
        );
    }

    /**
     * 
     */
    public function projects(): Response
    {
        $projects = $this->getProjects();
       
        return $this->render(
            'views/projects.html.twig',
            [
                'projects' => $projects,
            ],
        );
    }

    /**
     * 
     */
    public function resume(
        Request $request
    ): Response
    {
        $anonymous = $request->query->has('anonymous');

        $experiences = $this->getExperiences();
        $infos = $this->getInfos();
        $projects = $this->getProjects();
        $studies = $this->getStudies();

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
    
    private function getExperiences(): array {
        return [
            [
                'name' => 'NAME1',
                'title' => 'TITLE1',
                'location' => 'LOCATION1',
                'techs' => [
                    'tech1',
                    'tech2',
                    'tech3',
                ],
                'startDate' => new DateTime('first day of last year'),
                'endDate' => new DateTime('last day of last year'),
            ],
            [
                'name' => 'NAME3',
                'title' => 'TITLE3',
                'location' => 'LOCATION3',
                'techs' => [],
                'startDate' => new DateTime('first day of next year'),
                'endDate' => null,
            ],
        ];
    }

    private function getStudies(): array {
        return [
            [
                'name' => 'NAME1',
                'title' => 'TITLE1',
                'location' => 'LOCATION1',
                'techs' => [
                    'tech1',
                    'tech2',
                    'tech3',
                ],
                'startDate' => new DateTime('first day of last year'),
                'endDate' => new DateTime('last day of last year'),
            ],
            [
                'name' => 'NAME3',
                'title' => 'TITLE3',
                'location' => 'LOCATION3',
                'techs' => [],
                'startDate' => new DateTime('first day of next year'),
                'endDate' => null,
            ],
        ];
    }

    private function getProjects(): array {
        return [
            [
                'name' => 'NAME1',
                'image' => 'IMAGE1',
                'description' => 'DESCRIPTION1',
                'techs' => [
                    'tech1',
                    'tech2',
                    'tech3',
                ],
                'github' => 'GITHUB1',
                'url' => 'URL1',
            ],
            [
                'name' => 'NAME2',
                'image' => 'IMAGE2',
                'description' => 'DESCRIPTION3',
                'techs' => [],
                'github' => null,
                'url' => null,
            ],
        ];
    }

    private function getInfos(): Infos {
        return new Infos();
    }
}

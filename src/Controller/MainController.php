<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Experience;
use App\Model\Infos;
use App\Model\Location;
use App\Model\Project;
use DateTimeImmutable;
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
            'views/experiences.html.twig',
            [
                'experiences' => $studies,
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
    ): Response {
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

    private function getExperiences(): array
    {
        return [
            new Experience(
                'NAME1',
                'TITLE1',
                new Location(
                    'STREET1',
                    'POSTAL_CODE1',
                    'CITY1',
                    'DEPARTMENT1',
                    'REGION1',
                    'COUNTRY1',
                ),
                'IMAGE1',
                'URL1',
                new DateTimeImmutable('first day of last year'),
                new DateTimeImmutable('last day of last year'),
                [
                    'tech1',
                    'tech2',
                    'tech3',
                ],
            ),
            new Experience(
                'NAME2',
                'TITLE2',
                new Location(
                    'STREET2',
                    'POSTAL_CODE2',
                    'CITY2',
                    'DEPARTMENT2',
                    'REGION2',
                    'COUNTRY2',
                ),
                'IMAGE1',
                'URL1',
                new DateTimeImmutable('first day of last year'),
                new DateTimeImmutable('last day of last year'),
                [],
            ),
            new Experience(
                'NAME3',
                'TITLE3',
                new Location(
                    'STREET3',
                    'POSTAL_CODE3',
                    'CITY3',
                    'DEPARTMENT3',
                    'REGION3',
                    'COUNTRY3',
                ),
                'IMAGE3',
                'URL3',
                new DateTimeImmutable('first day of last year'),
                null,
                [
                    'tech1',
                    'tech2',
                    'tech3',
                ],
            ),
        ];
    }

    private function getStudies(): array
    {
        return [
            new Experience(
                'NAME1',
                'TITLE1',
                new Location(
                    'STREET1',
                    'POSTAL_CODE1',
                    'CITY1',
                    'DEPARTMENT1',
                    'REGION1',
                    'COUNTRY1',
                ),
                'IMAGE1',
                'URL1',
                new DateTimeImmutable('first day of last year'),
                new DateTimeImmutable('last day of last year'),
                [
                    'tech1',
                    'tech2',
                    'tech3',
                ],
            ),
            new Experience(
                'NAME2',
                'TITLE2',
                new Location(
                    'STREET2',
                    'POSTAL_CODE2',
                    'CITY2',
                    'DEPARTMENT2',
                    'REGION2',
                    'COUNTRY2',
                ),
                'IMAGE1',
                'URL1',
                new DateTimeImmutable('first day of last year'),
                new DateTimeImmutable('last day of last year'),
                [],
            ),
            new Experience(
                'NAME3',
                'TITLE3',
                new Location(
                    'STREET3',
                    'POSTAL_CODE3',
                    'CITY3',
                    'DEPARTMENT3',
                    'REGION3',
                    'COUNTRY3',
                ),
                'IMAGE3',
                'URL3',
                new DateTimeImmutable('first day of last year'),
                null,
                [
                    'tech1',
                    'tech2',
                    'tech3',
                ],
            ),
        ];
    }

    private function getProjects(): array
    {
        return [
            new Project(
                'NAME1',
                'IMAGE1',
                'DESCRIPTION1',
                'GITHUB1',
                'URL1',
                [
                    'tech1',
                    'tech2',
                    'tech3',
                ],
            ),
            new Project(
                'NAME2',
                'IMAGE2',
                'DESCRIPTION2',
                'GITHUB2',
                'URL2',
                [
                    'tech1',
                    'tech2',
                    'tech3',
                ],
            ),
            new Project(
                'NAME3',
                'IMAGE3',
                'DESCRIPTION3',
                'GITHUB3',
                'URL3',
                [
                    'tech1',
                    'tech2',
                    'tech3',
                ],
            ),
        ];
    }

    private function getInfos(): Infos
    {
        return new Infos();
    }
}

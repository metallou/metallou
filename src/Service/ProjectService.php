<?php

declare(strict_types=1);

namespace App\Service;

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

/**
 * 
 */
class ProjectService
{
    public function get(): ProjectCollection
    {
        $collection = new ProjectCollection(
            [
                new ProjectModel(
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
                new ProjectModel(
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
                new ProjectModel(
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
            ]
        );

        return $collection->sort('getName');
    }
}

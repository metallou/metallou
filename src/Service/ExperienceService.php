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
class ExperienceService
{
    public function get(): ExperienceCollection
    {
        $collection = new ExperienceCollection(
            [
                new ExperienceModel(
                    'NAME1',
                    'TITLE1',
                    new LocationModel(
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
                new ExperienceModel(
                    'NAME2',
                    'TITLE2',
                    new LocationModel(
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
                new ExperienceModel(
                    'NAME3',
                    'TITLE3',
                    new LocationModel(
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
            ]
        );
        
        return $collection->sort(
            'getDateStart',
            CollectionInterface::SORT_DESC,
        );
    }
}

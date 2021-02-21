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
class InfosService
{
    public function get(): InfosModel
    {
        return new InfosModel();
    }
}

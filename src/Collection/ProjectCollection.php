<?php

declare(strict_types=1);

namespace App\Collection;

use App\Model\ProjectModel;
use DateTimeInterface;
use JsonSerializable;
use Ramsey\Collection\AbstractCollection;

/**
 * 
 */
class ProjectCollection extends AbstractCollection
{
    public function getType(): string
    {
        return ProjectModel::class;
    }
}

<?php

declare(strict_types=1);

namespace App\Collection;

use App\Model\ExperienceModel;
use DateTimeInterface;
use JsonSerializable;
use Ramsey\Collection\AbstractCollection;

/**
 * 
 */
class ExperienceCollection extends AbstractCollection
{
    public function getType(): string
    {
        return ExperienceModel::class;
    }
}

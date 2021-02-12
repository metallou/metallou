<?php

declare(strict_types=1);

namespace App\Model;

use DateTimeInterface;
use JsonSerializable;

/**
 * 
 */
class Experience implements
    JsonSerializable
{
    public function __construct(
        private string $name,
        private string $title,
        private Location $location,
        private string $image,
        private string $url,
        private DateTimeInterface $dateStart,
        private DateTimeInterface|null $dateEnd,
        private array $techs,
    ) {
    }

    /**
     * 
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * 
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * 
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * 
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * 
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * 
     */
    public function getDateStart(): DateTimeInterface
    {
        return $this->dateStart;
    }

    /**
     * 
     */
    public function getDateEnd(): DateTimeInterface|null
    {
        return $this->dateEnd;
    }

    /**
     * 
     */
    public function getTechs(): array
    {
        return $this->techs;
    }

    public function jsonSerialize(): array
    {
        return [
            'name' => $this->name,
            'title' => $this->title,
            'location' => $this->location->jsonSerialize(),
            'image' => $this->image,
            'url' => $this->url,
            'dateStart' => $this->dateStart->format('c'),
            'dateEnd' => $this->dateEnd instanceof DateTimeInterface
                ? $this->dateEnd->format('c')
                : null,
            'techs' => $this->techs,
        ];
    }
}

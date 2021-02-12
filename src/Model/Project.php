<?php

declare(strict_types=1);

namespace App\Model;

use DateTimeInterface;
use JsonSerializable;

/**
 * 
 */
class Project implements
    JsonSerializable
{
    public function __construct(
        private string $name,
        private string $image,
        private string $description,
        private string $github,
        private string $url,
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
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * 
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * 
     */
    public function getGithub(): string
    {
        return $this->github;
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
    public function getTechs(): array
    {
        return $this->techs;
    }

    public function jsonSerialize(): array
    {
        return [
            'name' => $this->name,
            'image' => $this->image,
            'description' => $this->description,
            'github' => $this->github,
            'url' => $this->url,
            'techs' => $this->techs,
        ];
    }
}

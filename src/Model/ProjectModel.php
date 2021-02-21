<?php

declare(strict_types=1);

namespace App\Model;

use DateTimeInterface;
use JsonSerializable;

/**
 * 
 */
class ProjectModel implements
    JsonSerializable
{
    /**
     * 
     */
    public function __construct(
        private string $description,
        private string $homepage,
        private string $image,
        private bool $imageCustom,
        private array $languages,
        private string $name,
        private string $repository,
        private array $topics,
    ) {
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
    public function getHomepage(): string
    {
        return $this->homepage;
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
    public function isImageCustom(): bool
    {
        return $this->imageCustom;
    }

    /**
     * 
     */
    public function getLanguages(): array
    {
        return $this->languages;
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
    public function getRepository(): string
    {
        return $this->repository;
    }

    /**
     * 
     */
    public function getTopics(): array
    {
        return $this->topics;
    }

    /**
     * 
     */
    public function jsonSerialize(): array
    {
        return [
            'description' => $this->description,
            'github' => $this->github,
            'image' => $this->image,
            'imageCustom' => $this->imageCustom,
            'languages' => $this->languages,
            'name' => $this->name,
            'repository' => $this->repository,
            'topics' => $this->topics,
        ];
    }
}

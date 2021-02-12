<?php

declare(strict_types=1);

namespace App\Model;

use DateTimeImmutable;
use DateTimeInterface;
use JsonSerializable;

/**
 * 
 */
class Infos implements
    JsonSerializable
{
    private Location $location;
    private string $firstName = 'Kévin';
    private string $lastName = 'CASTEJON';
    private string $phone = '+3347493737';
    private string $email = 'kevincastejon13@gmail.com';
    private DateTimeInterface $birthday;
    private array $links = [
        'linkedin' => 'https://fr.linkedin.com/in/k%C3%A9vin-castejon-61925a134',
        'github' => 'https://github.com/metallou',
        'portfolio' => 'https://kevin-castejon.herokuapp.com',
    ];
    private array $skills = [
        'SKILL1',
        'SKILL2',
        'SKILL3',
    ];
    private array $interests = [
        'INTEREST1',
        'INTEREST2',
        'INTEREST3',
    ];
    private array $techs = [
        'DOMAIN1' => [
            'tech1',
            'tech2',
            'tech3',
        ],
        'DOMAIN2' => [
            'tech1',
            'tech2',
            'tech3',
        ],
        'DOMAIN3' => [
            'tech1',
            'tech2',
            'tech3',
        ],
    ];

    public function __construct()
    {
        $this->location = new Location(
            '75 rue sauveur Tobelem',
            '13007',
            'Marseille',
            'Bouches-du-Rhône',
            "Provence-Alpes-Côte-d'Azur",
            'FRANCE',
        );
        $this->birthday = new DateTimeImmutable('1993-06-18');
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
    public function getAge(): int
    {
        $today = new DateTimeImmutable();

        $diff = $this->birthday->diff($today);

        return $diff->y;
    }

    public function getBirthday(): DateTimeInterface
    {
        return $this->birthday;
    }

    /**
     * 
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * 
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * 
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * 
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * 
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * 
     */
    public function getSkills(): array
    {
        return $this->skills;
    }

    /**
     * 
     */
    public function getInterests(): array
    {
        return $this->interests;
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
            'location' => $this->location->jsonSerialize(),
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'phone' => $this->phone,
            'email' => $this->email,
            'age' => $this->getAge(),
            'birthday' => $this->birthday->format('c'),
            'links' => $this->links,
            'skills' => $this->skills,
            'interests' => $this->interests,
            'techs' => $this->techs,
        ];
    }
}

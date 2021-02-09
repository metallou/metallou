<?php

declare(strict_types=1);

namespace App\Model;

use DateTime;

/**
 * 
 */
class Infos
{
    private Address $address;
    private string $firstName = 'Kévin';
    private string $lastName = 'CASTEJON';
    private string $phone = '+3347493737';
    private string $email = 'kevincastejon13@gmail.com';
    private DateTime $birthday;
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
        $this->address = new Address();
        $this->birthday = new DateTime('1993-06-18');
    }

    /**
     * 
     */
    public function getAddress(): Address {
        return $this->address;
    }

    /**
     * 
     */
    public function getAge(): int {
        $today = new DateTime();

        $diff = $this->birthday->diff($today);

        return $diff->y;
    }
    
    /**
     * 
     */
    public function getFirstName(): string {
        return $this->firstName;
    }

    /**
     * 
     */
    public function getLastName(): string {
        return $this->lastName;
    }

    /**
     * 
     */
    public function getPhone(): string {
        return $this->phone;
    }

    /**
     * 
     */
    public function getEmail(): string {
        return $this->email;
    }

    /**
     * 
     */
    public function getLinks(): array {
        return $this->links;
    }

    /**
     * 
     */
    public function getSkills(): array {
        return $this->skills;
    }

    /**
     * 
     */
    public function getInterests(): array {
        return $this->interests;
    }

    /**
     * 
     */
    public function getTechs(): array {
        return $this->techs;
    }
}

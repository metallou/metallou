<?php

declare(strict_types=1);

namespace App\Model;

use DateTime;

/**
 * 
 */
class Address
{
    private string $street = '75 rue sauveur Tobelem';
    private string $postalCode = '13007';
    private string $city = 'Marseille';
    private string $department = 'Bouches-du-Rhône';
    private string $region = "Provence-Alpes-Côte-d'Azur";
    private string $country = 'FRANCE';

    /**
     * 
     */
    public function getStreet(): string {
        return $this->street;
    }

    /**
     * 
     */
    public function getPostalCode(): string {
        return $this->postalCode;
    }

    /**
     * 
     */
    public function getCity(): string {
        return $this->city;
    }

    /**
     * 
     */
    public function getDepartment(): string {
        return $this->department;
    }

    /**
     * 
     */
    public function getRegion(): string {
        return $this->region;
    }

    /**
     * 
     */
    public function getCountry(): string {
        return $this->country;
    }
}

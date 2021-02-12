<?php

declare(strict_types=1);

namespace App\Model;

use JsonSerializable;

/**
 * 
 */
class Location implements
    JsonSerializable
{
    public function __construct(
        private string $street,
        private string $postalCode,
        private string $city,
        private string $department,
        private string $region,
        private string $country,
    ) {
    }

    /**
     * 
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * 
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * 
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * 
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * 
     */
    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * 
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    public function jsonSerialize(): array
    {
        return [
            'street' => $this->street,
            'postalCode' => $this->postalCode,
            'city' => $this->city,
            'department' => $this->department,
            'region' => $this->region,
            'country' => $this->country,
        ];
    }
}

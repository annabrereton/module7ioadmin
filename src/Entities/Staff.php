<?php

namespace App\Entities;

class Staff
{
    private int $id;
    private string $first_name;
    private string $last_name;
    private string $job_title;

//    public function __construct(int $id, string $firstName, string $lastName, string $jobTitle)
//    {
//        $this->id = $id;
//        $this->firstName = $firstName;
//        $this->lastName = $lastName;
//        $this->jobTitle = $jobTitle;
//    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->first_name = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->last_name = $lastName;
    }

    /**
     * @return string
     */
    public function getJobTitle(): string
    {
        return $this->job_title;
    }

    /**
     * @param string $jobTitle
     */
    public function setJobTitle(string $jobTitle): void
    {
        $this->job_title = $jobTitle;
    }
}
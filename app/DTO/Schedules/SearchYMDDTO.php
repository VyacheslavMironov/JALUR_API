<?php
namespace App\DTO\Schedules;

final class SearchYMDDTO
{
    public string $Date;

    public function __construct(string $Date)
    {
        $this->Date = $Date;
    }
}
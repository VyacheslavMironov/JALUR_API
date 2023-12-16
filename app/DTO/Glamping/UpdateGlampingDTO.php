<?php

namespace App\DTO\Glamping;

class UpdateGlampingDTO
{
    public int $Id;
    public string $Name;
    public string $Description;
    public string $Image;
    public string $Date;
    public string $Time;
    public function __construct(int $Id, string $Name, string $Description, string $Image, string $Date, string $Time)
    {
        $this->Id = $Id;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Image = $Image;
        $this->Date = $Date;
        $this->Time = $Time;
    }
}

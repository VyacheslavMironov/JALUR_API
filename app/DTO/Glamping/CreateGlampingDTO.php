<?php

namespace App\DTO\Glamping;

class CreateGlampingDTO
{
    public string $Name;
    public string $Description;
    public string $Image;
    public string $Date;
    public string $Time;
    public function __construct(string $Name, string $Description, string $Image, string $Date, string $Time)
    {
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Image = $Image;
        $this->Date = $Date;
        $this->Time = $Time;
    }
}

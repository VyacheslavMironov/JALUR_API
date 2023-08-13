<?php
namespace App\DTO\User;

final class UpdateUserDTO
{
    public int $Id;
    public string $FirstName;
    public string $LastName;
    public string|null $Image;
    public string|null $Description;
    public float|null $Weight;
    public float|null $Height;
    public int|null $Age;
    public string|null $Gender;
    public string $Phone;
    public string $Role;

    public function __construct(int $Id, string $FirstName, string $LastName, string|null $Image, string|null $Description,
                                float|null $Weight, float|null $Height, int|null $Age, string|null $Gender, string $Phone,
                                string $Role)
    {
        $this->Id = $Id;
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->Image = $Image;
        $this->Description = $Description;
        $this->Weight = $Weight;
        $this->Height = $Height;
        $this->Age = $Age;
        $this->Gender = $Gender;
        $this->Phone = $Phone;
        $this->Role = $Role;
    }
}

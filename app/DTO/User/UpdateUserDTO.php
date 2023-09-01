<?php
namespace App\DTO\User;

final class UpdateUserDTO
{
    public int $Id;
    public string|null $FirstName;
    public string|null $LastName;
    public string|null $Image;
    public string|null $Description;
    public float|null $Weight;
    public float|null $Height;
    public int|null $Age;
    public string|null $Phone;
    public string|null $Role;

    public function __construct(int $Id, string|null $FirstName, string|null $LastName, string|null $Image, string|null $Description,
                                float|null $Weight, float|null $Height, int|null $Age, string|null $Phone, string|null $Role)
    {
        $this->Id = $Id;
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->Image = $Image;
        $this->Description = $Description;
        $this->Weight = $Weight;
        $this->Height = $Height;
        $this->Age = $Age;
        $this->Phone = $Phone;
        $this->Role = $Role;
    }
}

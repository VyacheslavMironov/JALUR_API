<?php

namespace App\Domain\IRepository;

use App\DTO\Glamping\CreateGlampingDTO;
use App\DTO\Glamping\DeleteGlampingDTO;
use App\DTO\Glamping\ShowGlampingDTO;
use App\DTO\Glamping\UpdateGlampingDTO;

interface IGlampingRepository
{
    public function Create(CreateGlampingDTO $context);
    public function Update(UpdateGlampingDTO $context);
    public function Show(ShowGlampingDTO $context);
    public function Delete(DeleteGlampingDTO $context);
    public function All();
}

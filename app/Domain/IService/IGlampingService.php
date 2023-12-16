<?php

namespace App\Domain\IService;

use App\DTO\Glamping\CreateGlampingDTO;
use App\DTO\Glamping\DeleteGlampingDTO;
use App\DTO\Glamping\ShowGlampingDTO;
use App\DTO\Glamping\UpdateGlampingDTO;

interface IGlampingService
{
    public function Create(CreateGlampingDTO $context);
    public function Update(UpdateGlampingDTO $context);
    public function Show(ShowGlampingDTO $context);
    public function Delete(DeleteGlampingDTO $context);
    public function All();
}

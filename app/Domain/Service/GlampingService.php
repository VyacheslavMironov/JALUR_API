<?php

namespace App\Domain\Service;
use App\Domain\IService\IGlampingService;
use App\DTO\Glamping\CreateGlampingDTO;
use App\DTO\Glamping\DeleteGlampingDTO;
use App\DTO\Glamping\ShowGlampingDTO;
use App\DTO\Glamping\UpdateGlampingDTO;
use App\Infrastructure\Repository\GlampingRepository;

class GlampingService implements IGlampingService
{
    private GlampingRepository $_repository;
    public function __construct(GlampingRepository $repository)
    {
        $this->_repository = $repository;
    }

    public function Create(CreateGlampingDTO $context)
    {
        return $this->_repository->Create($context);
    }

    public function Update(UpdateGlampingDTO $context)
    {
        return $this->_repository->Update($context);
    }

    public function Show(ShowGlampingDTO $context)
    {
        return $this->_repository->Show($context);
    }

    public function Delete(DeleteGlampingDTO $context)
    {
        return $this->_repository->Delete($context);
    }

    public function All()
    {
        return $this->_repository->All();
    }
}

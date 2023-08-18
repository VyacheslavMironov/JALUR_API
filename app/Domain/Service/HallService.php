<?php

namespace App\Domain\Service;

use App\Domain\IService\IHallService;
use App\DTO\Hall\CreateHallDTO;
use App\DTO\Hall\DeleteHallDTO;
use App\DTO\Hall\ShowHallDTO;
use App\DTO\Hall\UpdateHallDTO;
use App\Infrastructure\Repository\HallRepository;

class HallService implements IHallService
{
    public HallRepository $repository;
    public function __construct()
    {
        $this->repository = new HallRepository();
    }
    public function CreateAction(CreateHallDTO $context)
    {
        return $this->repository->Create($context);
    }

    public function AllAction()
    {
        return $this->repository->All();
    }

    public function ShowAction(ShowHallDTO $context)
    {
        return $this->repository->Show($context);
    }

    public function UpdateAction(UpdateHallDTO $context)
    {
        return $this->repository->Update($context);
    }

    public function DeleteAction(DeleteHallDTO $context)
    {
        return $this->repository->Delete($context);
    }
}

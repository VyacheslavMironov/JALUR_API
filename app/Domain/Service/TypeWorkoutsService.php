<?php
namespace App\Domain\Service;

use App\DTO\TypeWorkouts\CreateTypeWorkoutsDTO;
use App\DTO\TypeWorkouts\ShowTypeWorkoutsDTO;
use App\DTO\TypeWorkouts\DeleteTypeWorkoutsDTO;
use App\Infrastructure\Repository\TypeWorkoutsRepository;
use App\Domain\IService\ITypeWorkoutsService;

class TypeWorkoutsService implements ITypeWorkoutsService
{
    protected TypeWorkoutsRepository $repository;

    public function __construct()
    {
        $this->repository = new TypeWorkoutsRepository();
    }

    public function CreateAction(CreateTypeWorkoutsDTO $context)
    {
        return $this->repository->Create($context);
    }

    public function ShowAction(ShowTypeWorkoutsDTO $context)
    {
        return $this->repository->Show($context);
    }

    public function AllAction()
    {
        return $this->repository->All();
    }

    public function DeleteAction(DeleteTypeWorkoutsDTO $context)
    {
        return $this->repository->Delete($context);
    }
}

<?php
namespace App\Domain\Service;

use App\DTO\Workouts\CreateWorkoutsDTO;
use App\DTO\Workouts\ShowWorkoutsDTO;
use App\DTO\Workouts\DeleteWorkoutsDTO;
use App\DTO\Workouts\UpdateWorkoutsDTO;
use App\Infrastructure\Repository\WorkoutRepository;
use App\Domain\IService\IWorkoutService;

class WorkoutService implements IWorkoutService
{
    protected WorkoutRepository $repository;

    public function __construct()
    {
        $this->repository = new WorkoutRepository();
    }

    public function CreateAction(CreateWorkoutsDTO $context)
    {
        return $this->repository->Create($context);
    }

    public function ShowAction(ShowWorkoutsDTO $context)
    {
        return $this->repository->Show($context);
    }

    public function AllAction()
    {
        return $this->repository->All();
    }

    public function DeleteAction(DeleteWorkoutsDTO $context)
    {
        return $this->repository->Delete($context);
    }

    public function UpdateAction(UpdateWorkoutsDTO $context)
    {
        return $this->repository->Update($context);
    }
}

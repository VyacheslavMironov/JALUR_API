<?php
namespace App\Domain\Service;

use App\DTO\HistoryWorkouts\CreateHistoryWorkoutsDTO;
use App\DTO\HistoryWorkouts\ShowHistoryWorkoutsDTO;
use App\DTO\HistoryWorkouts\UpdateHistoryWorkoutsDTO;
use App\DTO\HistoryWorkouts\DeleteHistoryWorkoutsDTO;
use App\Infrastructure\Repository\HistoryWorkoutsRepository;
use App\Domain\IService\IHistoryWorkoutsService;

class HistoryWorkoutsService implements IHistoryWorkoutsService
{
    protected HistoryWorkoutsRepository $repository;

    public function __construct()
    {
        $this->repository = new HistoryWorkoutsRepository();
    }

    public function CreateAction(CreateHistoryWorkoutsDTO $context)
    {
        return $this->repository->Create($context);
    }

    public function ShowAction(ShowHistoryWorkoutsDTO $context)
    {
        return $this->repository->Show($context);
    }

    public function AllAction()
    {
        return $this->repository->All();
    }

    public function UpdateAction(UpdateHistoryWorkoutsDTO $context)
    {
        return $this->repository->Update($context);
    }

    public function DeleteAction(DeleteHistoryWorkoutsDTO $context)
    {
        return $this->repository->Delete($context);
    }
}
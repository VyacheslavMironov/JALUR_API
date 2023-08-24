<?php

namespace App\Domain\Service;

use App\Domain\IService\IScheduleTimeService;
use App\DTO\ScheduleTime\CreateScheduleTimeDTO;
use App\DTO\ScheduleTime\DeleteScheduleTimeDTO;
use App\DTO\ScheduleTime\ShowScheduleTimeDTO;
use App\DTO\ScheduleTime\UpdateScheduleTimeDTO;
use App\Infrastructure\Repository\ScheduleTimeRepository;

class ScheduleTimeService implements IScheduleTimeService
{
    public ScheduleTimeRepository $repository;
    public function __construct()
    {
        $this->repository = new ScheduleTimeRepository();
    }

    public function CreateAction(CreateScheduleTimeDTO $context)
    {
        return $this->repository->Create($context);
    }

    public function ShowAction(ShowScheduleTimeDTO $context)
    {
        return $this->repository->Show($context);
    }

    public function AllAction()
    {
        return $this->repository->All();
    }

    public function UpdateAction(UpdateScheduleTimeDTO $context)
    {
        return $this->repository->Update($context);
    }

    public function DeleteAction(DeleteScheduleTimeDTO $context)
    {
        return $this->repository->Delete($context);
    }
}

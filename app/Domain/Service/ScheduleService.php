<?php
namespace App\Domain\Service;

use App\DTO\Schedules\CreateScheduleDTO;
use App\DTO\Schedules\ShowScheduleDTO;
use App\DTO\Schedules\ShowHallScheduleDTO;
use App\DTO\Schedules\UpdateScheduleDTO;
use App\DTO\Schedules\DeleteScheduleDTO;
use App\Infrastructure\Repository\ScheduleRepository;
use App\Domain\IService\IScheduleService;

class ScheduleService implements IScheduleService
{
    protected ScheduleRepository $repository;

    public function __construct()
    {
        $this->repository = new ScheduleRepository();
    }

    public function CreateAction(CreateScheduleDTO $context)
    {
        return $this->repository->Create($context);
    }

    public function ShowAction(ShowScheduleDTO $context)
    {
        return $this->repository->Show($context);
    }

    public function ShowbyHallAction(ShowHallScheduleDTO $context)
    {
        return $this->repository->ShowByHall($context);
    }

    public function AllAction()
    {
        return $this->repository->All();
    }

    public function UpdateAction(UpdateScheduleDTO $context)
    {
        return $this->repository->Update($context);
    }

    public function DeleteAction(DeleteScheduleDTO $context)
    {
        return $this->repository->Delete($context);
    }
}

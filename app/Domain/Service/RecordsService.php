<?php
namespace App\Domain\Service;

use App\DTO\Records\CreateRecordsDTO;
use App\DTO\Records\ShowRecordsDTO;
use App\DTO\Records\UpdateRecordsDTO;
use App\DTO\Records\DeleteRecordsDTO;
use App\Infrastructure\Repository\RecordRepository;
use App\Domain\IService\IRecordsService;

class RecordsService implements IRecordsService
{
    protected RecordRepository $repository;

    public function __construct()
    {
        $this->repository = new RecordRepository();
    }

    public function CreateAction(CreateRecordsDTO $context)
    {
        return $this->repository->Create($context);
    }

    public function ShowAction(ShowRecordsDTO $context)
    {
        return $this->repository->Show($context);
    }

    public function AllAction()
    {
        return $this->repository->All();
    }

    public function UpdateAction(UpdateRecordsDTO $context)
    {
        return $this->repository->Update($context);
    }

    public function DeleteAction(DeleteRecordsDTO $context)
    {
        return $this->repository->Delete($context);
    }

    public function ShowByScheduleAction(int $schedule_id)
    {
        return $this->repository->ShowBySchedule($schedule_id);
    }
}

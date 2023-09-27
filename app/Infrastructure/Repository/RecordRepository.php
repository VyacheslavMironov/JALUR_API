<?php
namespace App\Infrastructure\Repository;

use App\DTO\Records\CreateRecordsDTO;
use App\DTO\Records\ShowRecordsDTO;
use App\DTO\Records\UpdateRecordsDTO;
use App\DTO\Records\DeleteRecordsDTO;
use App\Domain\IRepository\IRecordsRepository;
use App\DTO\User\UpdateUserDTO;
use App\Models\Record;

final class RecordRepository implements IRecordsRepository
{
    public function Create(CreateRecordsDTO $context)
    {
        $model = new Record();
        $model->ScheduleId = $context->ScheduleId;
        $model->UserId = $context->UserId;
        $model->save();
        return $model;
    }

    public function Show(ShowRecordsDTO $context)
    {
        return Record::find($context->Id);
    }

    public function All()
    {
        return Record::get();
    }

    public function Update(UpdateRecordsDTO $context)
    {
        $model = Record::find($context->Id);
        $model->ScheduleId = $context->ScheduleId;
        $model->UserId = $context->UserId;
        $model->save();
        return $model;
    }

    public function Delete(DeleteRecordsDTO $context)
    {
        $model = Record::find($context->Id);
        $model->delete();
        return $model;
    }

    public function ShowBySchedule(int $schedule_id)
    {
        $model = Record::where('ScheduleId', $schedule_id)->get();
        return $model;
    }
}

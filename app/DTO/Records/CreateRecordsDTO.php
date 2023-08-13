<?php
namespace App\DTO\Records;

final class CreateRecordsDTO
{
    public int $ScheduleId;
    public int $UserId;

    public function __construct(int $ScheduleId, int $UserId)
    {
        $this->ScheduleId = $ScheduleId;
        $this->UserId = $UserId;
    }
}

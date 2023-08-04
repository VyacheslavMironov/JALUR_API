<?php
namespace App\DTO\Records;

final class UpdateRecordsDTO
{
    public int $Id;
    public int $ScheduleId;
    public int $UserId;

    public function __construct(int $Id, int $ScheduleId, int $UserId)
    {
        $this->Id = $Id;
        $this->ScheduleId = $ScheduleId;
        $this->UserId = $UserId;
    }
}

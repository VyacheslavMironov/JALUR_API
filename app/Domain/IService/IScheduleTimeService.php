<?php

namespace App\Domain\IService;

interface IScheduleTimeService
{
    public function CreateAction(\App\DTO\ScheduleTime\CreateScheduleTimeDTO $context);
    public function ShowAction(\App\DTO\ScheduleTime\ShowScheduleTimeDTO $context);
    public function AllAction();
    public function UpdateAction(\App\DTO\ScheduleTime\UpdateScheduleTimeDTO $context);
    public function DeleteAction(\App\DTO\ScheduleTime\DeleteScheduleTimeDTO $context);
}

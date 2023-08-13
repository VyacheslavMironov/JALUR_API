<?php

namespace App\Domain\IRepository;

interface IScheduleTimeRepository
{
    public function Create(\App\DTO\ScheduleTime\CreateScheduleTimeDTO $context);
    public function Show(\App\DTO\ScheduleTime\ShowScheduleTimeDTO $context);
    public function All();
    public function Update(\App\DTO\ScheduleTime\UpdateScheduleTimeDTO $context);
    public function Delete(\App\DTO\ScheduleTime\DeleteScheduleTimeDTO $context);
}

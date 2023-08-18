<?php
namespace App\Domain\IRepository;

interface IScheduleRepository
{
    public function Create(\App\DTO\Schedules\CreateScheduleDTO $context);
    public function Show(\App\DTO\Schedules\ShowScheduleDTO $context);
    public function ShowByHall(\App\DTO\Schedules\ShowHallScheduleDTO $context);
    public function Update(\App\DTO\Schedules\UpdateScheduleDTO $context);
    public function Delete(\App\DTO\Schedules\DeleteScheduleDTO $context);
}

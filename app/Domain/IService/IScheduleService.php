<?php
namespace App\Domain\IService;

interface IScheduleService
{
    public function CreateAction(\App\DTO\Schedules\CreateScheduleDTO $context);
    public function ShowAction(\App\DTO\Schedules\ShowScheduleDTO $context);
    public function ShowByHallAction(\App\DTO\Schedules\ShowHallScheduleDTO $context);
    public function ShowByDateAction(\App\DTO\Schedules\ShowDateScheduleDTO $context);
    public function AllAction();
    public function UpdateAction(\App\DTO\Schedules\UpdateScheduleDTO $context);
    public function DeleteAction(\App\DTO\Schedules\DeleteScheduleDTO $context);
}

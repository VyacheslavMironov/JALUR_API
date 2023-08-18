<?php

namespace App\Domain\IService;

interface IHallService
{
    public function CreateAction(\App\DTO\Hall\CreateHallDTO $context);
    public function UpdateAction(\App\DTO\Hall\UpdateHallDTO $context);
    public function DeleteAction(\App\DTO\Hall\DeleteHallDTO $context);
    public function ShowAction(\App\DTO\Hall\ShowHallDTO $context);
    public function AllAction();
}

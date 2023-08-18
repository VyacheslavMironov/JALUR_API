<?php

namespace App\Domain\IRepository;

interface IHallRepository
{
    public function Create(\App\DTO\Hall\CreateHallDTO $context);
    public function Update(\App\DTO\Hall\UpdateHallDTO $context);
    public function Delete(\App\DTO\Hall\DeleteHallDTO $context);
    public function Show(\App\DTO\Hall\ShowHallDTO $context);
    public function All();
}

<?php
namespace App\Domain\IService;

interface IRecordsService
{
    public function CreateAction(\App\DTO\Records\CreateRecordsDTO $context);
    public function ShowAction(\App\DTO\Records\ShowRecordsDTO $context);
    public function AllAction();
    public function UpdateAction(\App\DTO\Records\UpdateRecordsDTO $context);
    public function DeleteAction(\App\DTO\Records\DeleteRecordsDTO $context);
}

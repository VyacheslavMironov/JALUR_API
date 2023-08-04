<?php
namespace App\Domain\IRepository;

interface IRecordsRepository
{
    public function Create(\App\DTO\Records\CreateRecordsDTO $context);
    public function Show(\App\DTO\Records\ShowRecordsDTO $context);
    public function All();
    public function Update(\App\DTO\Records\UpdateRecordsDTO $context);
    public function Delete(\App\DTO\Records\DeleteRecordsDTO $context);
}

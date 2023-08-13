<?php
namespace App\DTO\Records;

final class DeleteRecordsDTO
{
    public int $Id;

    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
}

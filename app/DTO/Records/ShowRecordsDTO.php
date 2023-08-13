<?php
namespace App\DTO\Records;

final class ShowRecordsDTO
{
    public int $Id;

    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
}

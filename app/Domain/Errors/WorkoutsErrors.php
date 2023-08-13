<?php
namespace App\Domain\Errors;

use Exception;

final class WorkoutsErrors
{
    public static function UniqueHandler()
    {
        throw new Exception("Такое название уже имеется!");
    }
}
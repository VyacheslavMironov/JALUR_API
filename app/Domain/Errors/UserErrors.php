<?php
namespace App\Domain\Errors;

use Exception;

final class UserErrors
{
    public static function PasswordNotHandler()
    {
        throw new Exception("Пароль введён не правильно!");
    }

    public static function SetCodeHandler()
    {
        throw new Exception("Не удалось отправить код по данному номеру!");
    }

    public static function NotPhoneHandler()
    {
        throw new Exception("Нет такого пользователя!");
    }
}
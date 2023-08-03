<?php
namespace App\Domain\Service;

use App\Domain\IService\IValidateService;
use Illuminate\Http\Request;

class ValidateService implements IValidateService
{
    protected const USER_VALIDATE_RULE = [
        "FirstName" => "required|min:2|max|40",
        "LastName" => "required|min:2|max|40",
        "Phone" => "required",
        "Role" => "required",
        "Password" => "required|min:8|max|20"
    ];
    
    protected const USER_VALIDATE_ERRORS = [
        // REQUIRED MESSAGE
        "FirstName.required" => "Поле ввода имени обязательно к заполнению!",
        "LastName.required" => "Поле ввода фамилии обязательно к заполнению!",
        "Phone.required" => "Поле ввода номера телефона обязательно к заполнению!\nФормат\n\t+x (xxx) xxx-xx-xx",
        "Role.required" => "Поле выбора роли обязательно к заполнению!",
        "Password.required" => "Поле ввода пароля обязательно к заполнению!",
        // MIN MESSAGE
        "FirstName.min" => "Поле ввода имени не может быть меньше :min символов!",
        "LastName.min" => "Поле ввода фамилии не может быть меньше :min символов!",
        "Password.min" => "Пароль короткий! Приемлемая длинна пароля должна быть не меньше :min символов!",
        // MAX MESSAGE
        "FirstName.min" => "Поле ввода имени не может быть больше :max символов!",
        "LastName.min" => "Поле ввода фамилии не может быть больше :max символов!",
        "Password.min" => "Пароль длинный! Приемлемая длинна пароля должна превышать :max символов!"
    ];

    protected const AUTH_USER_VALIDATE_RULE = [
        "Phone" => "required",
        "Password" => "required|min:8|max|20"
    ];

    protected const AUTH_USER_VALIDATE_ERRORS = [
        // REQUIRED MESSAGE
        "Phone.required" => "Поле ввода номера телефона обязательно к заполнению!\nФормат\n\t+x (xxx) xxx-xx-xx",
        "Password.required" => "Поле ввода пароля обязательно к заполнению!",
        // MIN MESSAGE
        "Password.min" => "Пароль короткий! Приемлемая длинна пароля должна быть не меньше :min символов!",
        // MAX MESSAGE
        "Password.min" => "Пароль длинный! Приемлемая длинна пароля должна превышать :max символов!"
    ];

    protected const LOGOUT_USER_VALIDATE_RULE = [
        "Id" => "required",
    ];

    protected const LOGOUT_USER_VALIDATE_ERRORS = [
        // REQUIRED MESSAGE
        "Id.required" => "Ошибка сервера!",
    ];

    protected const CODE_USER_VALIDATE_RULE = [
        "Phone" => "required"
    ];

    protected const CODE_USER_VALIDATE_ERRORS = [
        // REQUIRED MESSAGE
        "Phone.required" => "Поле ввода номера телефона обязательно к заполнению!\nФормат\n\t+x (xxx) xxx-xx-xx"
    ];

    public function UserValidateAction(Request $request)
    {
        return $request->validate(self::USER_VALIDATE_RULE, self::USER_VALIDATE_ERRORS);
    }

    public function AuthUserValidateAction(Request $request)
    {
        return $request->validate(self::AUTH_USER_VALIDATE_RULE, self::AUTH_USER_VALIDATE_ERRORS);
    }

    public function CodeUserValidateAction(Request $request)
    {
        return $request->validate(self::CODE_USER_VALIDATE_RULE, self::CODE_USER_VALIDATE_ERRORS);
    }

    public function LogoutUserValidateAction(Request $request)
    {
        return $request->validate(self::LOGOUT_USER_VALIDATE_RULE, self::LOGOUT_USER_VALIDATE_ERRORS);
    }
}
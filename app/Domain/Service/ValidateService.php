<?php
namespace App\Domain\Service;

use App\Domain\IService\IValidateService;
use Illuminate\Http\Request;

class ValidateService implements IValidateService
{
    /**
     * 
     */
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

    
    public function UserValidateAction(Request $request)
    {
        return $request->validate(self::USER_VALIDATE_RULE, self::USER_VALIDATE_ERRORS);
    }



    /**
     * 
     */
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
    public function AuthUserValidateAction(Request $request)
    {
        return $request->validate(self::AUTH_USER_VALIDATE_RULE, self::AUTH_USER_VALIDATE_ERRORS);
    }



    /**
     * 
     */
    protected const CODE_USER_VALIDATE_RULE = [
        "Phone" => "required"
    ];

    protected const CODE_USER_VALIDATE_ERRORS = [
        // REQUIRED MESSAGE
        "Phone.required" => "Поле ввода номера телефона обязательно к заполнению!\nФормат\n\t+x (xxx) xxx-xx-xx"
    ];

    public function CodeUserValidateAction(Request $request)
    {
        return $request->validate(self::CODE_USER_VALIDATE_RULE, self::CODE_USER_VALIDATE_ERRORS);
    }



    /**
     * 
     */
    protected const LOGOUT_USER_VALIDATE_RULE = [
        "Id" => "required",
    ];

    protected const LOGOUT_USER_VALIDATE_ERRORS = [
        // REQUIRED MESSAGE
        "Id.required" => "Ошибка сервера!",
    ];

    public function LogoutUserValidateAction(Request $request)
    {
        return $request->validate(self::LOGOUT_USER_VALIDATE_RULE, self::LOGOUT_USER_VALIDATE_ERRORS);
    }



    /**
     * 
     */
    protected const WORKOUTS_VALIDATE_RULE = [
        "TypeWorkoutId" => "required",
        "Name" => "required",
        "Image" => "required",
        "Description" => "required",
    ];

    protected const WORKOUTS_VALIDATE_ERRORS = [
        // REQUIRED MESSAGE
        "TypeWorkoutId.required" => "Поле обязательно для заполнения!",
        "Name.required" => "Укажите имя!",
        "Image.required" => "Выберите обложку!",
        "Description.required" => "Поле описания обязательно для заполнения!",
    ];

    public function WorkoutsValidateAction(Request $request)
    {
        return $request->validate(self::WORKOUTS_VALIDATE_RULE, self::WORKOUTS_VALIDATE_ERRORS);
    }



    /**
     * 
     */
    protected const SCHEDULES_VALIDATE_RULE = [
        "TypeWorkoutId" => "required",
        "Couch" => "required",
        "WeekDay" => "required",
        "StartDate" => "required",
        "StartTime" => "required",
        "EndTime" => "required",
    ];

    protected const SCHEDULES_VALIDATE_ERRORS = [
        // REQUIRED MESSAGE
        "TypeWorkoutId.required" => "Поле обязательно для заполнения!",
        "Couch.required" => "Поле обязательно для заполнения!",
        "WeekDay.required" => "Укажите день недели!",
        "StartDate.required" => "Укажите дату!",
        "StartTime.required" => "Укажите время старта!",
        "EndTime.required" => "Укажите время окончания!",
    ];
    public function ScheduleValidateAction(Request $request)
    {
        return $request->validate(self::SCHEDULES_VALIDATE_RULE, self::SCHEDULES_VALIDATE_ERRORS);
    }



    /**
     * 
     */
    protected const RECORDS_VALIDATE_RULE = [
        "ScheduleId" => "required",
        "UserId" => "required"
    ];

    protected const RECORDS_VALIDATE_ERRORS = [
        // REQUIRED MESSAGE
        "ScheduleId.required" => "Поле обязательно для заполнения!",
        "UserId.required" => "Поле обязательно для заполнения!",
    ];
    public function RecordsValidateAction(Request $request)
    {
        return $request->validate(self::RECORDS_VALIDATE_RULE, self::RECORDS_VALIDATE_ERRORS);
    }



    /**
     * 
     */
    protected const HISTORY_WORKOUTS_VALIDATE_RULE = [
        "ScheduleId" => "required",
        "UserId" => "required"
    ];

    protected const HISTORY_WORKOUTS_VALIDATE_ERRORS = [
        // REQUIRED MESSAGE
        "TypeWorkoutId.required" => "Поле обязательно для заполнения!",
        "WorkoutId.required" => "Поле обязательно для заполнения!",
        "UserId.required" => "Поле обязательно для заполнения!",
        "Active.required" => "Поле обязательно для заполнения!",
        "CountFreezingDay.required" => "Поле обязательно для заполнения!",
    ];
    public function HistoryWorkoutsValidateAction(Request $request)
    {
        return $request->validate(self::HISTORY_WORKOUTS_VALIDATE_RULE, self::HISTORY_WORKOUTS_VALIDATE_ERRORS);
    }
}
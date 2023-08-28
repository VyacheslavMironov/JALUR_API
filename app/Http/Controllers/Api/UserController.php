<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Domain\Errors\UserErrors;
use App\Domain\Service\UserService;
use App\Domain\Service\ValidateService;
use App\DTO\User\AuthUserDTO;
use App\DTO\User\CreateUserDTO;
use App\DTO\User\SearchUserByPhoneDTO;
use App\DTO\User\CodeUserDTO;
use App\DTO\User\UpdateUserDTO;
use App\DTO\User\LogoutUserDTO;
use App\Models\User;

class UserController extends Controller
{
    public function CreateAction(Request $request, UserService $service, ValidateService $validate)
    {
        $validate->UserValidateAction($request);
        return $service->CreateAction(
            new CreateUserDTO(
                $request->FirstName,
                $request->LastName,
                $request->Image ? $request->file('Image')->store('uploads', 'public') : null,
                $request->Description ? $request->Description : null,
                $request->Weight ? $request->Weight : null,
                $request->Height ? $request->Height : null,
                $request->Age ? $request->Age : null,
                $request->Gender,
                $request->Phone,
                $request->Role,
                null
            )
        );
    }

    public function AuthAction(Request $request, UserService $service, ValidateService $validate)
    {
        $validate->AuthUserValidateAction($request);
        $user = $service->SearchAction(new SearchUserByPhoneDTO($request->Phone));
        if (Hash::check($request->Password, $user[0]->Password))
        {
            return $service->AuthAction(
                new AuthUserDTO(
                    $request->Phone,
                    $request->Password
                )
            );
        }
        else
        {
            return UserErrors::PasswordNotHandler();
        }
    }

    public function CodeAction(Request $request, UserService $service, ValidateService $validate)
    {
        $validate->CodeUserValidateAction($request);
        if ($service->SearchAction(new SearchUserByPhoneDTO($request->Phone)))
        {
            return $service->CodeAction(
                new CodeUserDTO($request->Phone)
            );
        }
        else
        {
            UserErrors::NotPhoneHandler();
        }
    }

    public function UpdateAction(Request $request, UserService $service, ValidateService $validate)
    {
        $validate->UserValidateAction($request);
        return $service->UpdateAction(
            new UpdateUserDTO(
                $request->Id,
                $request->FirstName,
                $request->LastName,
                $request->Image ? $request->Image : null,
                $request->Description ? $request->Description : null,
                $request->Weight ? $request->Weight : null,
                $request->Height ? $request->Height : null,
                $request->Age ? $request->Age : null,
                $request->Gender,
                $request->Phone,
                $request->Role,
                $request->Password
            )
        );
    }

    public function LogoutAction(int $user_id, UserService $service)
    {
        return $service->LogoutAction(
            new LogoutUserDTO($user_id)
        );
    }

    public function GetRoleAction(string $role, UserService $service)
    {
        return $service->AllTypeAction($role);
    }
    public function ShowAction(int $id, UserService $service)
    {
        return $service->ShowAction($id);
    }
}

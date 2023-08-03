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

class UserController extends Controller
{
    public function CreateAction(Request $request, UserService $service, ValidateService $validate)
    {
        $validate->UserValidateAction($request);
        return $service->CreateAction(
            new CreateUserDTO(
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

    public function AuthAction(Request $request, UserService $service, ValidateService $validate)
    {
        $validate->AuthUserValidateAction($request);
        if (Hash::check($service->SearchAction(
            new SearchUserByPhoneDTO($validate['Phone'])), $validate['Password']))
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
            UserErrors::PasswordNotHandler();
        }
    }

    public function CodeAction(Request $request, UserService $service, ValidateService $validate)
    {
        $validate->CodeUserValidateAction($request);
        if ($service->SearchAction(new SearchUserByPhoneDTO($validate['Phone'])))
        {
            return $service->CodeAction(
                new CodeUserDTO($validate['Phone'])
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

    public function LogoutAction(int $id, UserService $service)
    {
        return $service->LogoutAction(
            new LogoutUserDTO($id)
        );
    }
}

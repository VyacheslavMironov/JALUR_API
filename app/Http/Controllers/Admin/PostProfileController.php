<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Service\UserService;
use App\DTO\User\AuthUserDTO;
use App\DTO\User\LogoutUserDTO;
use App\DTO\User\SearchUserByPhoneDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\LogoutRequest;
use Illuminate\Http\Request;

class PostProfileController extends Controller
{
    public function auth(LoginRequest $request, UserService $service)
    {
        $context = $request->validated();
        $user = $service->SearchAction(
            new SearchUserByPhoneDTO(
                $context['phone']
            )
        );
        try
        {
            $token = $service->AuthAction(
                new AuthUserDTO(
                    $context['phone'],
                    $context['password']
                )
            );
            // Запись сессии
            foreach ($user as $item)
            {
                session([
                    "id" => $item->id,
                    "first_name" => $item->FirstName,
                    "last_name" => $item->LastName,
                    "phone" => $item->Phone,
                    "role" => $item->Role,
                    "image" => $item->Image,
                ]);
            }
            $request->session()->put("BearerToken", "Bearer ".$token);
            return redirect()->route('admin.schedules');
        }
        catch (\Exception)
        {
            return back()->withInput()->with('error', 'Ошибка входа!');
        }
    }

    public function logout(LogoutRequest $request, UserService $service)
    {
        $context = $request->validated();
        if ($service->LogoutAction(new LogoutUserDTO($context['id'])))
        {
            $request->session()->remove("id");
            $request->session()->remove("first_name");
            $request->session()->remove("last_name");
            $request->session()->remove("phone");
            $request->session()->remove("role");
            $request->session()->remove("image");
        }
        return redirect()->route('admin.login');
    }
}

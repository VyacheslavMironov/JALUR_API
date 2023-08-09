<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Service\UserService;
use App\DTO\User\UpdateUserDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;

class PostUserController extends Controller
{
    public function update(UpdateUserRequest $request, UserService $service)
    {
        $context = $request->validated();
        $service->UpdateAction(
            new UpdateUserDTO(
                $context['id'],
                $context['first_name'],
                $context['last_name'],
                null,
                null,
                $context['weight'],
                $context['height'],
                $context['age'],
                $context['gender'],
                $context['phone'],
                $context['role'],
            )
        );
        return back();
    }
}

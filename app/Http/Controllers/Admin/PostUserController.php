<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Service\UserService;
use App\DTO\User\CreateUserDTO;
use App\DTO\User\UpdateUserDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;

class PostUserController extends Controller
{
    public function create(Request $not_necessary, CreateUserRequest $request, UserService $service)
    {
        $request->validated();
        $service->CreateAction(
            new CreateUserDTO(
                $request['first_name'],
                $request['last_name'],
                $not_necessary->image ? $not_necessary->file('image')->store('uploads', 'public') : null,
                $not_necessary->description ? $not_necessary->description : null,
                $request['weight'],
                $request['height'],
                $request['age'],
                $request['gender'],
                $request['phone'],
                $request['role'],
                $request['password']
            )
        );
        return back()->with('success', 'Данные добавлены!');
    }

    public function update(Request $not_necessary, UpdateUserRequest $request, UserService $service)
    {
        $context = $request->validated();
        $image = null;
        if ($not_necessary->image)
        {
            $image = $not_necessary->file('image')->store('uploads', 'public');
        }
        else
        {
            $image = $not_necessary->image_old ? $not_necessary->image_old : $image;
        }
        $service->UpdateAction(
            new UpdateUserDTO(
                $context['id'],
                $context['first_name'],
                $context['last_name'],
                $image,
                $not_necessary->description ? $not_necessary->description : null,
                $context['weight'],
                $context['height'],
                $context['age'],
                $context['gender'],
                $context['phone'],
                $context['role'],
            )
        );
        return back()->with('success', 'Данные обновлены!');
    }
}

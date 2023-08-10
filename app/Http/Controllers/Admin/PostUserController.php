<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Service\UserService;
use App\DTO\User\UpdateUserDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;

class PostUserController extends Controller
{
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
        return back();
    }
}

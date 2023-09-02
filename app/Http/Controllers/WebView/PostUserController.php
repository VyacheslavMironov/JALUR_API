<?php

namespace App\Http\Controllers\WebView;

use App\Domain\Service\UserService;
use App\DTO\User\CreateUserDTO;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostUserController extends Controller
{
    public function create(Request $request, UserService $service)
    {
        $service->CreateAction(
            new CreateUserDTO(
                $request->FirstName,
                $request->LastName,
                null,
                null,
                $request->Weight,
                $request->Height,
                $request->Age,
                $request->Gender,
                $request->Phone,
                'Клиент',
                null
            )
        );
        return redirect()
            ->route('web_view.success.create_user');
    }
    

}

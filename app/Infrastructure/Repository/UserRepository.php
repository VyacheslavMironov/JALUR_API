<?php
namespace App\Infrastructure\Repository;

use App\DTO\User\CreateUserDTO;
use App\DTO\User\AuthUserDTO;
use App\DTO\User\SearchUserByPhoneDTO;
use App\DTO\User\CodeUserDTO;
use App\DTO\User\UpdateUserDTO;
use App\DTO\User\LogoutUserDTO;
use App\Domain\IRepository\IUserRepository;
use App\Models\User;

final class UserRepository implements IUserRepository
{
    public function Create(CreateUserDTO $context)
    {
        $model = new User();
        $model->FirstName = $context->FirstName;
        $model->LastName = $context->LastName;
        $model->Image = $context->Image;
        $model->Description = $context->Description;
        $model->Weight = $context->Weight;
        $model->Height = $context->Height;
        $model->Age = $context->Age;
        $model->Gender = $context->Gender;
        $model->Phone = $context->Phone;
        $model->Role = $context->Role;
        $model->Password = $context->Password;
        $model->save();
        return $model;
    }

    public function Search(SearchUserByPhoneDTO $context)
    {
        return User::where('Phone', $context->Phone)->get();
    }

    public function Auth(AuthUserDTO $context)
    {
        return User::createBearerTocken(
            User::where('Phone', $context->Phone)->first()
        );
    }

    public function AllType(string $type)
    {
        return User::where('Role', $type)->get();
    }

    public function Show(int $id)
    {
        return User::find($id);
    }

    public function UpdateCode(CodeUserDTO $context, string $new_password)
    {
        $model = User::where('Phone', $context->Phone)->get();
        foreach ($model as $value) {
            $value->Password = $new_password;
            $value->save();
        }
        return $model;
    }

    public function Update(UpdateUserDTO $context)
    {
        $model = User::find($context->Id);
        if (!is_null($context->FirstName))
        {
            $model->FirstName = $context->FirstName;
        }
        if (!is_null($context->LastName))
        {
            $model->LastName = $context->LastName;
        }
        if (!is_null($context->Image))
        {
            $model->Image = $context->Image;
        }
        if (!is_null($context->Description))
        {
            $model->Description = $context->Description;
        }
        if (!is_null($context->Weight))
        {
            $model->Weight = $context->Weight;
        }
        if (!is_null($context->Height))
        {
            $model->Height = $context->Height;
        }
        if (!is_null($context->Age))
        {
            $model->Age = $context->Age;
        }
        if (!is_null($context->Phone))
        {
            $model->Phone = $context->Phone;
        }
        if (!is_null($context->Role))
        {
            $model->Role = $context->Role;
        }

        $model->save();
        return $model;
    }

    public function Logout(LogoutUserDTO $context)
    {
        return User::deleteBearerTocken(
            User::find($context->Id)
        );
    }
}

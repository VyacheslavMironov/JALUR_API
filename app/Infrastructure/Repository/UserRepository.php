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

    public function Logout(LogoutUserDTO $context)
    {
        return User::deleteBearerTocken(
            User::find($context->Id)
        ); 
    }
}
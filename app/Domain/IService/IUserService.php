<?php
namespace App\Domain\IService;

interface IUserService
{
    public function CreateAction(\App\DTO\User\CreateUserDTO $context);
    public function AuthAction(\App\DTO\User\AuthUserDTO $context);
    public function SearchAction(\App\DTO\User\SearchUserByPhoneDTO $context);
    public function CodeAction(\App\DTO\User\CodeUserDTO $context);
    public function UpdateAction(\App\DTO\User\UpdateUserDTO $context);
    public function LogoutAction(\App\DTO\User\LogoutUserDTO $context);
}

<?php
namespace App\Domain\IRepository;

interface IUserRepository
{
    public function Create(\App\DTO\User\CreateUserDTO $context);
    public function Auth(\App\DTO\User\AuthUserDTO $context);
    public function Search(\App\DTO\User\SearchUserByPhoneDTO $context);
    public function UpdateCode(\App\DTO\User\CodeUserDTO $context, string $new_password);
    public function Update(\App\DTO\User\UpdateUserDTO $context);
    public function Logout(\App\DTO\User\LogoutUserDTO $context);
}

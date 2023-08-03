<?php
namespace App\Domain\Service;

use App\DTO\User\CreateUserDTO;
use App\DTO\User\AuthUserDTO;
use App\DTO\User\SearchUserByPhoneDTO;
use App\DTO\User\CodeUserDTO;
use App\DTO\User\UpdateUserDTO;
use App\DTO\User\LogoutUserDTO;
use App\Infrastructure\Repository\UserRepository;
use App\Domain\IService\IUserService;

class UserService implements IUserService
{
    protected UserRepository $repository;

    public function __construct()
    {
        $this->repository = new UserRepository();
    }

    public static function generateRandomString($length = 6) {
        $characters = '0123456789abcde0123456789fghijklm0123456789nopq0123456789rstuvwxy0123456789zABCDEFGHIJKLMNOP0123456789QRSTUV0123456789WXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function CreateAction(CreateUserDTO $context)
    {
        return $this->repository->Create($context);
    }

    public function AuthAction(AuthUserDTO $context)
    {
        return $this->repository->Auth($context);
    }

    public function SearchAction(SearchUserByPhoneDTO $context)
    {
        return $this->repository->Search($context);
    }

    public function CodeAction(CodeUserDTO $context)
    {
        $new_password = self::generateRandomString();
        return $this->repository->UpdateCode($context, $new_password);
    }

    public function UpdateAction(UpdateUserDTO $context)
    {
        return $this->repository->Update($context);
    }

    public function LogoutAction(LogoutUserDTO $context)
    {
        return $this->repository->Logout($context);
    }
}

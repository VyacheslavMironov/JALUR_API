<?php 
namespace App\Domain\IService;

use Illuminate\Http\Request;

interface IValidateService
{
    public function UserValidateAction(Request $request);
    public function AuthUserValidateAction(Request $request);
    public function CodeUserValidateAction(Request $request);
    public function LogoutUserValidateAction(Request $request);
}
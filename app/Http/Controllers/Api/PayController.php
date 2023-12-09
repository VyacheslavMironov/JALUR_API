<?php

namespace App\Http\Controllers\Api;

use App\Domain\Service\PayService;
use App\DTO\Pay\PayRequestDTO;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayController extends Controller
{
    public function Pay(Request $request, PayService $payService)
    {
        return $payService->Pay(
            new PayRequestDTO(
                $request->UserId,
                $request->Value,
                $request->RedirectUrl,
                $request->Description
            )
        );
    }
}

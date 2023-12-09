<?php

namespace App\Http\Controllers\Api;

use App\Domain\Service\PayService;
use App\DTO\Pay\PayRequestDTO;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayController extends Controller
{
    public function pay(Request $request, PayService $payService)
    {
        return $payService->pay(
            new PayRequestDTO(
                $request->value,
                $request->redirect_url,
                $request->description
            )
        );
    }
}

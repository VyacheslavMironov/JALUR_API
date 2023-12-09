<?php

namespace App\Infrastructure\Repository;

use App\DTO\Pay\PayResponseDTO;
use App\Models\PayInfoModel;

class PayRepository
{
    public function create(PayResponseDTO $context)
    {
        $model = new PayInfoModel();
        $model->PayId = $context->PayId;
        $model->StatusPay = $context->StatusPay;
        $model->DatePay = $context->DatePay;
        $model->UserId = $context->UserId;
        $model->Value = $context->Value;
        $model->Description = $context->Description;
        $model->save();
        return $model;
    }
}

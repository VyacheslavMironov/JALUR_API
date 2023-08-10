<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\Service\RecordsService;
use App\Domain\Service\ValidateService;
use App\DTO\Records\CreateRecordsDTO;
use App\DTO\Records\ShowRecordsDTO;
use App\DTO\Records\UpdateRecordsDTO;
use App\DTO\Records\DeleteRecordsDTO;

class RecordController extends Controller
{
    public function CreateAction(Request $request, RecordsService $service, ValidateService $validate)
    {
        $validate->RecordsValidateAction($request);
        return $service->CreateAction(
            new CreateRecordsDTO(
                $request->ScheduleId,
                $request->UserId
            )
        );
    }

    public function ShowAction(int $record_id, RecordsService $service)
    {
        return $service->ShowAction(
            new ShowRecordsDTO($record_id)
        );
    }

    public function AllAction(RecordsService $service)
    {
        return $service->AllAction();
    }

    public function UpdateAction(Request $request, RecordsService $service, ValidateService $validate)
    {
        $validate->RecordsValidateAction($request);
        return $service->UpdateAction(
            new UpdateRecordsDTO(
                $request->Id,
                $request->ScheduleId,
                $request->UserId
            )
        );
    }

    public function DeleteAction(int $record_id, RecordsService $service)
    {
        return $service->DeleteAction(
            new DeleteRecordsDTO($record_id)
        );
    }
}

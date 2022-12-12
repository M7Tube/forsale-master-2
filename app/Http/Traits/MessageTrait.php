<?php

namespace App\Http\Traits;

trait MessageTrait
{
    public function success($DataName, $data)
    {
        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => 'Successfull Request',
            'data' => [
                $DataName => $data
            ],
        ], 200);
    }
    public function fails()
    {
        return response()->json([
            'status' => 'fails',
            'code' => 200,
            'message' => 'There Is Something Wronge',
        ], 200);
    }
}

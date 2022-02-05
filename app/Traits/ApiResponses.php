<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

trait ApiResponses
{
    public function querySuccess($data)//index edit
    {
        return response()->json(['data' => $data], 200);
    }

    public function actionSuccess($massage)//update store destroy
    {
        return response()->json(['massage' => $massage], 201);
    }

    public function sendError($message, $code) //on errors
    {
        return response()->json(['errors' => $message], $code);
    }

    public function validator($validator)//create validator
    {
        return response()->json(['validator' => $validator], 200);
    }

    public function validatorError($validatorError)//store & update on validatorError
    {
        return response()->json(['validator' => $validatorError], 400);
    }


}

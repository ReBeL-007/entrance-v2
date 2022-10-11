<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Form;

class FormApiController extends Controller
{
    public function verifyEntrant($symbol_no) {
        $form = Form::where('symbol_no', $symbol_no)->latest()->first();
        return Response()->json(array(
            'form_details' => $form,
        ));
    }
}

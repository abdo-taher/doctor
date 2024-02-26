<?php

namespace App\Http\Controllers;

use App\Models\ContanctForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{

    public function store(Request $request){
        $vaild = $request->validate([
            'text'=>['required', 'string','max:255'],
            'email'=>['required', 'email'],
            'textarea'=>['required', 'string'],
        ]);
        ContanctForm::create($vaild);
        return redirect()->back()->with('success', 'تم ارسال الرسالة بنجاح');

    }

}

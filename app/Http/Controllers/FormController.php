<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $form =new Form;
        $form->firstName=$request->input('firstName');
        $form->lastName=$request->input('lastName');
        $form->email=$request->input('email');
        $form->phno=$request->input('phno');

        $form->save();

        return redirect('/thankyou')->with('success', 'form created successfully!');
    }
}

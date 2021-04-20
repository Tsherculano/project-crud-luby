<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends LoggedController
{
    public function index()
    {
        return view('student.list');
    }

    public function add()
    {
        return view('student.add');
    }

    public function edit(Request $request, $id)
    {
        return view('student.edit', ['id' => $id]);
    }
}

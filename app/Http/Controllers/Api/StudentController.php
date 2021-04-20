<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Services\StudentService;

class StudentController extends Controller
{
    public function add()
    {
        $data = request();
        StudentService::save($data);
        return 'ok';
    }

    public function all()
    {
        $students = StudentService::all();
        return response()->json($students);
    }

    public function edit($id)
    {
        $student = StudentService::getByID($id);
        return response()->json($student);
    }

    public function update()
    {
        $data = request();
        StudentService::update($data);
        return 'ok';
    }

    public function delete($id)
    {
        StudentService::delete($id);
        return 'ok';
    }
}



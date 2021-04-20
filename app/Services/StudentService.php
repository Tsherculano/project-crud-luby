<?php

namespace App\Services;
use App\Models\Student;

class StudentService
{
    public static function save($data)
    {
        $student = new Student;
        $student->name = $data->name;
        $student->registration = $data->registration;
        $student->grade = $data->grade;
        $student->gender = $data->gender;
        $student->age = $data->age;
        $student->cpf = $data->cpf;
        $student->fone = $data->fone;
        $student->address = $data->address;
        return $student->save();
    }

    public static function getById($id)
    {
        return Student::find($id);
    }

    public static function all($pg = 5)
    {
        return Student::paginate($pg);
    }

    public static function update($data)
    {
        $student = Student::find($data->id);
        $student->name = $data->name;
        $student->registration = $data->registration;
        $student->grade = $data->grade;
        $student->gender = $data->gender;
        $student->age = $data->age;
        $student->cpf = $data->cpf;
        $student->fone = $data->fone;
        $student->address = $data->address;
        return $student->update();
    }

    public static function delete($id)
    {
        return Student::find($id)->delete();
    }


}

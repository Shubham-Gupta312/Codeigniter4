<?php

namespace App\Controllers;
use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function index(): string
    {
        $student = new StudentModel();
        $data['students'] = $student->findAll();
        return view('Student/index', $data);
    }
    public function create()
    {
        return view('Student/create');
    }

    public function store()
    {
        $students = new StudentModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('contact'),
            'course' => $this->request->getPost('course'),
        ];
        $students->save($data);
        return redirect('students');
    }

}

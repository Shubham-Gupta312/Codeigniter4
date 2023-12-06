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
        return redirect('students')->with('status', 'Data Added Successfully!');
    }

    public function update($id = null)
    {
       $student = new StudentModel();
       $data['students'] = $student->find($id);
       return view('Student/update', $data);
    }

    public function edit($id = null)
    {
        $student = new StudentModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('contact'),
            'course' => $this->request->getPost('course'),
        ];
        $student->update($id, $data);
        return redirect('students')->to(base_url('students'))->with('status', 'Data Updated Successfully!');
    }

    public function delete($id = null)
    {
        $student = new StudentModel();
        $student->delete($id);
        return redirect('students')->back()->with('status', 'Data Deleted Successfully!');
    }

}

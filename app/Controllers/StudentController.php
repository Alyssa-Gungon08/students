<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Models\StudentModel;
class StudentController extends BaseController
{
    private $student;
    public function __construct()
    {
        $this->student = new \App\Models\StudentModel();
    }
    public function edit($id)
    {
        $data =[
            'student' => $this->student->findAll(),
            'stu' => $this->student->where('id', $id)->first(),
        ];
            return view('student', $data);

        
    }
    public function delete($id)
    {
        //echo $id;
        $this->student->delete($id);
        return redirect()->to('/student');
    }
    public function save()
    {
        $id =$_POST['id'];
        $data = [
            'Name'=>$this->request->getVar('Name'),      
            'Address'=>$this->request->getVar('Address'),
            'Number'=>$this->request->getVar('Number'),
            'Sex'=>$this->request->getVar('Sex'),
            'StudentId'=>$this->request->getVar('StudentId'),
            ];
        if($id!= null){
            $this->student->set($data)->where('id', $id)->update();
        }else{
            $this->student->save($data);
        }
        return redirect()->to('/student');
    
    }
    public function student($student)
    {
        echo $student;
    }
    public function Axi()
    {
        //return view('student');
        $data['student'] = $this->student->FindAll();
        return view('student',$data);
    }
    public function index()
    {
        //
    }
}

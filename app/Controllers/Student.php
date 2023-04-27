<?php

namespace App\Controllers;
use Config\Database;

class Student extends BaseController
{
    public function index(){
        $db = Database::connect();
        $query = $db->query(" Select * from student");
        $studentList = $query->getResultArray();
        var_dump($studentList);
        die();
        return view('student/index',['data'=>$studentList]);
    }
    public function new(){
        if(!$this->request->is('post')) return view('student/new');
    }
}
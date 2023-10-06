<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShowStudentRequest;
use App\Http\Requests\StoreStudentsRequest;
use App\Models\Student;
use App\Repository\StudentRepositoryInterface;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    protected $Student;

    public function __construct(StudentRepositoryInterface $Student)
    {
        $this->Student = $Student;
    }


    public function index()
    {
       return $this->Student->Get_Student();
    }


    public function create()
    {
        return $this->Student->Create_Student();
    }

    public function store(StoreStudentsRequest $request)
    {
       return $this->Student->Store_Student($request);
    }

    public function show($id){

     return $this->Student->Show_Student($id);

    }


    public function edit($id)
    {
       return $this->Student->Edit_Student($id);
    }


    public function update(StoreStudentsRequest $request)
    {
        return $this->Student->Update_Student($request);
    }


    public function destroy(Request $request)
    {
        return $this->Student->Delete_Student($request);
    }

    public function Get_classrooms($id)
    {
        return $this->Student->Get_classrooms($id);
    }

    public function Get_Sections($id)
    {
        return $this->Student->Get_Sections($id);
    }

    public function Upload_attachment(Request $request)
    {
        return $this->Student->Upload_attachment($request);
    }

    public function Download_attachment($studentsname,$filename)
    {
        return $this->Student->Download_attachment($studentsname,$filename);
    }

    public function Delete_attachment(Request $request)
    {
        return $this->Student->Delete_attachment($request);

    }




    public function getallstudent()
    {
        $respons=Student::all();

        // return view('dashboard.student.all_student')->with('all_students',$respons);
        return response([ 'success'=>true, 'studet'=>$respons  ]);
    }


    public function showstudent(ShowStudentRequest $request)
    {
        $id=$request->get('id');

        $respons= Student::where('students.id',$id)
        ->join("my__parents",'students.parent_id',"=","my__parents.id")
        ->join('Classrooms',"students.Classroom_id","=","Classrooms.id")
        ->get(['students.*',
                'Classrooms.name as class_room',
                'my__parents.name as parent_name'
        ])->first();

        if(!$respons)
        {
            return response(['success' => false, 'message' => 'not found']);
            // return view('dashboard.student.show_student')->with('all_students',$respons);
        }


        else{
            return response([ 'success'=>true, 'studet'=>$respons]);
            // return view('dashboard.student.show_student')->with('all_students',$respons);
        }
    }

}

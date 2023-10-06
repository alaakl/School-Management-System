<?php

namespace App\Http\Controllers\Teachers;
use App\Http\Controllers\Controller;
use App\Http\Requests\SearchTeacherRequest;
use App\Http\Requests\ShowTeacherRequest;
use App\Http\Requests\StoreTeachers;
use App\Models\Gender;
use App\Models\Specialization;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Repository\TeacherRepositoryInterface;

class TeacherController extends Controller
{
    protected $Teacher;

    public function __construct(TeacherRepositoryInterface $Teacher)
    {
        $this->Teacher = $Teacher;
    }

    public function index()
    {
        $Teachers = $this->Teacher->getAllTeachers();
        //$Teachers = Teacher::all();
        return view('pages.Teachers.Teachers',compact('Teachers'));
    }

    public function create()
    {
            $specializations = $this->Teacher->Getspecialization();
            $genders = $this->Teacher->GetGender();
            return view('pages.Teachers.create',compact('specializations','genders'));
    }


    public function store(StoreTeachers $request)
    {
      return $this->Teacher->StoreTeachers($request);
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $Teachers = $this->Teacher->editTeachers($id);
        $specializations = $this->Teacher->Getspecialization();
        $genders = $this->Teacher->GetGender();
        return view('pages.Teachers.edit',compact('Teachers','specializations','genders'));
    }


    public function update(Request $request)
    {
        return $this->Teacher->UpdateTeachers($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        return $this->Teacher->DeleteTeachers($request);
    }



    //                //شغل بريدي

    public function getallteacher()
    {
        $response=Teacher::all();

        return response()->json([ 'success'=>true, 'Teacher'=>$response  ]);
    }



    public function showteacher(ShowTeacherRequest $req)
    {
        $id=$req->get('id');
        $response=Subject::where('teacher_id',$id)
        ->join('teachers','subjects.teacher_id','=',"teachers.id")
        ->get(['subjects.*'])->first()
        ;

        if($response )
        {
            return response(['success'=>true, 'teacher is'=>$response]);
        }

        else{
            return response(['success'=>false, 'massage'=>'not found']);
        }
    }



    public function search(SearchTeacherRequest $req)
    {
        $response=Teacher::query();

        if($req->has('Name')){

            $response=$response->where('Name', $req->get('Name'));
        }

        if($req->has('Specialization_id')){

            $response=$response->where('Specialization_id', $req->get('Specialization_id'));
        }

        if($req->has('Gender_id')){

            $response=$response->where('Gender_id', $req->get('Gender_id'));
        }

        if($req->has('Joining_Date')){

            $response=$response->where('Joining_Date', $req->get('Joining_Date'));
        }

        if($req->has('Address')){

            $response=$response->where('Address', $req->get('Address'));
        }

        // if($req->has('gender')){

        //     $response=$response->where('gender', $req->get('gender'));
        // }

        $response=$response->get();

        if($response=='[]')
        {
            return response(['success'=>false, 'massage'=>'not found']);
        }

        return response(['success'=>true,'teacher'=>$response]);
    }


}

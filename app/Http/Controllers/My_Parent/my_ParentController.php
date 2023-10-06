<?php

namespace App\Http\Controllers\My_Parent;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeacherss;
use App\Models\Branche;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\My_Parent;
use App\Models\Nationalitie;
use App\Models\Section;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class my_ParentController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $My_Parent = My_Parent::all();
        $Nationality_parents = Nationalitie::all();
        // $student = Student::all();
        return view('pages.my__parents.my__parents', compact('My_Parent','Nationality_parents'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        // $List_Classes = $request->List_Classes;

        try {

            // $validated = $request->validated();


                $My_Parent = new My_Parent();

                $My_Parent->name = ['en' => $request->Name_en, 'ar' => $request->Name];

                $My_Parent->email                   =  $request->email;
                $My_Parent->password                =  $request->password;
                $My_Parent->relative_relation       =  $request->relative_relation;
                $My_Parent->Nationality_parents_id   =  $request->Nationality_parents_id;
                $My_Parent->Address_parents         =  $request->Address_parents;
                $My_Parent->number_phone            =  $request->number_phone;

                $My_Parent->save();


            toastr()->success(trans('messages.success'));
            return redirect()->route('Classrooms.index');
            // return request()->json(["key"=>$request],200,[]);
            // return $request->$List_Classes;

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    /*


    */


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return Response
     */

    public function update(Request $request)
    {
        try {

            // $validated = $request->validated();
        $Sections = My_Parent::findOrFail($request->id);

        $Sections->Name                   = ['ar' => $request->Name, 'en' => $request->Name_en];
        $Sections->relative_relation      = $request->relative_relation;
        $Sections->Nationality_parents_id = $request->Nationality_parents_id;
        $Sections->number_phones          = $request->number_phones;
        $Sections->Address_parents        = $request->Address_parents;
        $Sections->Nationality_parents_id = $request->Nationality_parents_id;
        $Sections->save();


            toastr()->success(trans('messages.Update'));
            return redirect()->route('add_parent.index');
        }
    catch
    (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(Request $request)
    {

        $My_Parent = My_Parent::findOrFail($request->id)->delete();
        toastr()->error(trans('messages.Delete'));
        return redirect()->route('Classrooms.index');

    }


    // public function delete_all(Request $request)
    // {
    //     $delete_all_id = explode(",", $request->delete_all_id);

    //     Classroom::whereIn('id', $delete_all_id)->Delete();
    //     toastr()->error(trans('messages.Delete'));
    //     return redirect()->route('Classrooms.index');
    //     // return response()->json(['status=>false', 'Message'=>'input error'], 400);
    // }


    public function Filter_Classes(Request $request)
    {
        $Grades = Grade::all();
        $Search = Classroom::select('*')->where('Grade_id','=',$request->Grade_id)->get();
        return view('pages.My_Classes.My_Classes',compact('Grades'))->withDetails($Search);

    }

}

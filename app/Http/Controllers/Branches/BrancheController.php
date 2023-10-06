<?php


namespace App\Http\Controllers\Branches;
use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Section;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBranche;
// use app\Models\Branche;
use App\Models\Branche;

    class BrancheController extends Controller
    {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // $Grades = Grade::with(['Sections'])->get();
        $Classroom = Classroom::with(['Branches'])->get();
        $list_Grades = Grade::all();
        $teachers = Teacher::all();
        return view('pages.Branches.Branches',compact('Classroom','list_Grades','teachers'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreBranche $request)
    {

        try {

        $validated = $request->validated();
        $Branche = new Branche();
        $Branche->Name = ['ar' => $request->Name_Branche_Ar, 'en' => $request->Name_Branche_En];
        $Branche->Grade_id = $request->Grade_id;
        $Branche->Class_id = $request->Class_id;
        $Branche->Status = 1;
        $Branche->save();
        $Branche->teachers()->attach($request->teacher_id);
        toastr()->success(trans('messages.success'));

        return redirect()->route('Branche.index');
    }

    catch (\Exception $e){
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(StoreBranche $request)
    {

        try {
        $validated = $request->validated();
        $Branche = Branche::findOrFail($request->id);

        $Branche->Name = ['ar' => $request->Name_Branche_Ar, 'en' => $request->Name_Branche_En];
        $Branche->Grade_id = $request->Grade_id;
        $Branche->Class_id = $request->Class_id;

        if(isset($request->Status)) {
            $Branche->Status = 1;
        } else {
            $Branche->Status = 2;
        }


        // update pivot tABLE
            if (isset($request->teacher_id)) {
                $Branche->teachers()->sync($request->teacher_id);
            } else {
                $Branche->teachers()->sync(array());
            }


        $Branche->save();
        toastr()->success(trans('messages.Update'));

        return redirect()->route('Branche.index');
    }
    catch
    (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(request $request)
    {

        Branche::findOrFail($request->id)->delete();
        toastr()->error(trans('messages.Delete'));
        return redirect()->route('Branche.index');

    }

    public function getclasses($id)
        {
            $list_classes = Classroom::where("Grade_id", $id)->pluck("Name", "id");

            return $list_classes;
        }

    }

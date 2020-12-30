<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\course;
use DB;

class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("studentregister");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new student;
        $student->sname = $request->sname;  
        $student->fname = $request->fname;
        $student->class = $request->class;
        $student->phnum = $request->phnum;
        $student->email = $request->email;
        $student->course = $request->course;

        $student->save();
        return redirect("studentregisterform");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //DB::select('select * from students');
        $student = student::all();
        return view('studentdetails', ['student'=>$student]);
    }

    public function course(Request $request)
    {
        $class = $request->class;
        $data['course'] = course::where('class',$class)->get();
        echo json_encode($data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $student = student::find($id);

        $student->sname = $request->input('sname');
        $student->fname = $request->input('fname');
        $student->class = $request->input('class');
        $student->phnum = $request->input('phnum');
        $student->email = $request->input('email');
        $student->course = $request->input('course');

        $student->save();
        
        return redirect('studentdetails');
    }

    public function updateShow($id){
        $student = student::where('id',$id)->get();
        $classes = [10, 9, 8];
        $courses = course::where('class', $student[0]->class)->get();
        $course = course::find($student[0]->course);
        $selectedClass = $student[0]->class;
        $selectedCourse = $course->name;
        
        return view('updateStudent', ['student'=>$student, 'sc'=>$selectedCourse, 'sclass'=>$selectedClass, 'courses'=>$courses, 'classes'=>$classes]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::find($id);
        $student->delete();
        return redirect('studentdetails');  
    }
}